<div class="facilitadors view">
    <span class="Titulo-Aplicacion">Consultar- Facilitador</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($facilitador['Facilitador']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Persona'); ?></th>
		<td>
			<?php echo $this->Html->link($facilitador['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $facilitador['Persona']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Agresado de la universidad'); ?></th>
		<td>
			<?php echo h($facilitador['Facilitador']['tx_agresadouniversidad']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Profesión'); ?></th>
		<td>
			<?php echo h($facilitador['Facilitador']['tx_profesion']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Fecha Grado'); ?></th>
		<td>
			<?php echo h($facilitador['Facilitador']['fe_grado']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Postgrado'); ?></th>
		<td>
			<?php echo h($facilitador['Facilitador']['tx_postgrado']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "facilitadors",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "facilitadors",'action' => 'edit','label'=>"EDITAR",'param'=>$facilitador['Facilitador']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/facilitadors/delete/<?php echo $facilitador['Facilitador']['id']?>'}" /></td>

	</tr>
</table>
</div>

