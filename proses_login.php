
<!DOCTYPE html>
<html lang="en">

<head>
<link href="plugin/sweetalert/dist/sweetalert.css" rel="stylesheet">
<!-- jQuery -->
<script src="plugin/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
require_once('connect.php'); 		
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['masuk'])){
		
		$jeneng=  htmlentities($_POST['username']); 	//tangkap data yg di input dari form login input username
		$kunci= htmlentities(sha1(md5($_POST['password']))); 	//tangkap data yg di input dari form login input password
		//$kunci=  htmlentities($_POST['password']);
		
		$query_login=mysqli_query($link,"select * from admin where username='$jeneng' AND password='$kunci'") or die (mysqli_error($link));	 //melakukan pengampilan data dari database untuk di cocokkan
		$hasil_login=mysqli_fetch_array($query_login);
		$jos=mysqli_num_rows($query_login);	 //melakukan pencocokan
		if($jos > 0){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
			  //jika cocok, buat session dengan nama sesuai dengan username
			//Declare session for CKEDITOR and KCFINDER
			//$_SESSION['KCFINDER']=array();
			//$_SESSION['KCFINDER']['disabled'] = false;
			//$_SESSION['KCFINDER']['uploadURL'] = "../../../file";
			//$_SESSION['KCFINDER']['uploadDir'] = "../../../file";
			
			//
			$_SESSION['IdUser']=$hasil_login['id_admin'];
			$_SESSION['JenengUser']=$hasil_login['username'];
			$_SESSION['kunci']=$hasil_login['password'];
			$_SESSION['level']=$hasil_login['level'];
			//require_once("email.php");
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: '$jeneng, Accses Diterima !!',
							type: 'success',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('index.php');
					  } ,1000); 
					</script>";       
			}else{   				
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Oops! Gagal Login.',
							type: 'error',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('login.php');
					  } ,2000); 
					</script>"; 
		}
	
}
?>
</body>
</html>