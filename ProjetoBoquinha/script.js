function aoCadastrar() {
   campoCPF = document.getElementById('CPFinput');
   campoSenha = document.getElementById('senhainput');
   campoRepeteSenha = document.getElementById('senhainput2');

   if (campoCPF.value == '' || campoSenha.value == '' || campoRepeteSenha.value == '') {
       alert('É necessário PREENCHER TODOS OS CAMPOS corretamente para se cadastrar')
   }
}

function aoEntrar() {
    campoCPF = document.getElementById('CPFinput');
    campoSenha = document.getElementById('senhainput');

    if (campoCPF.value == '' || campoSenha.value == '') {
        alert('É necessário PREENCHER TODOS OS CAMPOS corretamente para entrar')
    }
}