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
} ?>
<form method="post" action="upload.php" enctype="multipart/form-data">
<input type="file" name="img" />
<input type="submit" name="Envoyer" />
</form>
<?php 
$dos = "images/upload/min";
$dir = opendir($dos);
while ($file = readdir($dir)) {
	$allow_ext = array("jpg","png","gif","JPG","PNG");
	$ext = strtolower(substr($file, -3));
	if(in_array($ext, $allow_ext)){
		?>
		
			<a class="zoombox zgallery1" href="images/upload/<?php echo $file; ?>">
				<img src="images/upload/min/<?php echo $file; ?>" />
			</a>
		<?php
	}

}
 ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/zoombox.js"></script> 
  <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 600,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
        </script>
</body>
</html>