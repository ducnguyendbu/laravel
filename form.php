<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // collect value of input field
  $fname = trim($_POST['name']);
  /*if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
  $nameErr = "<b style='color:red;'>Không được gõ ký tự trắng</b>";
  echo $nameErr;
  */
  if (strpos($fname, " ")>0){
  	 $nameErr = "<b style='color:red;'>Không được gõ ký tự trắng</b>";
     echo $nameErr;
  }

}
?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name" id="name" onkeyup1="wakeUp()">
  <input type="submit">
</form>

<p>GIT</p>

<script>
function wakeUp() {
  var str = document.getElementById("name").value;
  var n = str.indexOf(" ");
  if(n>=0){
  	alert("Không được gõ ký tự trắng");
  	document.getElementById("name").value = "";
  }
  
}
</script>
</body>
</html>
