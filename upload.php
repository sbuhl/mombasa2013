<?php 

	if(!empty($_FILES)){
		require("imgClass.php");
		$img = $_FILES['img'];
		$ext = strtolower(substr($img['name'], -3));
		$allow_ext = array("jpg","png","gif","JPG","PNG");
		if(in_array($ext,$allow_ext)){
			move_uploaded_file($img['tmp_name'], "images/upload/".$img['name']);
			Img::creerMin("images/upload/".$img['name'],"images/upload/min",$img['name'],215,112);
			Img::convertirJPG("images/upload/".$img['name']);
			$reussite = "Votre photo est bien uploadée. ";
		}else{
			$erreur = "Votre fichier n'est pas une image";
		}
	}
 ?>

<!DOCTYPE html>

<head>

	
    <link href="js/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php if(isset($erreur)){
	echo $erreur;
}else{ echo $reussite ;}
 ?>
<form method="post" action="upload.php" enctype="multipart/form-data">
<input type="file" name="img" />
<input type="submit" name="Envoyer" />
</form>
<p><a href="index.php">Retour sur la page d'acceuil</a></p>


</body>
</html>