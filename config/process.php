<?php
  
  session_start();
  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar pedido
    if($data["type"] === "create") {

      $name = $data["name"];
      $phone = $data["phone"];
      $address = $data["address"];
      $status = $data["status"];
      $value = $data["value"];
      $orderr = $data["orderr"];
      $date = $data["date"];
      $observations = $data["observations"];

      $query = "INSERT INTO pedidos (name, phone, address, status, value, orderr, date, observations) VALUES (:name, :phone, :address, :satatus, :value, :orderr, :date, :observations)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":address", $address);
      $stmt->bindParam(":status", $status);
      $stmt->bindParam(":value", $value);
      $stmt->bindParam(":orderr", $orderr);
      $stmt->bindParam(":date", $date);
      $stmt->bindParam(":observations", $observations);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Pedido criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "edit") {

      $name = $data["name"];
      $phone = $data["phone"];
      $address = $data["address"];
      $status = $data["status"];
      $value = $data["value"];
      $orderr = $data["orderr"];
      $date = $data["date"];
      $observations = $data["observations"];
      $id = $data["id"];

      $query = "UPDATE pedidos 
                SET name = :name, phone = :phone, address = :address, status = :status, value = :value, orderr = :orderr, date = :date observations = :observations 
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":address", $address);
      $stmt->bindParam(":status", $status);
      $stmt->bindParam(":value", $value);
      $stmt->bindParam(":orderr", $orderr);
      $stmt->bindParam(":date", $date);
      $stmt->bindParam(":observations", $observations);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM pedidos WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../home.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um pedido
    if(!empty($id)) {

      $query = "SELECT * FROM pedidos WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $pedido = $stmt->fetch();

    } else {

      // Retorna todos os pedidos
      $pedidos = [];

      $query = "SELECT * FROM pedidos";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $pedidos = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;



