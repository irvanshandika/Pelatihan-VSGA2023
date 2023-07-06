document.getElementById("loginForm").addEventListener("submit", function (event) {
  event.preventDefault();

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username === "irvan@dev.com" && password === "irvan") {
    alert("Anda Berhasil Login");
  } else {
    var alertElement = document.createElement("div");
    alertElement.classList.add("alert");
    alertElement.textContent = "Username atau Password Salah";

    var container = document.querySelector(".container");
    container.insertBefore(alertElement, container.firstChild);
  }
});
