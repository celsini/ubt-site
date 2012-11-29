<div class="equipoEstudios view">
    <span class="Titulo-Aplicacion">Consultar- Equipo de Estudio</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($equipoEstudio['EquipoEstudio']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Código Equipo Estudio'); ?></th>
		<td>
			<?php echo h($equipoEstudio['EquipoEstudio']['co_equipo_estudio']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Nombre Equipo Estudio'); ?></th>
		<td>
			<?php echo h($equipoEstudio['EquipoEstudio']['tx_nombre_equipoestudio']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('PNF'); ?></th>
		<td>
			<?php echo $this->Html->link($equipoEstudio['Pnf']['tx_nombre'], array('controller' => 'pnfs', 'action' => 'view', $equipoEstudio['Pnf']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Centro Formación'); ?></th>
		<td>
			<?php echo $this->Html->link($equipoEstudio['Centroformacion']['tx_centroformacion'], array('controller' => 'centroformacions', 'action' => 'view', $equipoEstudio['Centroformacion']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Turno'); ?></th>
		<td>
			<?php echo h($equipoEstudio['EquipoEstudio']['tx_turno']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Seccion'); ?></th>
		<td>
			<?php echo h($equipoEstudio['EquipoEstudio']['tx_seccion']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "equipoEstudios",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "equipoEstudios",'action' => 'edit','label'=>"EDITAR",'param'=>$equipoEstudio['EquipoEstudio']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/equipoEstudios/delete/<?php echo $equipoEstudio['EquipoEstudio']['id']?>'}" /></td>

	</tr>
</table>
</div>

