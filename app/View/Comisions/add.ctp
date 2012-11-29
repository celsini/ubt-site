<div class="comisions form">
<?php echo $this->Form->create('Comision');?>
    <span class="Titulo-Aplicacion">Comisi&oacute;n</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'Codigo UBT';?></th>
<td>
<?php
	echo $this->Form->error('co_ubt');
	echo $this->Form->input('co_ubt',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Secretario';?></th>
<td>
<?php
	echo $this->Form->error('persona_id');
	echo $this->Form->input('persona_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','options'=>$options));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Coordinador Nacional';?></th>
<td>
<?php
	echo $this->Form->error('persona_idd');
	echo $this->Form->input('persona_idd',array('label'=>false,'error'=>false,'style'=>'width:200px;','options'=>$options));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Fecha de Registro';?></th>
<td>
<?php
	echo $this->Form->error('fe_registro');
	echo $this->Form->input('fe_registro',array('label'=>false,'error'=>false,'style'=>'width:80px;','error'=>false,'dateFormat'=>'D/M/Y','monthNames'=>$meses,'minYear' => date('Y') - 130, 'maxYear' => date('Y')));
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
  echo $this->element('custom_button',array('controller' => "comisions",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
</tr>
</table>
<script type="text/javascript">
    $("#ComisionFeRegistroDay").css("width","55px");
    $("#ComisionFeRegistroYear").css("width","60px");
</script>