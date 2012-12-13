<div class="calificacions form">
<?php echo $this->Form->create('Calificacion');?>
<span class="Titulo-Aplicacion">Cargar Notas</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
    <tr>
	<th><?php echo 'Estudiante';?></th>
<td>
<?php echo $estudiante; ?>
</td>
</tr>
<tr>
	<th><?php echo 'Equipo de estudio';?></th>
<td>
<?php echo $equipo; ?>
</td>
</tr>

<tr>
	<th>Materia</th>
<td>
<?php
	echo $this->Form->error('equipo_materia_id');
	echo $this->Form->input('equipo_materia_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','options' => $materias));
        echo $this->Form->input('persona_id',array('type'=>'hidden','label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','value'=>$persona_id));
?>
</td>
</tr>

<tr>
	<th>Calificación:</th>
<td>
<?php
	echo $this->Form->error('nu_calificacion');
	echo $this->Form->input('nu_calificacion',array('label'=>false,'error'=>false,'style'=>'width:40px;','class'=>'justUpperCase','options' => $numeros));
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
        <?php
  echo $this->element('custom_button',array('controller' => "calificacions",'action' => 'add','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
    <td>
        <?php echo $this->Form->end(__('GUARDAR'));?>
    </td>

</tr>
</table>
<br />

	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Trayecto');?></th>
			<th><?php echo ('Tramo');?></th>
			<th><?php echo ('Unidad Curricular');?></th>
                        <th><?php echo ('Calificaci&oacute;n');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($notas as $nota): ?>
	<tr>
		<td style="text-align:center"><?php echo h($nota['Nota']['nu_trayecto']); ?>&nbsp;</td>
		<td style="text-align:center"><?php echo h($nota['Nota']['nu_tramo']); ?>&nbsp;</td>
		<td><?php echo h($nota['Nota']['tx_unidad_curricular']); ?>&nbsp;</td>
                <td style="text-align:center"><?php echo h($nota['Nota']['nu_calificacion']); ?>&nbsp;</td>
		<td  style="text-align:center" class="actions">
			<input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='<?php echo $this->Html->url(array('controller' => 'calificacions','action' => 'delete',$nota['Nota']['id']));?>'}" />
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
            <?php
		echo $this->Element('paginador'); ?>
	</div>