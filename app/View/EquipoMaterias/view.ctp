<div class="equipoMaterias view">
    <span class="Titulo-Aplicacion">Consultar- Equipos-Materias</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($equipoMateria['EquipoMateria']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Materia'); ?></th>
		<td>
			<?php echo h($equipoMateria['Materia']['tx_unidad_curricular']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Facilitador'); ?></th>
		<td>
			<?php echo $this->Html->link($equipoMateria['Facilitador']['id'], array('controller' => 'facilitadors', 'action' => 'view', $equipoMateria['Facilitador']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Fecha Cierre'); ?></th>
		<td>
			<?php echo h($equipoMateria['EquipoMateria']['fe_cierre']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Periodo'); ?></th>
		<td>
			<?php echo h($equipoMateria['EquipoMateria']['tx_periodo']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Observacion'); ?></th>
		<td>
			<?php echo h($equipoMateria['EquipoMateria']['tx_observacion']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Equipo Estudio'); ?></th>
		<td>
			<?php echo $this->Html->link($equipoMateria['EquipoEstudio']['tx_nombre_equipoestudio'], array('controller' => 'equipo_estudios', 'action' => 'view', $equipoMateria['EquipoEstudio']['id'])); ?>
			&nbsp;
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "equipoMaterias",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "equipoMaterias",'action' => 'edit','label'=>"EDITAR",'param'=>$equipoMateria['EquipoMateria']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/equipoMaterias/delete/<?php echo $equipoMateria['EquipoMateria']['id']?>'}" /></td>

	</tr>
</table>
</div>

