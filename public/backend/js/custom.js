document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById('sign__in').disabled = "true";
});
function myFunction() {
  var nameInput = document.getElementById('email').value;
  console.log(nameInput);
  if (nameInput === "") {
    document.getElementById('sign__in').disabled = true;
  } else {
    document.getElementById('sign__in').disabled = false;
  }
}
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("navbarDropdown__ks").onclick = function () { myFunction() };

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("dropdown-menu__ks").classList.toggle("show");
}



