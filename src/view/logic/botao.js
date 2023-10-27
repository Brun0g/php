function openPopupById(id) {
  const element = document.getElementById(id);
  if (element) {
    element.style.display = "block";
  }
}

function closePopupById(id) {
  const element = document.getElementById(id);
  if (element) {
    element.style.display = "none";
  }
}
