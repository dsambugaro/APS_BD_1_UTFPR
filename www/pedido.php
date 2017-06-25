<?php
    include 'cabecalho.php';
    include 'bd_control/conecta.php';
    include 'bd_control/control.php';
    include 'pedido/pedido_control.php';

    $pedidos = lista_pedido($conexao);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Pedidos</h2>
            </div>
            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="busca" class="form-control" id="buscaPedidos" type="text" placeholder="Pesquisar Pedidos">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>

            <div class="col-md-3">
                <a href="pedido/pedido_add.php" class="btn btn-primary pull-right h2">Novo Pedido</a>
            </div>
        </div>
        <hr />
        <?php include 'results.php'; ?>
        <div id="list" class="row text-center">
            <div class="table-responsive col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="itens">
                        <?php
                            foreach ($pedidos as $row):
                        ?>
                                <tr>
                                    <td><?=$row['ID']?></td>
                                    <td><?=$row['user']?></td>
                                    <td>R$ <?=$row['valor_total']?></td>
                                    <td><?=date('d/m/Y', strtotime($row['data']))?></td>
                                    <?php
                                        include 'acoes.php';
                                    ?>
                                </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

<?php
    include "modal_excluir.php";
    include "rodape.php";
?>
