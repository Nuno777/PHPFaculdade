$(document).ready(function () {
    $("#contato").submit(function () {
        return validar();
    });

    $("#validarfeed").hide();
    $("#name").on("change keyup", verificarNome);
    $("#apelido").on("change keyup", verificarApelido);
    $("#email").on("change keyup", verificarEmail);
    $("#endereco").on("change keyup", verificarEndereco);
    $("#gen").on("change", verificarGenero);
    $("#tel").on("change", verificarTelefone);
    $("#mensagem").on("change keyup", verificarMensagem);

    function verificarNome() {
        var nome = $("#name").val().trim();
        if (nome.length === 0  || nome.length < 6 || nome.length > 150) {
            $(".invalid-name").show();
        } else {
            $(".invalid-name").hide();
        }
    }

    function verificarApelido() {
        var apelido = $("#apelido").val().trim();
        if (apelido.length === 0 || apelido.length < 6 || apelido.length > 150) {
            $(".invalid-apelido").show();
        } else {
            $(".invalid-apelido").hide();
        }
    }

    function verificarEmail() {
        var email = $("#email").val().trim();
        var testEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.length === 0 || !testEmail.test(email)) {
            $(".invalid-email").show();
        } else {
            $(".invalid-email").hide();
        }
    }

    function verificarEndereco() {
        var endereco = $("#endereco").val().trim();
        if (endereco.length === 0 || endereco.length < 6 || endereco.length > 150) {
           /*  $(".invalid-endereco").show();
        } else {
            $(".invalid-endereco").hide(); */
        }
    }

    function verificarGenero() {
        var genero = $("#gen").val().trim();
        if (genero === 'Masculino' || genero === 'Feminino' || genero === 'Outro') {
            $(".invalid-genero").hide();
        } else if (genero === 'Escolha...') {
            $(".invalid-genero").show();
        }
    }

    function verificarTelefone() {
        var telefone = $("#tel").val().trim();
        if (telefone.length === 0 || telefone.length < 9) {
            /* $(".invalid-telefone").show();
        } else {
            $(".invalid-telefone").hide(); */
        }
    }

    function verificarMensagem() {
        var msg = $("#mensagem").val().trim();
        if (msg.length === 0 || msg.length < 6 || msg.length > 500) {
            $(".invalid-mensagem").show();
        } else {
            $(".invalid-mensagem").hide();
        }
    }
});