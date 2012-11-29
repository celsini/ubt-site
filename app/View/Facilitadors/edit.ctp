<div class="facilitadors form">
<?php echo $this->Form->create('Facilitador');?>
<span class="Titulo-Aplicacion">Editar Facilitador</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    <?php echo $this->Form->input('id');?>

<tr>
	<th><?php echo 'Persona';?></th>
<td>
<?php
	echo $this->Form->error('persona_id');
	echo $this->Form->input('persona_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','options'=>$options));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Agresado de universidad';?></th>
<td>
<?php
	echo $this->Form->error('tx_agresadouniversidad');
	echo $this->Form->input('tx_agresadouniversidad',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Profesión';?></th>
<td>
<?php
	echo $this->Form->error('tx_profesion');
	echo $this->Form->input('tx_profesion',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Fecha de Grado';?></th>
<td>
<?php
	echo $this->Form->error('fe_grado');
	echo $this->Form->input('fe_grado',array('label'=>false,'error'=>false,'style'=>'width:80px;','error'=>false,'dateFormat'=>'D/M/Y','monthNames'=>$meses,'minYear' => date('Y') - 130, 'maxYear' => date('Y')));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Postgrado';?></th>
<td>
<?php
	echo $this->Form->error('tx_postgrado');
	echo $this->Form->input('tx_postgrado',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
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
  echo $this->element('custom_button',array('controller' => "facilitadors",'action' => 'index','label'=>"REGRESAR",'param'=>'no'));
?>    </td>
</tr>
</table>
<script type="text/javascript">
    $("#FacilitadorFeGradoDay").css("width","55px");
    $("#FacilitadorFeGradoYear").css("width","60px");
</script>