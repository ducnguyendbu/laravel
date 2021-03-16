
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" id="name" onkeyup="wakeUp()">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $number = $_POST['name'];
  if (is_numeric($number)) {
    echo $number." la so";
  } else {
    echo $number." khong phai la so";
  }
}
?>

<script>
function wakeUp() {
  var str = document.getElementById("name").innerHTML;
  alert(str);
  var n = str.indexOf(" ");
  
}
</script>
</body>
</html>