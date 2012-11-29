<div class="personas view">
    <span class="Titulo-Aplicacion">Consultar- Persona</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Identificador'); ?></th>
		<td>
			<?php echo h($persona['Persona']['id']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Cédula'); ?></th>
		<td>
			<?php echo h($persona['Persona']['co_cedula']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Localidad'); ?></th>
		<td>
			<?php echo $this->Html->link($persona['Localidad']['id'], array('controller' => 'localidads', 'action' => 'view', $persona['Localidad']['id'])); ?>
			&nbsp;
		</td>
 </tr> <tr>		<th><?php echo __('Nacionalidad'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_nacionalidad']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Municipio'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_municipio']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('1er Nombre'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_nombre1']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('2da Nombre'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_nombre2']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('1er Apellido'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_apellido1']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('2da Apellido'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_apellido2']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Nacimiento'); ?></th>
		<td>
			<?php echo h($persona['Persona']['fe_nacimiento']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Lugar Nacimiento'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_lugar_nacimiento']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Sexo'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_sexo']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Estado Cívil'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_edocivil']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Numero Fijo'); ?></th>
		<td>
			<?php echo h($persona['Persona']['nu_tlffijo']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Numero Movíl'); ?></th>
		<td>
			<?php echo h($persona['Persona']['nu_tlfmovil']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Grado Instruccion'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_grado_instruccion']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Correo'); ?></th>
		<td>
			<?php echo h($persona['Persona']['tx_email']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><?php
  echo $this->element('custom_button',array('controller' => "personas",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?></td>
            <td><?php
  echo $this->element('custom_button',array('controller' => "personas",'action' => 'edit','label'=>"EDITAR",'param'=>$persona['Persona']['id'])); 
?></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/personas/delete/<?php echo $persona['Persona']['id']?>'}" /></td>

	</tr>
</table>
</div>

