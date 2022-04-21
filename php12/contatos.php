<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once 'head.php';
    ?>
    <title>Contatos</title>
</head>
<style>
    span {
        color: gray;
        font-size: 12px;
    }
</style>

<body>
    <header>
        <?php
        require_once 'navbar.php';
        ?>
    </header>
    <!--navbar-->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contacte-nos</h2>
            </div>
        </div>
        <form id="form" action="" method="post" class="row g-3">
            <div class="col-md-6" id="name-container">
                <label for="nome" class="form-label">Primeiro
                    Nome</label>
                <input type="text" class="form-control" id="nome">
                <div id="validarfeed" class="invalid-feedback invalid-name">
                </div>

            </div>
            <div class="col-md-6" id="apelido-container">
                <label for="apelido" class="form-label">Ultimo
                    Nome</label>
                <input type="text" class="form-control" id="apelido">
                <div id="validarfeed" class="invalid-feedback invalid-apelido">
                </div>
            </div>
            <div class="col-md-12" id="email-container">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
                <div id="validarfeed" class="invalid-feedback invalid-email">
                </div>
            </div>
            <div class="col-md-12" id="endereco-container">
                <label for="endereco" class="form-label">Endereço <span>(opcional)</span></label>
                <input type="text" class="form-control" id="endereco">
                <div id="validarfeed" class="valid-feedback invalid-endereco">
                </div>
            </div>
            <div class="col-md-6" id="gen-container">
                <label for="gen" class="form-label">Genero</label>
                <select class="form-select" id="gen">
                    <option selected disabled value="escolha">Escolha</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
                <div id="validarfeed" class="invalid-feedback invalid-genero">
                </div>
            </div>
            <div class="col-md-6" id="tel-container">
                <label for="tel" class="form-label">Telemovel <span>(opcional)</span></label>
                <input type="tel" maxlength="9" class="form-control" id="tel">
                <div id="validarfeed" class="valid-feedback invalid-telefone">
                </div>
            </div>
            <div class="col-md-12" id="mensagem-container">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem"></textarea>
                <div id="validarfeed" class="invalid-feedback invalid-mensagem">
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary w-100" type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <!--Inicio do footer-->
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <?php
        require_once 'footer.php';
        ?>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/forms2.js"></script>
</body>

</html>