<div class="personas form">
<?php echo $this->Form->create('Persona');?>
<span class="Titulo-Aplicacion">Agregar- Persona</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'Cédula';?></th>
<td>
<?php
	echo $this->Form->error('co_cedula');
	echo $this->Form->input('co_cedula',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Localidad';?></th>
<td>
<?php
	echo $this->Form->error('localidad_id');
	echo $this->Form->input('localidad_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','options' => $options));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Nacionalidad';?></th>
<td>
<?php
	echo $this->Form->error('tx_nacionalidad');
	echo $this->Form->input('tx_nacionalidad',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Municipio';?></th>
<td>
<?php
	echo $this->Form->error('tx_municipio');
	echo $this->Form->input('tx_municipio',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo '1er Nombre';?></th>
<td>
<?php
	echo $this->Form->error('tx_nombre1');
	echo $this->Form->input('tx_nombre1',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo '2do Nombre';?></th>
<td>
<?php
	echo $this->Form->error('tx_nombre2');
	echo $this->Form->input('tx_nombre2',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo '1er Apellido';?></th>
<td>
<?php
	echo $this->Form->error('tx_apellido1');
	echo $this->Form->input('tx_apellido1',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo '2er Apellido';?></th>
<td>
<?php
	echo $this->Form->error('tx_apellido2');
	echo $this->Form->input('tx_apellido2',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Fecha Nacimiento';?></th>
<td>
<?php
	echo $this->Form->error('fe_nacimiento');
	echo $this->Form->input('fe_nacimiento',array('label'=>false,'error'=>false,'style'=>'width:80px;','error'=>false,'dateFormat'=>'D/M/Y','monthNames'=>$meses,'minYear' => date('Y') - 130, 'maxYear' => date('Y')));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Lugar Nacimiento';?></th>
<td>
<?php
	echo $this->Form->error('tx_lugar_nacimiento');
	echo $this->Form->input('tx_lugar_nacimiento',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Sexo';?></th>
<td>
<?php
	echo $this->Form->error('tx_sexo');
	echo $this->Form->input('tx_sexo',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Estado civil';?></th>
<td>
<?php
	echo $this->Form->error('tx_edocivil');
	echo $this->Form->input('tx_edocivil',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Telf Fijo';?></th>
<td>
<?php
	echo $this->Form->error('nu_tlffijo');
	echo $this->Form->input('nu_tlffijo',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Telf Movíl';?></th>
<td>
<?php
	echo $this->Form->error('nu_tlfmovil');
	echo $this->Form->input('nu_tlfmovil',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Grado Instrucción';?></th>
<td>
<?php
	echo $this->Form->error('tx_grado_instruccion');
	echo $this->Form->input('tx_grado_instruccion',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Email';?></th>
<td>
<?php
	echo $this->Form->error('tx_email');
	echo $this->Form->input('tx_email',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<br>
<span class="Sub-Titulo-Aplicacion">Todos los campos marcados con asterisco (<span class='asterisco'>*</span>) son obligatorios</span>
<br>
<table>
<tr>
    <td>
        <?php echo $this->Form->end(__('GUARDAR'));?>
    </td>
    <td>
        <?php
  echo $this->element('custom_button',array('controller' => "personas",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
</tr>
</table>
<script type="text/javascript">	
    $("#PersonaFeNacimientoDay").css("width","55px");
    $("#PersonaFeNacimientoYear").css("width","60px");
</script>

