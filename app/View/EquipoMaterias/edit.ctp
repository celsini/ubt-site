<div class="equipoMaterias form">
<?php echo $this->Form->create('EquipoMateria');?>
<span class="Titulo-Aplicacion">Editar- Materias-Equipo</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    <?php echo $this->Form->input('id');?>

<tr>
	<th><?php echo 'Materia';?></th>
<td>
<?php
	echo $this->Form->error('materias_id');
	echo $this->Form->input('materias_id',array('label'=>false,'error'=>false,'style'=>'width:220px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Facilitador';?></th>
<td>
<?php
	echo $this->Form->error('facilitador_id');
	echo $this->Form->input('facilitador_id',array('label'=>false,'error'=>false,'style'=>'width:220px;','options'=>$options));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Fecha de Cierre';?></th>
<td>
<?php
	echo $this->Form->error('fe_cierre');
	echo $this->Form->input('fe_cierre',array('label'=>false,'error'=>false,'style'=>'width:95px;','error'=>false,'dateFormat'=>'D/M/Y','monthNames'=>$meses,'minYear' => date('Y') - 130, 'maxYear' => date('Y')));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Periodo';?></th>
<td>
<?php
	echo $this->Form->error('tx_periodo');
	echo $this->Form->input('tx_periodo',array('label'=>false,'error'=>false,'style'=>'width:210px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Observación';?></th>
<td>
<?php
	echo $this->Form->error('tx_observacion');
	echo $this->Form->input('tx_observacion',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'Equipo Estudio';?></th>
<td>
<?php
	echo $this->Form->error('equipo_estudio_id');
	echo $this->Form->input('equipo_estudio_id',array('label'=>false,'error'=>false,'style'=>'width:220px;'));
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
  echo $this->element('custom_button',array('controller' => "equipoMaterias",'action' => 'index','label'=>"REGRESAR",'param'=>'no'));
?>    </td>
</tr>
</table>
<script type="text/javascript">
    $("#EquipoMateriaFeCierreDay").css("width","55px");
    $("#EquipoMateriaFeCierreYear").css("width","60px");
</script>