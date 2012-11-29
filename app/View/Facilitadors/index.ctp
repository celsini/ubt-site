<div class="facilitadors index">
        <span class="Titulo-Aplicacion"><?php echo __('Listados Facilitadores');?></span>
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
			<th><?php echo ('Persona');?></th>
			<th><?php echo ('Universidad');?></th>
			<th><?php echo ('Profesion');?></th>
			<th><?php echo ('Fecha Grado');?></th>
			<th><?php echo ('Postgrado');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($facilitadors as $facilitador): ?>
	<tr>
		<td><?php echo h($facilitador['Facilitador']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($facilitador['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $facilitador['Persona']['id'])); ?>
		</td>
		<td><?php echo h($facilitador['Facilitador']['tx_agresadouniversidad']); ?>&nbsp;</td>
		<td><?php echo h($facilitador['Facilitador']['tx_profesion']); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y', strtotime($facilitador['Facilitador']['fe_grado'])) ?>&nbsp;</td>
                
		<td><?php echo h($facilitador['Facilitador']['tx_postgrado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $facilitador['Facilitador']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "facilitadors",'action' => 'add','label'=>"NUEVO FACILITADOR",'param'=>'no'));
?>