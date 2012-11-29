<div class="localidads index">
        <span class="Titulo-Aplicacion"><?php echo __('Localidades');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Identificador');?></th>
			<th><?php echo ('Estado');?></th>
			<th><?php echo ('Ciudad');?></th>
			<th><?php echo ('Municipio');?></th>
			<th><?php echo ('Sector');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($localidads as $localidad): ?>
	<tr>
		<td><?php echo h($localidad['Localidad']['id']); ?>&nbsp;</td>
		<td><?php echo h($localidad['Localidad']['tx_estado']); ?>&nbsp;</td>
		<td><?php echo h($localidad['Localidad']['tx_ciudad']); ?>&nbsp;</td>
		<td><?php echo h($localidad['Localidad']['tx_municipio']); ?>&nbsp;</td>
		<td><?php echo h($localidad['Localidad']['tx_sector']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $localidad['Localidad']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "localidads",'action' => 'add','label'=>"NUEVO LOCALIDAD",'param'=>'no'));
?>