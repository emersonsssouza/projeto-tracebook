formulario = document.getElementById("formulario");
email = document.getElementById("email");
senha = document.getElementById("senha");

formulario.addEventListener("submit", (event) => {
  event.preventDefault();

  //Verifica se o nome está vazio
  if (email.value === "" || isEmailValid(email.value)) {
    alert("O email está vazio");
    return;
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
});
