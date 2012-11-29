<div class="coordinadorCentros index">
        <span class="Titulo-Aplicacion"><?php echo __('Coordinadores Centros');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Identificación');?></th>
			<th><?php echo ('Persona');?></th>
			<th><?php echo ('Fecha activo');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($coordinadorCentros as $coordinadorCentro): ?>
	<tr>
		<td><?php echo h($coordinadorCentro['CoordinadorCentro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coordinadorCentro['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $coordinadorCentro['Persona']['id'])); ?>
		</td>
		<td><?php echo date('d-m-Y', strtotime($coordinadorCentro['CoordinadorCentro']['fe_activo'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $coordinadorCentro['CoordinadorCentro']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "coordinadorCentros",'action' => 'add','label'=>"NUEVO COORDINADOR DE CENTRO",'param'=>'no'));
?>