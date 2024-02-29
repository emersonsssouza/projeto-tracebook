function validarFormulario() {
  var email = document.getElementById("email").value.trim();
  var senha = document.getElementById("senha").value.trim();

  if (email === "" || senha === "") {
    document.getElementById("email").style.border = "2px solid red";
    document.getElementById("senha").style.border = "2px solid red";
    return false; // Impede o envio do formulário
  } else if (email === "") {
    alert("Por favor preencha os campos corretamente!");
    document.getElementById("email").style.border = "2px solid red";
    return false;
  } else if (senha === "") {
    alert("Por favor preencha os campos corretamente!");
    document.getElementById("senha").style.border = "2px solid red";
    return false;
  }
  return true; // Permite o envio do formulário
}
