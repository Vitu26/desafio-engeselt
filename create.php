<?php
 include_once("templates/header.php");
?>

 <div class="container">
 <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criando contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="orderr">Pedido:</label>
        <input type="text" class="form-control" name="orderr" id="orderr" placeholder="Informe o pedido" required>
      </div>  
      <div class="form-group">
         <label for="status">Status do pedido:</label>
         <input type="text" class="form-control" name="status" id="status" placeholder="Informe o status do pedido" required>
      </div>
      <div class="form-group">
         <label for="name">Nome:</label>
         <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do cliente" required>
      </div> 
      <div class="form-group">
         <label for="phone">Telefone:</label>
         <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
         <label for="address">Endereço:</label>
         <input type="text" class="form-control" name="address" id="addres" placeholder="Informe o endereço" required>
      </div>
      <div class="form-group">
         <label for="date">Data do pedido:</label>
         <input type="date" class="form-control" name="date" id="date" placeholder="Informe a data do pedido" required>
      </div>
      <div class="form-group">
         <label for="value">Valor do pedido:</label>
         <input type="text" class="form-control" name="value" id="value" placeholder="Informe o valor" required>
      </div>
      <div class="form-group">
         <label for="description">Observações:</label>
         <textarea type="text" class="form-control" name="description" id="description" placeholder="Quais as observações" rows="3"></textarea>
      </div>
      <button id="btn" type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
 </div>
    

<?php
 include_once("templates/footer.php");
?>