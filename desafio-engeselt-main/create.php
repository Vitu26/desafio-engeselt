<?php
 include_once("templates/header.php");
?>

 <div class="container">
 <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criando contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">  
      <div class="form-group">
         <label for="name">Nome do contato:</label>
         <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" required>
      </div> 
      <div class="form-group">
         <label for="phone">Telefone:</label>
         <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
         <label for="address">Endereço:</label>
         <input type="text" class="form-control" name="address" id="address" placeholder="Digite o edereço do pedido" required>
      </div>
      <div class="form-group">
         <label for="stats">Status:</label>   
         <select name="stats" id="stats" class="form-control">
            <option value="">Selecione o status do pedido</option>
            <option value="aberto">Aberto</option>
            <option value="fechado">Fechado</option>
            <option value="cancelado">Cancelado</option>
            <option value="andamento">Andamento</option>
         </select>
      </div>
      <div class="form-group">
         <label for="observations">Observações:</label>
         <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Quais as observações" rows="3"></textarea>
      </div>
      <button id="btn" type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
 </div>
    

<?php
 include_once("templates/footer.php");
?>