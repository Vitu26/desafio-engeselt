<?php
 include_once("templates/header.php");
?>

 <div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $pedido["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $pedido["phone"] ?></p>
    <p class="bold">Observações:</p>
    <p><?= $pedido["observations"] ?></p>
 </div>

<?php
 include_once("templates/footer.php");
?>
