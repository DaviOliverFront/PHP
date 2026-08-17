// Certifica que o campo nao será enviado em branco.
  document.querySelector('form').addEventListener('submit', function(e) {
    const campo = document.getElementById('idnumber');
    
    if (campo.value.trim() === '') {
      e.preventDefault(); // impede o envio do formulário
      alert('Please, enter a number before sending!');
      campo.focus(); // já deixa o cursor no campo
    }
  });


  window.addEventListener('pageshow', function() {
  document.getElementById('idnumber').value = '';
});
