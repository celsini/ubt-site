<div class="estudiantes index">
        <span class="Titulo-Aplicacion"><?php echo __('Estudiantes');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Cédula');?></th>
			<th><?php echo ('Nombre');?></th>
			<th><?php echo ('Apellido');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td style="text-align: center"><?php echo h($estudiante['Estudiante']['co_cedula']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['tx_nombre1']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['tx_apellido1']); ?>&nbsp;</td>
		<td  style="text-align:center" class="actions">
                    
                    <?php
  echo $this->element('custom_button',array('controller' => "calificacions",'action' => 'imprimir','label'=>"IMPRIMIR PDF",'param'=>$estudiante['Estudiante']['id']));
?>
                    
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
            <?php
		echo $this->Element('paginador'); ?>
	</div>
</div>
</div>