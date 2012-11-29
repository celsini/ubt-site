<div class="coordinadorCentros view">
    <span class="Titulo-Aplicacion">Consultar- Coordinador</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($coordinadorCentro['CoordinadorCentro']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Persona'); ?></th>
		<td>
			<?php echo $this->Html->link($coordinadorCentro['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $coordinadorCentro['Persona']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Fecha Activo'); ?></th>
		<td>
			<?php echo date('d-m-Y', strtotime($coordinadorCentro['CoordinadorCentro']['fe_activo'])); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "coordinadorCentros",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "coordinadorCentros",'action' => 'edit','label'=>"EDITAR",'param'=>$coordinadorCentro['CoordinadorCentro']['id'])); 
?></td>
 <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='<?php echo $this->Html->url(array('controller' => 'coordinadorCentros','action' => 'delete',$coordinadorCentro['CoordinadorCentro']['id']));?>'}" /></td>

	</tr>
</table>
</div>

