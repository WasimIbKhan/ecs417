function eraseText() {
  var clearOptions = confirm("Are you sure you want to clear the content?");
  if(clearOptions == true) {
    document.getElementById("title").value = "";
    document.getElementById("bodyText").value = "";
  } else{
    alert("Cancelled!");
  }
}

function onSubmit() {
    document.getElementsByName('submit').addEventListener("click", validate);
}

function validate() {
  var clearOptions = confirm("Are you sure you want to clear the content?");
  if(clearOptions == TRUE) {
    document.getElementById("title").value = "";
    document.getElementById("bodyText").value = "";
  } else{
    alert("Cancelled!");
  }
}
