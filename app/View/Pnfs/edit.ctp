<div class="pnfs form">
<?php echo $this->Form->create('Pnf');?>
<span class="Titulo-Aplicacion">Editar- PNF</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    <?php echo $this->Form->input('id');?>

<tr>
	<th><?php echo 'Código PNF';?></th>
<td>
<?php
	echo $this->Form->error('co_pnf');
	echo $this->Form->input('co_pnf',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Nombre';?></th>
<td>
<?php
	echo $this->Form->error('tx_nombre');
	echo $this->Form->input('tx_nombre',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Codigo Interno UBT';?></th>
<td>
<?php
	echo $this->Form->error('tx_codigointerno_ubt');
	echo $this->Form->input('tx_codigointerno_ubt',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase'));
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
        <?php echo $this->Form->end(__('EDITAR'));?>
    </td>
    <td>
        <?php
  echo $this->element('custom_button',array('controller' => "pnfs",'action' => 'index','label'=>"REGRESAR",'param'=>'no'));
?>    </td>
</tr>
</table>