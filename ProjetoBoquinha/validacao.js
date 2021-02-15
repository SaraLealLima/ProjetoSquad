function aoCadastrar() {
   campoEmail = document.getElementById('emailInput');
   campoSenha = document.getElementById('senhaInput');
   campoRepeteSenha = document.getElementById('senhaInput2');

   if (campoEmail.value == '' || campoSenha.value == '' || campoRepeteSenha.value == '') {
       alert('É necessário PREENCHER TODOS OS CAMPOS corretamente para se cadastrar')
   }
}

function aoEntrar() {
    campoEmail = document.getElementById('emailinput');
    campoSenha = document.getElementById('senhainput');

    if (campoEmail.value == '' || campoSenha.value == '') {
        alert('É necessário PREENCHER TODOS OS CAMPOS corretamente para entrar')
    }
}