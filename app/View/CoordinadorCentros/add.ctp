<div class="coordinadorCentros form">
<?php echo $this->Form->create('CoordinadorCentro');?>
    <span class="Titulo-Aplicacion">Coordinador Centro de formaci&oacute;n</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'Persona';?></th>
<td>
<?php
	echo $this->Form->error('persona_id');
	echo $this->Form->input('persona_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','class'=>'justUpperCase','options'=>$options));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Fecha Activo';?></th>
<td>
<?php
	echo $this->Form->error('fe_activo');
	echo $this->Form->input('fe_activo',array('label'=>false,'error'=>false,'style'=>'width:80px;','error'=>false,'dateFormat'=>'D/M/Y','monthNames'=>$meses,'minYear' => date('Y') - 130, 'maxYear' => date('Y')));
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
  echo $this->element('custom_button',array('controller' => "coordinadorCentros",'action' => 'index','label'=>"REGRESAR",'param'=>'no')); 
?>    </td>
</tr>
</table>
<script type="text/javascript">
    $("#CoordinadorCentroFeActivoDay").css("width","55px");
    $("#CoordinadorCentroFeActivoYear").css("width","60px");
</script>
