<head>
<style>

	.opensans {
		font-size:70px;
		font-family:"Open Sans";
		text-align:center;
		padding:10px;
		border-bottom:1px solid #f3f3f3;
		}
				.opensans1 {
		font-size:18px;
		font-family:"Open Sans";
		text-align:center;
		}
		
	a {
		color:#ff5050;
		text-decoration:none;
		}
	a:hover {
		color:black;
		}
	
</style>

<p class="opensans"> <?php $email = $_GET['email']; $stat = $_GET['flag'];
if ($stat == 1) {

 echo "Welcome ".$email; } 
 
else {
	echo "Oops! Talk with our Head! wearing White and Black Checked Shirt";
	} 
 ?></p>

<center><a href="index.html" class="opensans">Next Chekin</a></center>