<?php
 include_once("templates/header.php");
?>


    <div class="container">
        <?php if(isset($printMsg) && $printMsg != '' ): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Lista de pedidos</h1>
        <?php if(count($pedidos) > 0 ):?>
            <table class="table" id="pedidos-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Status</th>
                        <th scope="col">data</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Observação</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pedidos as $pedido): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $pedido["id"] ?></td>
                            <td scope="row"><?= $pedido["name"] ?></td>
                            <td scope="row"><?= $pedido["phone"] ?></td>
                            <td scope="row"><?= $pedido["orderr"] ?></td>
                            <td scope="row"><?= $pedido["addres"] ?></td>
                            <td scope="row"><?= $pedido["date"] ?></td>
                            <td scope="row"><?= $pedido["status"] ?></td>
                            <td scope="row"><?= $pedido["value"] ?></td>
                            <td scope="row"><?= $pedido["observations"] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>show.php?id=<?= $pedido["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $pedido["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $pedido["id"] ?>">
                                    <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há contatos adicionados na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
        <?php endif; ?>

    </div>

<?php
 include_once("templates/footer.php");
?>
