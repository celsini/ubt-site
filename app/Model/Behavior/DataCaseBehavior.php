<?php
/**
 * Convert text case fields before save the record
 *
 * @author  Elias Farah
 * @credits  Luiz Fernando Colombelli Albuquerque
 * @credits  Rinaldo Belisário Júnior
 * @credits  CEJAM - http://www.saudeprev.com.br
 */
class DataCaseBehavior extends ModelBehavior {

    var $settings = array();

    function setup(&$model, $settings) {
    $this->settings[$model->alias] = (array)$settings;
    }

    /**
     *Function which converts the text to specified case
     * @param array $data data array from and to database
     * @return array converted array;
     * @access restricted
     */
    function _convertCase(&$model,$data){
        foreach($data as $dado)
        {
            foreach ($this->settings[$model->alias] as $field=>$type)
            {
                $language = "";
                if(is_array($type))
                {
                    $language = $type[1];
                    $type     = $type[0];
                }
             
                if($type=="upper")
                {   $data[$model->alias][$field] = mb_strtoupper($data[$model->alias][$field], 'UTF-8');    }
                elseif($type=="lower")
                {   $data[$model->alias][$field] = mb_strtolower($data[$model->alias][$field],'UTF-8');    }
                elseif($type=="first")
                {
                    $data[$model->alias][$field] = mb_convert_case($data[$model->alias][$field], MB_CASE_TITLE, "UTF-8");

//                  Using in Brazilian names
                    if($language=="BR")
                    {
                        $data[$model->alias][$field] = str_replace(" Do ", " do ", $data[$model->alias][$field]);
                        $data[$model->alias][$field] = str_replace(" Dos ", " dos ", $data[$model->alias][$field]);
                        $data[$model->alias][$field] = str_replace(" Da ", " da ", $data[$model->alias][$field]);
                        $data[$model->alias][$field] = str_replace(" Das ", " das ", $data[$model->alias][$field]);
                        $data[$model->alias][$field] = str_replace(" De ", " de ", $data[$model->alias][$field]);
                    }
                }
            }
        }
        return $data;
    }

    //Function before save.
    function beforeSave($model) {
        $model->data = $this->_convertCase(&$model,$model->data); //direction is from interface to database
        return true;
    }
}
?> 