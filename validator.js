formulario = document.getElementById("formulario");
email = document.getElementById("email");
senha = document.getElementById("senha");

function submit() {
  if (email.value === "") {
    console.log("Email vazio");
    alert("Preencha os campos");
  } else {
    console.log("Tudo ok");
  }
}

function isEmailValid(email) {
  const emailRegex = new RegExp(
    /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
  );

  if (emailRegex.test(email)) {
    console.log("ok");
  }

  if (senha.value === "") {
    alert("A senha está vazio");
    return;
  }
  formulario.submit();
}
