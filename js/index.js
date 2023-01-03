fetch("./components/navigation.html")
  .then((response) => response.text())
  .then((html) => {
    document.querySelector(".nav").innerHTML = html;
  });

function toggleButtons() {
  const loginButton = document.getElementById("login");
  const logoutButton = document.getElementById("logout");

  if (loginButton.style.display === "none") {
    document.getElementById("modal").style.display = "block";
  }
}

function logout() {
  const loginButton = document.getElementById("login");
  const logoutButton = document.getElementById("logout");
  loginButton.style.display = "block";
  logoutButton.style.display = "none";
  toggleButtons();
  console.log("d");
  closeModal();
}
function login() {
  const loginButton = document.getElementById("login");
  const logoutButton = document.getElementById("logout");
  loginButton.style.display = "none";
  logoutButton.style.display = "block";
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
  console.log("closeModal()");
}

function openModalOnAvatar() {
  const avatar = document.getElementById("avatar");
  console.log("avatar in clicked");
  document.getElementById("modal").style.display = "none";
}
