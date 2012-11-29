<div class="equipoMaterias index">
        <span class="Titulo-Aplicacion"><?php echo __('Equipo Materias');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Ident');?></th>
			<th><?php echo ('Materia');?></th>
			<th><?php echo ('Facilitador');?></th>
			<th><?php echo ('Fecha Cierre');?></th>
			<th><?php echo ('Periodo');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($equipoMaterias as $equipoMateria): ?>
	<tr>

                <?php
                    $facilitador = $equipoMateria['Facilitador']['Persona']['tx_nombre1'].' '.$equipoMateria['Facilitador']['Persona']['tx_apellido1'];
                 ?>
                
		<td><?php echo h($equipoMateria['EquipoMateria']['id']); ?>&nbsp;</td>
		<td><?php echo h($equipoMateria['Materia']['tx_unidad_curricular']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($facilitador, array('controller' => 'facilitadors', 'action' => 'view', $equipoMateria['Facilitador']['id'])); ?>
		</td>
		<td><?php echo date('d-m-Y', strtotime($equipoMateria['EquipoMateria']['fe_cierre'])); ?>&nbsp;</td>
		<td><?php echo h($equipoMateria['EquipoMateria']['tx_periodo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $equipoMateria['EquipoMateria']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
            <?php
		echo $this->Element('paginador'); ?>
	</div>
</div>
</div>
<br />
<?php
  echo $this->element('custom_button',array('controller' => "equipoMaterias",'action' => 'add','label'=>"NUEVO EQUIPO MATERIA",'param'=>'no'));
?>