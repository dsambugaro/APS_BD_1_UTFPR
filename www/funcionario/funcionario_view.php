<?php
    include '../cabecalho_interno.php';
?>
    <div class="container">
        <div class="row">
            <h3>Funcionário - Visualizar</h3>
        </div>
        <hr />
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Nome</strong></p>
                    <p>Lorem ipsum dolor</p>
                </div>
                <div class="form-group col-md-4">
                    <p><strong>CPF</strong></p>
                    <p>999.999.999-99</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Nascimento</strong></p>
                    <p>DD/MM/AAAA</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p><strong>Endereço</strong></p>
                    <p>Rua Lorem ipsum dolor sit amet - 9999 - quod quod</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Cidade</strong></p>
                    <p>Campo Mourão</p>
                </div>
                <div class="col-md-4">
                    <p><strong>CEP</strong></p>
                    <p>99999-999</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Estado</strong></p>
                    <p>UF</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Cadastro</strong></p>
                    <p>123456789</p>
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-md-8">
                    <a href="funcionario_edit.php" class="btn btn-primary">Editar</a>
                    <a href="../funcionario.php" class="btn btn-default">Voltar</a>
                </div>
            </div>
    </div>
    <?php
        include '../modal_excluir.php';
        include '../rodape_interno.php';
    ?>