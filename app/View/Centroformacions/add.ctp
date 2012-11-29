<div class="centroformacions form">
<?php echo $this->Form->create('Centroformacion');?>
    <span class="Titulo-Aplicacion">Agregar Centro de formaci&oacute;n</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'Código Centro';?></th>
<td>
<?php
	echo $this->Form->error('co_centro_formacion');
	echo $this->Form->input('co_centro_formacion',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Centro de Formación';?></th>
<td>
<?php
	echo $this->Form->error('tx_centroformacion');
	echo $this->Form->input('tx_centroformacion',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Unidad de Formación';?></th>
<td>
<?php
	echo $this->Form->error('tx_unidadformacion');
	echo $this->Form->input('tx_unidadformacion',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Localidad';?></th>
<td>
<?php
	echo $this->Form->error('localidad_id');
	echo $this->Form->input('localidad_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','options'=>$optionsLocalidad));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Responsable';?></th>
<td>
<?php
	echo $this->Form->error('persona_id');
	echo $this->Form->input('persona_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','options'=>$optionsPersona));
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
  echo $this->element('custom_button',array('controller' => "centroformacions",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
</tr>
</table>