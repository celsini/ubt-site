<div class="equipoEstudios index">
        <span class="Titulo-Aplicacion"><?php echo __('Equipo Estudios');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Ident');?></th>
			<th><?php echo ('Código Equipo');?></th>
			<th><?php echo ('Nombre Equipo');?></th>
			<th><?php echo ('Turno');?></th>
			<th><?php echo ('Sección');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($equipoEstudios as $equipoEstudio): ?>
	<tr>
		<td><?php echo h($equipoEstudio['EquipoEstudio']['id']); ?>&nbsp;</td>
		<td><?php echo h($equipoEstudio['EquipoEstudio']['co_equipo_estudio']); ?>&nbsp;</td>
		<td><?php echo h($equipoEstudio['EquipoEstudio']['tx_nombre_equipoestudio']); ?>&nbsp;</td>
		<td><?php echo h($equipoEstudio['EquipoEstudio']['tx_turno']); ?>&nbsp;</td>
		<td><?php echo h($equipoEstudio['EquipoEstudio']['tx_seccion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $equipoEstudio['EquipoEstudio']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "equipoEstudios",'action' => 'add','label'=>"NUEVO EQUIPO ESTUDIO",'param'=>'no'));
?>