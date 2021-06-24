
<!DOCTYPE html>
<html>
<head>
	<title>modele</title>

	<style type="text/css">

		 tr td{

			color:yellow;
			background-color: black;
		}
		
		.rarrounder{

			border: 0px solid yellow !important;
			border-radius: 0.5% !important;

		}
	</style>
</head>
<body bgcolor="white">

<div class="container">

	<div class="row">

	<center> <table border='2' cellpadding='7' cellspacing='7' class='rarrounder'>

		<tr bgcolor='yellow'>

		<th class='rarrounder' >id</th>
		<th class='rarrounder' >pseudo</th>
		<th class='rarrounder' >email</th>
		<th class='rarrounder' >tel</th>
		<th class='rarrounder' >naiss</th>
		<th class='rarrounder' >date_inscription</th>
		<th class='rarrounder' >sexe</th>
		<th class='rarrounder' >pays</th>
		<th class='rarrounder' >password</th>
		<th class='rarrounder' >photo_profil</th>

		</tr> 

<?php 

require_once('connectp.php');
error_reporting(0);
$pseudo = $_POST['pseudo'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$naiss = $_POST['naiss'];
$sexe = $_POST['sexe'];
$pays = $_POST['pays'];
$password = $_POST['password'];

 $chooix1 = $_POST['chooix1'];
 $chooix2 = $_POST['chooix2'];


$pwd= MD5($password);

 


// $photo_name = $_FILES['photo']['name'];

// $photo_tmpname = $_FILES['photo']['tmp_name'];

// $target="img/".basename($photo_name);

// $dep= move_uploaded_file($photo_tmpname , $target);

// voire le texte

// $photo_p = $_POST['photo_name'];
if( ($sexe != $chooix1) && ($pays != $chooix2) ){


		if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0){


  				
								if ($_FILES['file']['size'] <= 9000000){


									$infosfichier =pathinfo($_FILES['file']['name']);
									$extension_upload = $infosfichier['extension'];
									$extensions_autorisees = array('jpg', 'jpeg', 'gif',
									'png');
									if (in_array($extension_upload,
									$extensions_autorisees))
									{

			move_uploaded_file($_FILES['file']['tmp_name'], 'img/' .basename($_FILES['file']['name']));

										$pr=$_FILES['file']['name'];

//charger l'image la ou je veux



// inserer dans le query

		$sql = "INSERT INTO pers(pseudo, email, tel, naiss, sexe, pays, password, photo_profil) VALUES ('$pseudo','$email','$tel','$naiss','$sexe','$pays','$pwd','$pr')";




				$result = mysqli_query($conn, $sql);

				if($result)
			{
	// header("Location: DEVOIR.php");

		} else{

	echo "Error:" .$sql;
		}




		$media = "SELECT * FROM pers";

		$total = mysqli_query($conn, $media); 



	

		while($data = mysqli_fetch_array($total))

		{ 

		
	

				?>


		<tr> 
			<td> <?php echo $data['id'];?></td>
			<td> <?php echo $data['pseudo'];?></td>
			<td> <?php echo $data['email'];?></td>
			<td> <?php echo $data['tel'];?></td>
			<td> <?php echo $data['naiss'];?></td>
			<td> <?php echo $data['date_inscription'];?></td>
			<td> <?php echo $data['sexe'];?></td>
			<td> <?php echo $data['pays'];?></td>
			<td> <?php echo $data['password'];?></td>
			<td> <img src="<?php echo $data['photo_profil'] ; ?>" width="100" height="100" /> </td>
		</tr>-

		<?php

		}
}

		}else{

	header('Location:index.php');
}
}else{

	header('Location:index.php');
}
}else{

	header('Location:index.php');
}


	?>


		</table>

		<?php mysqli_close($conn); ?>







</div>
</div>
</body>
</html>

