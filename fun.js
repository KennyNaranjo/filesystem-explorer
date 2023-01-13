const tdTittle = document.getElementById("table");
tdTittle.addEventListener("click", checkClick);

function checkClick(e) {
  if (e.target.matches("deleteRow")) {
    const tIndex = e.target.parentNode.parentNode.rowIndex;
    tdTittle.deleteRow(tIndex);
  }
}
