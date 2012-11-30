<div class="rols view">
    <span class="Titulo-Aplicacion">Consultar-Rol</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($rol['Rol']['co_rol']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Rol'); ?></th>
		<td>
			<?php echo h($rol['Rol']['tx_rol']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Descripcion Rol'); ?></th>
		<td>
			<?php echo h($rol['Rol']['tx_descripcion_rol']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "rols",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "rols",'action' => 'edit','label'=>"EDITAR",'param'=>$rol['Rol']['co_rol'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='<?php echo $this->Html->url(array('controller' => 'rols','action' => 'delete',$rol['Rol']['co_rol']));?>'}" /></td>

	</tr>
</table>
</div>

