<div class="comisions view">
    <span class="Titulo-Aplicacion">Consultar- Comisi&oacute;n</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($comision['Comision']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Código UBT'); ?></th>
		<td>
			<?php echo h($comision['Comision']['co_ubt']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Secreterio'); ?></th>
		<td>
			<?php echo $this->Html->link($comision['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $comision['Persona']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Coordinador nacional'); ?></th>
		<td>
			<?php echo $this->Html->link($comision['Personad']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $comision['Personad']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Fecha Registro'); ?></th>
		<td>
			<?php echo date('d-m-Y', strtotime($comision['Comision']['fe_registro'])); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "comisions",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "comisions",'action' => 'edit','label'=>"EDITAR",'param'=>$comision['Comision']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/comisions/delete/<?php echo $comision['Comision']['id']?>'}" /></td>

	</tr>
</table>
</div>
<?php
 /*   echo "<pre>";
    print_r($comision);
    echo "</pre>";
*/
?>
