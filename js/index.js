fetch("./components/navigation.html")
  .then((response) => response.text())
  .then((html) => {
    document.querySelector(".nav").innerHTML = html;
  });

function toggleButtons() {
  const loginButton = document.getElementById("login");
  const logoutButton = document.getElementById("logout");
  loginButton.style.display =
    loginButton.style.display === "none" ? "inline-block" : "none";
  logoutButton.style.display =
    logoutButton.style.display === "none" ? "inline-block" : "none";
}
