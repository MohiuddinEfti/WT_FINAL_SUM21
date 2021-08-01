<!DOCTYPE html>
<html>
<body>

<div id="demo">
<button type="button" onclick="loadDoc()">Click Me</button>
</div>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "myProfile.php");
  xhttp.send();
}
</script>

</body>
</html>
