<div class="pnfs index">
        <span class="Titulo-Aplicacion"><?php echo __('Listado de PNF');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Ident');?></th>
			<th><?php echo ('Código PNF');?></th>
			<th><?php echo ('Nombre');?></th>
			<th><?php echo ('Codigo Interno UBT');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($pnfs as $pnf): ?>
	<tr>
		<td><?php echo h($pnf['Pnf']['id']); ?>&nbsp;</td>
		<td><?php echo h($pnf['Pnf']['co_pnf']); ?>&nbsp;</td>
		<td><?php echo h($pnf['Pnf']['tx_nombre']); ?>&nbsp;</td>
		<td><?php echo h($pnf['Pnf']['tx_codigointerno_ubt']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $pnf['Pnf']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "pnfs",'action' => 'add','label'=>"NUEVO PNF",'param'=>'no'));
?>