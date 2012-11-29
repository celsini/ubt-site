<div class="centroformacions index">
        <span class="Titulo-Aplicacion"><?php echo __('Listado de Centros de Formación');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Ident.');?></th>
			<th><?php echo ('Código');?></th>
			<th><?php echo ('Centro Formación');?></th>
			<th><?php echo ('Unidad Formación');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($centroformacions as $centroformacion): ?>
	<tr>
		<td><?php echo h($centroformacion['Centroformacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($centroformacion['Centroformacion']['co_centro_formacion']); ?>&nbsp;</td>
		<td><?php echo h($centroformacion['Centroformacion']['tx_centroformacion']); ?>&nbsp;</td>
		<td><?php echo h($centroformacion['Centroformacion']['tx_unidadformacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $centroformacion['Centroformacion']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "centroformacions",'action' => 'add','label'=>"NUEVO CENTRO DE FORMACIÓN",'param'=>'no'));
?>