<div class="localidads view">
    <span class="Titulo-Aplicacion">Consultar-Localidad</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($localidad['Localidad']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Estado'); ?></th>
		<td>
			<?php echo h($localidad['Localidad']['tx_estado']); ?>
		</td>
 </tr>
 <tr>		<th><?php echo __('Ciudad'); ?></th>
		<td>
			<?php echo h($localidad['Localidad']['tx_ciudad']); ?>
		</td>
 </tr>
 <tr>		<th><?php echo __('Municipio'); ?></th>
		<td>
			<?php echo h($localidad['Localidad']['tx_municipio']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Sector'); ?></th>
		<td>
			<?php echo h($localidad['Localidad']['tx_sector']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "localidads",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "localidads",'action' => 'edit','label'=>"EDITAR",'param'=>$localidad['Localidad']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/localidads/delete/<?php echo $localidad['Localidad']['id']?>'}" /></td>

	</tr>
</table>
</div>

