<div class="personas index">
        <span class="Titulo-Aplicacion"><?php echo __('Listado Personas');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('id');?></th>
			<th><?php echo ('Cédula');?></th>
			<th><?php echo ('1er Nombre');?></th>
			<th><?php echo ('2da Nombre');?></th>
			<th><?php echo ('1er Apellido');?></th>
			<th><?php echo ('2do Apellido');?></th>
                        <th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['co_cedula']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tx_nombre1']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tx_nombre2']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tx_apellido1']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tx_apellido2']); ?>&nbsp;</td>
                <td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $persona['Persona']['id'])); ?>
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
  echo $this->element('custom_button',array('controller' => "personas",'action' => 'add','label'=>"NUEVO PERSONA",'param'=>'no'));
?>