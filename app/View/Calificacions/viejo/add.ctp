<div class="calificacions form">
<?php echo $this->Form->create('Calificacions');?>
<span class="Titulo-Aplicacion">Cargar Notas</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>
</div>
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'Cédula de identidad';?></th>
<td>
<?php
	echo $this->Form->error('co_pnf');
	echo $this->Form->input('ci',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Código Equipo de estudio';?></th>
<td>
<?php
	echo $this->Form->error('co_pnf');
	echo $this->Form->input('eq',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
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
        <?php echo $this->Form->end(__('GUARDAR'));?>
    </td>
    <td>
        <?php
 // echo $this->element('custom_button',array('controller' => "calificacions",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
</tr>
</table>

	