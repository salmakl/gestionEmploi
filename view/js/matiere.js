function edit(e) {
    document.getElementById("labelMatiere" + e).style.display = "none";
    document.getElementById("nomMatiere" + e).style.display = "inline";
    document.getElementById("editButton" + e).style.display = "none";
    document.getElementById("deleteButton" + e).style.display = "none";
    document.getElementById("saveButton" + e).style.display = "inline-block";
    document.getElementById("cancelButton" + e).style.display = "inline-block";
  }
  function cancel(e) {
    document.getElementById("labelMatiere" + e).style.display = "block";
    document.getElementById("nomMatiere" + e).style.display = "none";
    document.getElementById("editButton" + e).style.display = "inline-block";
    document.getElementById("deleteButton" + e).style.display = "inline-block";
    document.getElementById("saveButton" + e).style.display = "none";
    document.getElementById("cancelButton" + e).style.display = "none";
  }