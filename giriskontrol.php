<?php
	session_start();
	include("baglan.php");
	if($_POST) {
			$mail = $_POST["mail"];
			$sifre = $_POST["sifre"];
			
			$sqlsorgula="SELECT * FROM kullanici WHERE mail='$mail' and sifre='$sifre'";
			$sonuc=mysqli_query($baglan,$sqlsorgula);
			$row=mysqli_fetch_assoc($sonuc);


			if(mysqli_num_rows($sonuc) == 1) 
				{
					$_SESSION['giriskullanici']=$row;

				
					if(isset($_POST['hatirla'])) 
					{
						setcookie("mail","$mail",time() + (60*60*48));
						setcookie("sifre","$sifre",time() + (60*60*48));
					}
					else 
					{
						setcookie("mail","$mail",time() - 1);
						setcookie("sifre","$sifre",time() - 1);	
					}
					
					echo "<script>
                    window.location.href = 'index.php';
                    </script>";
				
				}
			else 
				{
					echo "<script>
                    alert('Mail Adresiniz veya Sifrenizi Hatalı Girdiniz.');
                    window.location.href = 'giris.php';
                    </script>";
			 	}
		}
	?>


