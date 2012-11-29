<div class="centroformacions view">
    <span class="Titulo-Aplicacion">Consultar- Centro de Formaci&oacute;n</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($centroformacion['Centroformacion']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Centro Formación'); ?></th>
		<td>
			<?php echo h($centroformacion['Centroformacion']['co_centro_formacion']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Centro Formación'); ?></th>
		<td>
			<?php echo h($centroformacion['Centroformacion']['tx_centroformacion']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Unidad Formación'); ?></th>
		<td>
			<?php echo h($centroformacion['Centroformacion']['tx_unidadformacion']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Localidad'); ?></th>
		<td>
			<?php echo $this->Html->link($centroformacion['Localidad']['id'], array('controller' => 'localidads', 'action' => 'view', $centroformacion['Localidad']['id'])); ?>
                        <?php echo h($centroformacion['Localidad']['tx_estado'])." -- ".h($centroformacion['Localidad']['tx_ciudad']); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Responsable'); ?></th>
		<td>
			<?php echo $this->Html->link($centroformacion['Persona']['co_cedula'], array('controller' => 'personas', 'action' => 'view', $centroformacion['Persona']['id'])); ?>
                        <?php echo h($centroformacion['Persona']['tx_nombre1'])."  ".h($centroformacion['Persona']['tx_apellido1']); ?>
			&nbsp;
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "centroformacions",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "centroformacions",'action' => 'edit','label'=>"EDITAR",'param'=>$centroformacion['Centroformacion']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/centroformacions/delete/<?php echo $centroformacion['Centroformacion']['id']?>'}" /></td>

	</tr>
</table>
</div>

