


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>formulaire</title>

	<style>
		
		.bordure{

			border-radius: 5px;
			width: 100%;
			

		}
		.inputdiv{

			max-width: 100%;
		}

	</style>



</head>
<body style="background-color: green; background-repeat: no-repeat; background-size: cover; ">

	<div class="container">
		
		<div class="row" >

			
			<div class="col-md-12 col-sm-12 col-xs-12" style="height: 120px"></div>
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10" style="border:0px solid blue; box-shadow:4px; background-color: rgba(255,0,0,0.5); border-radius: 5px; ">
				
			<center>	

						
				


				<form action="code.php" method="post" enctype="multipart/form-data" autocomplete="off" >
						

						<center><h2 style="color: rgba(255,255,255,1)"> Inscription</h2> </center>


						<img  src="img/" id="imgdisplay" width="200px" height="200px" style="border:0px solid black; border-radius: 50%" >

						<div class="inputdiv"> <input type="file"  onchange="preview_image(event)"  name="file" id="photo" placeholder="select photo" 

							accept="img/*" required="required" autocomplete="off" class="bordure" ></div><br>

						<div style="color:white; font-size:15px"> photo de profile</div><br><br>

						<div class="inputdiv"> <input type="text" name="pseudo" placeholder="entrez pseudo" required="required" autocomplete="off" class="bordure" ></div><br>

						<div class="inputdiv"> <input type="email" name="email" placeholder="Email" required="required" autocomplete="off" class="bordure" ></div><br>
						
						<div class="inputdiv"> <input type="number" name="tel" placeholder="entrez numero tel" required="required" autocomplete="off" class="bordure"></div><br>

						<div class="inputdiv"> <input type="date" name="naiss" placeholder="entrez date de naissance" required="required" autocomplete="off" class="bordure"></div><br>
						
						

						<div class="inputdiv"> <select   name="pays"  required="required" autocomplete="off" class="bordure" > 
						
						
							
							
							<option selected="selected" autocomplete="off" name="chooix1" value="chooix1" required="required" disabled="disabled" > pays</option>
							<option required="required" autocomplete="off"  value="cameroun"> cameroun </option>
							<option required="required" autocomplete="off" value="senegal" > senegal </option>

							</select></div><br>

						<div class="inputdiv"> <select   name="sexe"  required="required" autocomplete="off" class="bordure" > 
						
						
							
							
							<option selected="selected" required="required" name="chooix2" disabled="disabled" value="chooix2" > sexe</option>
							<option required="required" autocomplete="off" value="feminin" > feminin </option>
							<option required="required" autocomplete="off" value="masculin" > masculin </option>

							</select></div><br>

							

						<div class="inputdiv"> <input type="password" name="password" placeholder="entrez mot de passe" required="required" autocomplete="off" class="bordure"></div><br>

						<!-- <div class="inputdiv"> <input type="password" name="password_retype" placeholder="entrez de nouveau le mot de passe" required="required" autocomplete="off" class="bordure"></div><br> -->

						

						<div> <input type="submit" value="submit" class="btn btn-primary btn-block" style="font-size:15px; background-color: black !important;" > </div> 
						 <br> <p> <a href="" style="color:white; font-size:15px; font-weight: bold;"> J'ai deja un compte </a></p> 

				</form>
		
			</center>

			</div>	

			
			<div class="col-md-12 col-sm-12 col-xs-12" style="height: 20px"></div>
		

	</div>
</div>
<script type="text/javascript">
	


	function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('imgdisplay');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
		

</script>



</body>
</html>