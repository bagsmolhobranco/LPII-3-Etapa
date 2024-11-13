<?php
    include "topo.php";
?>
        <h1 class="mt-3 text-center">Cadastro de Usuários</h1>
        <hr>
        <form name="cadastro" method="post" action="cadastrar.php" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3 text-end">
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>

<?php
    include "rodape.php";
?>