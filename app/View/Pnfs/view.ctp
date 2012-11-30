<div class="pnfs view">
    <span class="Titulo-Aplicacion">Consultar- PNF</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($pnf['Pnf']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Código PNF'); ?></th>
		<td>
			<?php echo h($pnf['Pnf']['co_pnf']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($pnf['Pnf']['tx_nombre']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Codigo Interno UBT'); ?></th>
		<td>
			<?php echo h($pnf['Pnf']['tx_codigointerno_ubt']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "pnfs",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "pnfs",'action' => 'edit','label'=>"EDITAR",'param'=>$pnf['Pnf']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='<?php echo $this->Html->url(array('controller' => 'pnfs','action' => 'delete',$pnf['Pnf']['id']));?>'}" /></td>

	</tr>
</table>
</div>

