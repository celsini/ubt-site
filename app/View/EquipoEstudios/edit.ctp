<div class="equipoEstudios form">
<?php echo $this->Form->create('EquipoEstudio');?>
<span class="Titulo-Aplicacion">equipoEstudios form</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    <?php echo $this->Form->input('id');?>

<tr>
	<th><?php echo 'Código Equipo Estudio';?></th>
<td>
<?php
	echo $this->Form->error('co_equipo_estudio');
	echo $this->Form->input('co_equipo_estudio',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Nombre Equipo Estudio';?></th>
<td>
<?php
	echo $this->Form->error('tx_nombre_equipoestudio');
	echo $this->Form->input('tx_nombre_equipoestudio',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'PNF';?></th>
<td>
<?php
	echo $this->Form->error('pnf_id');
	echo $this->Form->input('pnf_id',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Centro de Formación';?></th>
<td>
<?php
	echo $this->Form->error('centroformacion_id');
	echo $this->Form->input('centroformacion_id',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Turno';?></th>
<td>
<?php
	echo $this->Form->error('tx_turno');
	echo $this->Form->input('tx_turno',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Sección';?></th>
<td>
<?php
	echo $this->Form->error('tx_seccion');
	echo $this->Form->input('tx_seccion',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
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
  echo $this->element('custom_button',array('controller' => "equipoEstudios",'action' => 'index','label'=>"REGRESAR",'param'=>'no'));
?>    </td>
</tr>
</table>