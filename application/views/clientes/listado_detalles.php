<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        <div class="row" style="font-size:150%;">
            <div class="col-md-4">
                <p><strong>Id Producto</strong></p>
            </div>
            <div class="col-md-4">
                <p><strong>Precio En euros</strong></p>
            </div>
            <div class="col-md-4">
                <p><strong>Cantidad</strong></p>
            </div>
        </div>

        <?php foreach ($detalles as $detalle): ?>
        <div class="row">
            <div class="col-md-4">
                <?php echo $detalle->idProducto; ?>
            </div>
            <div class="col-md-4">
                <?php echo $detalle->precioE.'€'; ?>
            </div>
            <div class="col-md-4">
                <?php echo $detalle->cantidad; ?>
            </div>
        </div>
        <?php endforeach; ?>
