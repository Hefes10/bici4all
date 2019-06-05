<?php
    $gran_total = 0;

    // Calcula gran total si el carrito tiene elementos
    if ($cart = $this->cart->contents()):
        foreach ($cart as $item):
            $gran_total = $gran_total + $item['subtotal'];
        endforeach;
    endif;
?>
        
    <div id="bill_info">
        
        <?php // Crea formulario para guarda los datos de la venta
            echo form_open("confirma_compra", ['class' => 'form-signin', 'role' => 'form']); 
        ?>
        <div align="center">
            <h2 id="h2" align="center">Info de Compra</h2>

            <table class="table" border="0" cellpadding="2px" >
                <tr>
                    <td>
                        Total Compra:
                    </td>
                    <td>
                        <strong>$<?php echo number_format($gran_total, 2); ?></strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td> 
                        <?php echo($nombre) ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Apellido:
                    </td>
                    <td> 
                        <?php echo($apellido) ?> 
                    </td>
                </tr>  
                <tr>
                    <td>
                        Email:
                    </td>
                    <td> 
                        <?php echo($email) ?> 
                    </td>
                </tr>
                <?php echo form_hidden('total_venta', $gran_total); ?>
            </table>
            <br> 
            <?php
            $gran_total = $gran_total * 100 ?>
            <form action="asd" method="POST">
                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_U4B7dkOXXdWzc0bI66KAxhP500YNTDwSMQ" 
                    data-amount="<?php echo($gran_total);?>"
                    data-name="BC4ALL"
                    data-image="<?php echo base_url('assets/img/favicon.ico');?>"
                    data-currency="ars"
                    data-locale="auto">
                </script>
                <script>
                    document.getElementsByClassName('stripe-button-el')[0].style.display = 'none';
                </script>
                <?php echo form_submit('confirmar', 'Pagar',"class='btn btn-lg btn-primary'"); ?>
            </form>
            <br> <br>
        </div>
        <?php echo form_close(); ?>
       
    </div>
