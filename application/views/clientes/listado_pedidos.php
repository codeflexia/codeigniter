<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


        <div class="row">
            <div class="col-md-3">
              <p style="font-size:150%;"><strong>Id Pedido</strong></p>
            </div>
            <div class="col-md-3">
              <p style="font-size:150%;"><strong>fecha Pedido</strong></p>
            </div>
            <div class="col-md-3">
              <p style="font-size:150%;"><strong>Cargos Dolares</strong></p>
            </div>
            <div class="col-md-3">
              <p style="font-size:150%;"><strong>detalles</strong></p>
            </div>
        </div>

        <?php foreach ($pedidos as $pedido): ?>
        <div class="row">
            <div class="col-md-3">
                <?php echo $pedido->idPedido; ?>
            </div>
            <div class="col-md-3">
                <?php echo $pedido->fechaPedido; ?>
            </div>
            <div class="col-md-3">
                <?php echo $pedido->cargosD.'$'; ?>
            </div>
            <div class="col-md-3">
                <a href="<?php echo site_url('clientes/detalle/'.$pedido->idPedido); ?>">detalle</a>
            </div>
        </div>
        <?php endforeach; ?>
