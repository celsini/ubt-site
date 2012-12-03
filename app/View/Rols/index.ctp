<div class="rols index">
        <span class="Titulo-Aplicacion"><?php echo __('Rols');?></span>
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
			<th><?php echo ('Rol');?></th>
			<th><?php echo ('Descripción Rol');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($rols as $rol): ?>
	<tr>
		<td><?php echo h($rol['Rol']['co_rol']); ?>&nbsp;</td>
		<td><?php echo h($rol['Rol']['tx_rol']); ?>&nbsp;</td>
		<td><?php echo h($rol['Rol']['tx_descripcion_rol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $rol['Rol']['co_rol'])); ?>
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
  echo $this->element('custom_button',array('controller' => "rols",'action' => 'add','label'=>"NUEVO ROL",'param'=>'no'));
?>

<br />
<br />
<?php
  echo $this->element('custom_button',array('controller' => "rols",'action' => 'imprimir','label'=>"IMPRIMIR PDF",'param'=>'no'));
?>