<div class="localidads form">
<?php echo $this->Form->create('Localidad');?>
<span class="Titulo-Aplicacion">localidads form</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'tx_estado';?></th>
<td>
<?php
	echo $this->Form->error('tx_estado');
	echo $this->Form->input('tx_estado',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'tx_municipio';?></th>
<td>
<?php
	echo $this->Form->error('tx_municipio');
	echo $this->Form->input('tx_municipio',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'tx_ciudad';?></th>
<td>
<?php
	echo $this->Form->error('tx_ciudad');
	echo $this->Form->input('tx_ciudad',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'tx_sector';?></th>
<td>
<?php
	echo $this->Form->error('tx_sector');
	echo $this->Form->input('tx_sector',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
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
  echo $this->element('custom_button',array('controller' => "localidads",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
</tr>
</table>