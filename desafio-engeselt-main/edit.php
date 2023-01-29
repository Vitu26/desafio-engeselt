<?php
 include_once("templates/header.php");
?>

 <div class="container">
 <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">  
      <input type="hidden" name="id" value="<?= $pedido['id'] ?>"> 
      <div class="form-group">
         <label for="name">Nome do contato:</label>
         <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
      </div> 
      <div class="form-group">
         <label for="stats">Status do pedido:</label>
         <input type="text" class="form-control" name="stats" id="addres" placeholder="Altere o status do pedido" value="<?= $contact['stats'] ?>" required>
      </div>
      <div class="form-group">
         <label for="phone">Telefone:</label>
         <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
      </div>
      <div class="form-group">
         <label for="address">Endereço do pedido:</label>
         <input type="text" class="form-control" name="address" id="address" placeholder="Informe o endereço" value="<?= $contact['address'] ?>" required>
      </div>
      <div class="form-group">
         <label for="observations">Observações:</label>
         <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Quais as observações" rows="3"><?= $contact['observations'] ?></textarea>
      </div>
      <button id="btn" type="submit" class="btn btn-primary">Atualizar</button>
    </form>
 </div>
    

<?php
 include_once("templates/footer.php");
?>