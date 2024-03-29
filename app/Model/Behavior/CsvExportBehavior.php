<?php
/**
 * Copyright 2011, PRONIQUE Software (http://www.pronique.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2011, PRONIQUE Software (http://www.pronique.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 *
 *
 * Csv Export Behavior
 *
 * @subpackage models.behaviors
 */
class CsvExportBehavior extends ModelBehavior {

/**
 * Exportable behavior settings
 *
 * @var array
 */
    public $settings = array();

/**
 * List of errors generated by the export action
 *
 * @var array
 */
    public $errors = array();

/**
 * List of objects instances or callables to notify from events on this class
 *
 * @var array
 */
    protected $_subscribers = array();

    protected $tmpDir = 'csvexport';

    protected $filename = "";

    protected $tableToLoad = "";
    protected $condition = "";
/**
 * Initializes this behavior for the model $Model
 *
 * @param Model $Model
 * @param array $settigs list of settings to be used for this model
 * @return void
 */
    public function setup(Model &$Model, $settings = array()) {
        if (!isset($this->settings[$Model->alias])) {
            $this->settings[$Model->alias] = array(
                'encoding' => 'utf8',
                'delimiter' => ';',
                'enclosure' => '"',
                'max_execution_time' => 720
            );
        }
        $this->settings[$Model->alias] = array_merge($this->settings[$Model->alias], $settings);
    }


/**
 * Returns a csv formatted string of every record in the model
 *
 * @param Model $Model
 * @return string the csv data
 */
    public function exportCSV(Model &$Model ) {
        if( !ini_get('safe_mode') && ini_get('max_execution_time') < $this->settings[$Model->alias]['max_execution_time']  ){
            set_time_limit($this->settings[$Model->alias]['max_execution_time']); //Extend timout to 6 minutes for large data exports.
        }

        $Model->recursive = -1;
        $records = $Model->find('all');

        if ( !empty($records ) ) {
            $this->ensureTmp();

            $tmpFilename = TMP . $this->tmpDir . DS .  strtolower( Inflector::pluralize($Model->alias) ) . '-' . date('Ymd-Hms') . '.csv';
            $this->filename = $tmpFilename;
            $fp = fopen($tmpFilename, 'w');
            if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                fwrite($fp, "\xEF\xBB\xBF");
                fputcsv( $fp, $this->arrayToUtf8( array_keys($records[0][$Model->alias]) ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            } else {
                fputcsv( $fp, array_keys($records[0][$Model->alias]), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            }

            foreach( $records as $record ) {
                if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                    fputcsv($fp, $this->arrayToUtf8( $record[$Model->alias] ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                } else {
                    fputcsv($fp, $record[$Model->alias], $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                }
            }
            fclose( $fp );
            $data = file_get_contents( $tmpFilename );
            $this->cleanupTmp( $tmpFilename );

            return $data;
        }
        return false;
    }


/**
 * Returns the errors generated by last export
 *
 * @param Model $Model
 * @return array
 */
    public function getExportErrors(Model &$Model) {
        if (empty($this->errors[$Model->alias])) {
            return array();
        }
        return $this->errors[$Model->alias];
    }

/**
 * Attachs a new listener for the events generated by this class
 *
 * @param Model $Model
 * @param mixed listener instances of an object or valid php callback
 * @return void
 */
    public function attachExportListener(Model $Model, $listener) {
        $this->_subscribers[$Model->alias][] = $listener;
    }

/**
 * Notifies the listeners of events generated by this class
 *
 * @param Model $Model
 * @param string $action the name of the event. It will be used as method name for object listeners
 * @param mixed $data additional information to pass to the listener callback
 * @return void
 */
    protected function _notify(Model $Model, $action, $data = null) {
        if (empty($this->_subscribers[$Model->alias])) {
            return;
        }
        foreach ($this->_subscribers[$Model->alias] as $object) {
            if (method_exists($object, $action)) {
                $object->{$action}($data);
            }
            if (is_callable($object)) {
                call_user_func($object, $action, $data);
            }
        }
    }

    /**
    * This Behavior writes tmp files to take advantage of the built-in fputcsv function.
    *
    */
    protected function ensureTmp() {
        $tmpDir = TMP . $this->tmpDir;
        if ( !file_exists($tmpDir ) ) {
            mkdir( $tmpDir, 0777);
        }
    }
    /**
    * Delete the tmp file, only if $tmp_file lives in TMP directory
    * otherwise throw an Exception
    *
    * @param mixed $tmp_file
    */
    protected function cleanupTmp( $tmp_file='' ) {
        $realpath = realpath( $tmp_file );

        if ( substr( $realpath, 0, strlen( TMP ) ) != TMP ) {
            throw new Exception('I refuse to delete a file outside of ' . TMP );
        }

        if ( file_exists( $tmp_file ) ) {
            unlink( $tmp_file );
        }
    }

    /**
    * if array is not UTF-8 then convert keys and values to UTF-8
    * method is recursive
    *
    * @param mixed $in
    */
    protected function arrayToUtf8($in) {
        if (is_array($in)) {
            foreach ($in as $key => $value) {
                $out[$this->arrayToUtf8($key)] = $this->arrayToUtf8($value);
            }
        } elseif(is_string($in)) {
            if(mb_detect_encoding($in) != "UTF-8")
                return utf8_encode($in);
            else
                return $in;
        } else {
            return $in;
        }
        return $out;
    }


    protected function getCondition() {
        return $this->condition;
    }

    public function setCondition($condition) {
        $this->condition = $condition;
    }

    public function getFilename(){
        return $this->filename;

    }

    public function setTableToLoad($tablaToLoad){
        $this->tableToLoad = $tablaToLoad;

    }

    public function getTableToLoad(){
        return $this->tableToLoad;

    }


/**
 * Returns a csv formatted string of every record in the model
 *
 * @param Model $Model
 * @return string the csv data
 */
    public function exportAndLoadCSV(Model &$Model ) {
        if( !ini_get('safe_mode') && ini_get('max_execution_time') < $this->settings[$Model->alias]['max_execution_time']  ){
            set_time_limit($this->settings[$Model->alias]['max_execution_time']); //Extend timout to 6 minutes for large data exports.
        }
       // var_dump($this->getCondition());
        $Model->recursive = -1;
        $records = $Model->find('all',array('limit'=>10000));
        if ( !empty($records ) ) {
            $this->ensureTmp();

            $tmpFilename = TMP . $this->tmpDir . DS .  strtolower( Inflector::pluralize($Model->alias) ) . '-' . date('Ymd-Hms') . '.csv';
            $this->filename = $tmpFilename;
            $fp = fopen($tmpFilename, 'w');
            if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                fwrite($fp, "\xEF\xBB\xBF");
                fputcsv( $fp, $this->arrayToUtf8( array_keys($records[0][$Model->alias]) ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            } else {
                fputcsv( $fp, array_keys($records[0][$Model->alias]), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            }

            foreach( $records as $record ) {
                if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                    fputcsv($fp, $this->arrayToUtf8( $record[$Model->alias] ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                } else {
                    fputcsv($fp, $record[$Model->alias], $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                }
            }
            fclose( $fp );
            $data = file_get_contents( $tmpFilename );

            $sql = "COPY gsm_mensajes.c001t_destinatario1 FROM '$tmpFilename' DELIMITERS ';' CSV HEADER;";
            $Model->query($sql);
            $this->cleanupTmp( $tmpFilename );

            return $data;
        }
        return false;
    }

    /**
 * Returns a csv formatted string of every record in the model
 *
 * @param Model $Model
 * @return string the csv data
 */
    public function exportCSVForSmsEnviados(Model &$Model ) {
        if( !ini_get('safe_mode') && ini_get('max_execution_time') < $this->settings[$Model->alias]['max_execution_time']  ){
            set_time_limit($this->settings[$Model->alias]['max_execution_time']); //Extend timout to 6 minutes for large data exports.
        }

        $Model->recursive = -1;
       /*       var_dump($this->condition);
        exit;*/
        $sqlToBeExe= $_SESSION['sqlToBeExe'];
        if(!empty($sqlToBeExe))
            $records = $Model->find('all',$sqlToBeExe);
        else
            $records = $Model->find('all');


        if ( !empty($records ) ) {
            $this->ensureTmp();

            $tmpFilename = TMP . $this->tmpDir . DS .  strtolower( Inflector::pluralize($Model->alias) ) . '-' . date('Ymd-Hms') . '.csv';
            $this->filename = $tmpFilename;
            $fp = fopen($tmpFilename, 'w');
            if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                fwrite($fp, "\xEF\xBB\xBF");
                fputcsv( $fp, $this->arrayToUtf8( array_keys($records[0][$Model->alias]) ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            } else {
                fputcsv( $fp, array_keys($records[0][$Model->alias]), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            }

            foreach( $records as $record ) {
                if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                    fputcsv($fp, $this->arrayToUtf8( $record[$Model->alias] ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                } else {
                    fputcsv($fp, $record[$Model->alias], $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                }
            }
            fclose( $fp );
            $data = file_get_contents( $tmpFilename );
            $this->cleanupTmp( $tmpFilename );

            return $data;
        }
        return false;
    }

   public function exportCSVForSmsRecibido(Model &$Model ) {
        if( !ini_get('safe_mode') && ini_get('max_execution_time') < $this->settings[$Model->alias]['max_execution_time']  ){
            set_time_limit($this->settings[$Model->alias]['max_execution_time']); //Extend timout to 6 minutes for large data exports.
        }

        $Model->recursive = -1;
       /*       var_dump($this->condition);
        exit;*/
        $sqlToBeExe= $_SESSION['sqlToBeExe'];
        if(!empty($sqlToBeExe))
            $records = $Model->find('all',$sqlToBeExe);
        else
            $records = $Model->find('all');


        if ( !empty($records ) ) {
            $this->ensureTmp();

            $tmpFilename = TMP . $this->tmpDir . DS .  strtolower( Inflector::pluralize($Model->alias) ) . '-' . date('Ymd-Hms') . '.csv';
            $this->filename = $tmpFilename;
            $fp = fopen($tmpFilename, 'w');
            if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                fwrite($fp, "\xEF\xBB\xBF");
                fputcsv( $fp, $this->arrayToUtf8( array_keys($records[0][$Model->alias]) ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            } else {
                fputcsv( $fp, array_keys($records[0][$Model->alias]), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            }

            foreach( $records as $record ) {
                if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                    fputcsv($fp, $this->arrayToUtf8( $record[$Model->alias] ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                } else {
                    fputcsv($fp, $record[$Model->alias], $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                }
            }
            fclose( $fp );
            $data = file_get_contents( $tmpFilename );
            $this->cleanupTmp( $tmpFilename );

            return $data;
        }
        return false;
    }

    public function exportCSVForGrupos(Model &$Model ) {
        if( !ini_get('safe_mode') && ini_get('max_execution_time') < $this->settings[$Model->alias]['max_execution_time']  ){
            set_time_limit($this->settings[$Model->alias]['max_execution_time']); //Extend timout to 6 minutes for large data exports.
        }
  
        $Model->recursive = -1;
       /*       var_dump($this->condition);
        exit;*/
        $sqlToBeExe= $_SESSION['sqlToBeExe'];
        if(!empty($sqlToBeExe))
            $records = $Model->find('all',$sqlToBeExe);
        else
            $records = $Model->find('all');


        if ( !empty($records ) ) {
            $this->ensureTmp();

            $tmpFilename = TMP . $this->tmpDir . DS .  strtolower( Inflector::pluralize($Model->alias) ) . '-' . date('Ymd-Hms') . '.csv';
            $this->filename = $tmpFilename;
            $fp = fopen($tmpFilename, 'w');
            if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                fwrite($fp, "\xEF\xBB\xBF");
                fputcsv( $fp, $this->arrayToUtf8( array_keys($records[0][$Model->alias]) ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            } else {
                fputcsv( $fp, array_keys($records[0][$Model->alias]), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
            }

            foreach( $records as $record ) {
                if ( $this->settings[$Model->alias]['encoding'] == 'utf8' ) {
                    fputcsv($fp, $this->arrayToUtf8( $record[$Model->alias] ), $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                } else {
                    fputcsv($fp, $record[$Model->alias], $this->settings[$Model->alias]['delimiter'], $this->settings[$Model->alias]['enclosure'] );
                }
            }
            fclose( $fp );
            $data = file_get_contents( $tmpFilename );
            $this->cleanupTmp( $tmpFilename );

            return $data;
        }
        return false;
    }
}