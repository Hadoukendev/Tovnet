<?php if ($error): ?> <p> <?php echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>".$error."</div>"; ?> </p> <?php endif; ?>
<div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      <h2>Usuarios Registrados</h2>

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
    
    <th>Nombre</th>
    <th>Email</th>

  </tr>
  </thead>
  <tbody>

    <?php foreach($usuarios as $usuario):
      if($usuario->tipo==1){
      ?>
      
    <tr onclick="location='<?php echo base_url() ?>index.php/usuarios/detalleusuario/<?php echo $usuario->id?>'" style="cursor: pointer;">
      <td><?php echo $usuario->nombre?></td>
      <td><?php echo $usuario->correo?></td>
    </tr>
    <?php } endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Nombre</th>
    <th>Email</th>

  </tr>
  </tfoot>
  </table>

  </div>
  </div>
  </section>
  </div>