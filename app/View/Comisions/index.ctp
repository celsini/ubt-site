<div class="comisions index">
        <span class="Titulo-Aplicacion"><?php echo __('Comisiones');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Identificaodr');?></th>
			<th><?php echo ('Codigo Ubt');?></th>
			<th><?php echo ('Secretario');?></th>
			<th><?php echo ('Coordinador Nacional');?></th>
			<th><?php echo ('Fecha Registro');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($comisions as $comision): ?>
	<tr>
    
		<td><?php echo h($comision['Comision']['id']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['co_ubt']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comision['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $comision['Persona']['id'])); ?>
		</td>

		<td>
			<?php echo $this->Html->link($comision['Personad']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $comision['Personad']['id'])); ?>
		</td>
		<td><?php echo date('d-m-Y', strtotime($comision['Comision']['fe_registro'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $comision['Comision']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "comisions",'action' => 'add','label'=>"NUEVO COMISIÓN",'param'=>'no'));
?>