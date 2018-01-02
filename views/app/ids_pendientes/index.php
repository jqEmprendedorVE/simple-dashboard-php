<?php 
title('IDs Pendientes');
?>
<div class="container" style="margin-top: 20px;">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h2>IDs Pendientes</h2>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Código de Prestacion</th>
                <th>Código de Prestacion Cartola</th>
                <th>Valorización</th>
                <th>Recauda</th>
                <th>Anticipo</th>
                <th>Estado</th>
                <th>Estado Ameda</th>
                <th>Observación</th>
                <th>Paciente</th>
                <th class="col-md-2 col-lg-2">Fecha</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $ACs = Analisis_conciliacion::find('all');
              foreach($ACs as $row){
                ?>
                <tr>
                  <td><?=$row->nombre?></td>
                  <td><?=$row->codigo_prestacion_query?></td>
                  <td><?=$row->codigo_prestacion_cartola?></td>
                  <td><?=$row->valorizacion?></td>
                  <td><?=$row->recauda?></td>
                  <td><?=$row->anticipo?></td>
                  <td><?=$row->estado?></td>
                  <td><?=$row->estado_ameda?></td>
                  <td><?=$row->observacion?></td>
                  <td><?=$row->paciente?></td>
                  <td><?=formatDates($row->fecha, 'Y-m-d')?></td>
                </tr>
                <?php  
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>