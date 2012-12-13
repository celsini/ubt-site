<?php $ano = date("Y",time()); ?>
<div class="certificacions form">
<?php echo $this->Form->create('Certificado');?>
<span class="Titulo-Aplicacion">Generar certificación de notas</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
    <tr>
	<th><?php echo 'Estudiante';?></th>
<td>
    
<?php 
echo $this->Form->error('persona_id');
echo $this->Form->input('persona_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','options' => $estudiante)); 
?>
</td>
</tr>

<tr>
	<th>Serial de  páginas</th>
<td>
<?php
        echo $this->Form->error('tx_serial');
	echo $this->Form->input('tx_serial',array('type'=>'text','label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));   
        echo $this->Form->input('tx_ano',array('type'=>'hidden','label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','value'=>$ano));   
        echo $this->Form->input('nu_correlativo',array('type'=>'hidden','label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','value'=>$correlativo));   
?>
</td>
</tr>

</tbody>
</table>
</div>
</div>
<br>
<span class="Sub-Titulo-Aplicacion">Todos los campos marcados con asterisco (<span class='asterisco'>*</span>) son obligatorios</span>
<br>
<table>
<tr>

    <td>
        <?php echo $this->Form->end(__('GENERAR'));?>
    </td>

</tr>
</table>
<br />

<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Cédula');?></th>
			<th><?php echo ('Nombre');?></th>
			<th><?php echo ('Apellido');?></th>
                        <th><?php echo ('Serial');?></th>
                        <th><?php echo ('Año');?></th>
                        <th><?php echo ('Correlativo');?></th>

                                                
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td style="text-align: center"><?php echo h($estudiante['Certificacion']['co_cedula']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Certificacion']['tx_nombre1']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Certificacion']['tx_apellido1']); ?>&nbsp;</td>
                <td><?php echo h($estudiante['Certificacion']['tx_serial']); ?>&nbsp;</td>
                <td style="text-align: center"><?php echo h($estudiante['Certificacion']['tx_ano']); ?>&nbsp;</td>
                <td style="text-align: center"><?php echo h($estudiante['Certificacion']['nu_correlativo']); ?>&nbsp;</td>
		<td  style="text-align:center" class="actions">
                    
                    <?php
  echo $this->element('custom_button',array('controller' => "calificacions",'action' => 'imprimir','label'=>"IMPRIMIR PDF",'param'=>$estudiante['Certificacion']['id']));
?>
                    
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
            <?php
		echo $this->Element('paginador'); ?>
	</div>