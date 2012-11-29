<div class="materias form">
<?php echo $this->Form->create('Materia');?>
<span class="Titulo-Aplicacion">materias form</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    <?php echo $this->Form->input('id');?>

<tr>
	<th><?php echo 'Código Materia';?></th>
<td>
<?php
	echo $this->Form->error('co_materia');
	echo $this->Form->input('co_materia',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Unidad Curricular';?></th>
<td>
<?php
	echo $this->Form->error('tx_unidad_curricular');
	echo $this->Form->input('tx_unidad_curricular',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Numero Trayecto';?></th>
<td>
<?php
	echo $this->Form->error('nu_trayecto');
	echo $this->Form->input('nu_trayecto',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Numero Tramo';?></th>
<td>
<?php
	echo $this->Form->error('nu_tramo');
	echo $this->Form->input('nu_tramo',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Unidad Créditos';?></th>
<td>
<?php
	echo $this->Form->error('nu_uc');
	echo $this->Form->input('nu_uc',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
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
        <?php echo $this->Form->end(__('EDITAR'));?>
    </td>
    <td>
        <?php
  echo $this->element('custom_button',array('controller' => "materias",'action' => 'index','label'=>"REGRESAR",'param'=>'no'));
?>    </td>
</tr>
</table>