<div class="materias view">
    <span class="Titulo-Aplicacion">Consultar- Materia</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($materia['Materia']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Código Materia'); ?></th>
		<td>
			<?php echo h($materia['Materia']['co_materia']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Unidad Curricular'); ?></th>
		<td>
			<?php echo h($materia['Materia']['tx_unidad_curricular']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Trayecto'); ?></th>
		<td>
			<?php echo h($materia['Materia']['nu_trayecto']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Tramo'); ?></th>
		<td>
			<?php echo h($materia['Materia']['nu_tramo']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Unidad de creditos'); ?></th>
		<td>
			<?php echo h($materia['Materia']['nu_uc']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('PNF'); ?></th>
		<td>
			<?php echo $this->Html->link($materia['Pnf']['tx_nombre'], array('controller' => 'pnfs', 'action' => 'view', $materia['Pnf']['id'])); ?>
			&nbsp;
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "materias",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "materias",'action' => 'edit','label'=>"EDITAR",'param'=>$materia['Materia']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/materias/delete/<?php echo $materia['Materia']['id']?>'}" /></td>

	</tr>
</table>
</div>

