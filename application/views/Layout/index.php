<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$attributes = array("id" => "myform");
echo form_open("Layout/index", $attributes);
?>

<div><?php echo form_input($input) ?></div>
<div><?php echo form_dropdown("Joves", $joves); echo form_dropdown("Vells", $vells)?></div>
<div>
    <?php 
    echo form_upload(); //Falta fer això
    echo form_submit("send", "Enviat!"); 

    echo form_close();
    ?>
</div>

