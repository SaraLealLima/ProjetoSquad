function aoAdicionar() {
   campoNome = document.getElementById('nome');
   campoIdade = document.getElementById('idade');
   campoPeso = document.getElementById('peso');
   campoAltura = document.getElementById('altura');

   if (campoNome.value == '' || campoIdade.value == '' || campoPeso.value == '' || campoAltura.value == '') {
       return alert('É necessário PREENCHER TODOS OS CAMPOS para adicionar uma criança')
   }
}
