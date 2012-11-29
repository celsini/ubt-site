<div class="materias index">
        <span class="Titulo-Aplicacion"><?php echo __('Listado de Materias');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Ident');?></th>
			<th><?php echo ('Código');?></th>
			<th><?php echo ('Unidad Curricular');?></th>
			<th><?php echo ('Trayecto');?></th>
			<th><?php echo ('Tramo');?></th>
			<th><?php echo ('Creditos');?></th>
			<th><?php echo ('PNF');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($materias as $materia): ?>
	<tr>
		<td><?php echo h($materia['Materia']['id']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['co_materia']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['tx_unidad_curricular']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['nu_trayecto']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['nu_tramo']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['nu_uc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($materia['Pnf']['tx_nombre'], array('controller' => 'pnfs', 'action' => 'view', $materia['Pnf']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $materia['Materia']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "materias",'action' => 'add','label'=>"NUEVO MATERIA",'param'=>'no'));
?>