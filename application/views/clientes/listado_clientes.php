<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

      <div class="row">
        <div class="col-md-4">
          <p style="font-size:150%;"><strong>Nombre Cliente</strong></p>
        </div>
        <div class="col-md-4">
          <p style="font-size:150%;"><strong>Direccion</strong></p>
        </div>
        <div class="col-md-4">
          <p style="font-size:150%;"><strong>Pedidos</strong></p>
        </div>
      </div>

      <?php foreach ($clientes as $cliente): ?>
      <div class="row">
        <div class="col-md-4">
          <?php echo $cliente->nombreCli; ?>
        </div>
        <div class="col-md-4">
          <?php echo $cliente->direccion; ?>
        </div>
        <div class="col-md-4">
          <?php if ($this->ion_auth->in_group('admin')===TRUE) {?>  
            <a href="<?php echo 'clientes/pedido/'.$cliente->idCliente; ?>">pedidos</a>
          <?php } ?>
        </div>
      </div>
    <?php endforeach; ?>
    