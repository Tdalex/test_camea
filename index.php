<!doctype html>
<html>
<body>
<?php 
if($_POST){
	var_dump($_POST);
}
?>
<form method='POST'>
<input type="file" accept="image/*" capture="camera">
<button type="submit">submit</button>
</form>
</body>
</html>