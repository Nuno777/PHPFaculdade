function clearError() {
    $(".invalid-feedback").each(function () {
        $(this).text('');
        $(this).hide();
    })
}

function showError(element, message) {
    element.text(message);
    element.show();
}

function formSubmit() {
    clearError();
    const nome = $("#nome").val().trim();
    const apelido = $("#apelido").val().trim();
    const email = $("#email").val().trim();
    const testEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const endereco = $("#endereco").val().trim();
    //const genero = $("#gen").val().trim();
    const telemovel = $("#tel").val().trim();
    const mensagem = $("#mensagem").val().trim();
    let hasError = false;

    //nome
    if (nome == "") {
        $('#nome').addClass("is-invalid");
        showError($('#name-container .invalid-feedback'), "Campo obrigatorio.");
        hasError = true;
    } else if (nome.length < 6 || nome.length > 150) {
        $('#nome').addClass("is-invalid");
        showError($('#name-container .invalid-feedback'), "Campo devera ter entre 6 a 150 carateres.");
        hasError = true;
    }

    //apelido
    if (apelido == "") {
        $('#apelido').addClass("is-invalid");
        showError($('#apelido-container .invalid-feedback'), "Campo obrigatorio.");
        hasError = true;
    } else if (apelido.length < 6 || apelido.length > 150) {
        $('#apelido').addClass("is-invalid");
        showError($('#apelido-container .invalid-feedback'), "Campo devera ter entre 6 a 150 carateres.");
        hasError = true;
    }

    //email
    if (email == "") {
        $('#email').addClass("is-invalid");
        showError($('#email-container .invalid-feedback'), "Campo obrigatorio.");
        hasError = true;
    } else if (email.length < 6 || email.length > 150 || !testEmail.test(email)) {
        $('#email').addClass("is-invalid");
        showError($('#email-container .invalid-feedback'), "Campo devera ter email valido e entre 6 a 150 carateres.");
        hasError = true;
    }

    //endereco
    if (endereco=="") {
        $('#endereco').addClass("is-valid");
        showError($('#endereco-container .valid-feedback'), "Campo opcional.");
        hasError = true;
    }

    //genero
    /*if (!['masculino', 'feminino', 'outro'].includes(genero)) {
        $('#gen').addClass("is-invalid");
        showError($('#gen-container .invalid-feedback'));
        hasError = true;
    } */

    //telemovel
    if (telemovel=="") {
        $('#tel').addClass("is-valid");
        showError($('#tel-container .valid-feedback'), "Campo opcional.");
        hasError = true;
    }

    //mensagem
    if (mensagem == "") {
        $('#mensagem').addClass("is-invalid");
        showError($('#mensagem-container .invalid-feedback'), "Campo obrigatorio.");
        hasError = true;
    } else if (mensagem.length < 6 || mensagem.length > 500) {
        $('#mensagem').addClass("is-invalid");
        showError($('#mensagem-container .invalid-feedback'), "Campo devera ter entre 6 a 500 carateres.");
        hasError = true;
    }

    return !hasError;
}

$(document).ready(function () {
    $("form").submit(formSubmit);
});