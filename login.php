<?php
		include('admin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* user */
			$query = "SELECT * FROM tbluser WHERE username='$username' AND password='$password'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			
		if( $row > 0 ) { 
			if($row['category'] == "agrovet"){
				$_SESSION['id']=$row['user_id'];
				$_SESSION['username']=$username;

				$userId=$_SESSION['id'];
				$user=$_SESSION['username'];
				$sql = "INSERT INTO `user_log` (`user_id`,`username`,`login_date`) VALUES ('$userId','$user', NOW())";
				$query = mysql_query($sql);
            header("Location:agrovet/dasboard.php");
        }elseif($row['category']=="farmer"){
        	$_SESSION['id']=$row['user_id'];
        	$_SESSION['username']=$username;

				$userId=$_SESSION['id'];
				$user=$_SESSION['username'];
				$sql1 = "INSERT INTO `user_log` (`user_id`,`username`,`login_date`) VALUES ('$userId','$user', NOW())";
				$query = mysql_query($sql1);
            header("Location: dasboard.php");
        	
		}elseif($row['category']=="kcc"){
        	$_SESSION['id']=$row['user_id'];
        	$_SESSION['username']=$username;

				$userId=$_SESSION['id'];
				$user=$_SESSION['username'];
				$sql1 = "INSERT INTO `user_log` (`user_id`,`username`,`login_date`) VALUES ('$userId','$user', NOW())";
				$query = mysql_query($sql1);
            header("Location: kcc/dasboard.php");
        	
		}elseif($row['category']=="bank"){
        	$_SESSION['id']=$row['user_id'];
        	$_SESSION['username']=$username;

				$userId=$_SESSION['id'];
				$user=$_SESSION['username'];
				$sql2 = "INSERT INTO `user_log` (`user_id`,`username`,`login_date`) VALUES ('$userId','$user', NOW())";
				$query = mysql_query($sql2);
            header("Location: bank/dasboard.php");
        	
		}
		
	}else{ 
				
				 echo "<script type='text/javascript'>alert('Username/Password Incorrect.Try again'); window.location.href='index.php'</script>";
		}
		?>