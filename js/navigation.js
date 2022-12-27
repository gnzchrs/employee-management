const navButtons = document.querySelectorAll("[id^='nav']");

window.onload = () => {
  displayContent("homepage");
  document.getElementById("home").style.backgroundColor =
    "background-color: rgba(255, 0, 0, 0.2)";
};

const contentElement = document.querySelector(".con");
const displayContent = (page) => {
  fetch(`http://localhost/employee-management/pages/${page}.php`)
    .then((response) => response.text())
    .then((php) => {
      contentElement.innerHTML = php;
    });
};

navButtons.forEach((button) => {
  button.addEventListener("click", () => {
    displayContent(button.id + ".php");
  });
});
