<?php

	require_once("helper.php");


	connect();

	if(!isLogin()){
		redirect("login.php?err=err4");
	}
	if(isset($_POST['btnSave'])){
		editProfile($_SESSION['user_id']);
	}else if(isset($_POST['btnUpdatePassword'])){
		updatePassword($_SESSION['user_id']);
	}else if($_POST['updateAvatar']){
		updateAvatar($_SESSION['user_id']);
	}

	$id = $_SESSION['user_id'];
	$user = getProfile($id);


	disConnect();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style >
		#main{
			padding-top: 20px;
		}
	</style>
</head>
<body style="background-color: gray;">

	<div class="container" id="main">
		<div style="margin-bottom:10px;">
			<?php
				if(isset($_GET['err'])){
					setError("err1","name can not be empty");
					setError("err2","username can not be empty");
					setError("err3","phone can not be empty");
					setError("err4","error");
					setError("err5","شما مقداری را تغییر ندادید");
					setError("err6","new password is empty");
					setError("err7","confirm new password is empty");
					setError("err8","new password with confirm new password not match");
					setError("err9","شما پسورد حال حاضرتان را وارد کرده اید");
					setError('err10','شما همان عکس قبلی را انتخاب کردید');
					setError('err11','we can not upload file');
                    setError('err12','format error');
				}elseif(isset($_GET['ok'])){
					setSuccess("success","Update Success");
				}
			?>
		</div>
		<form method="post" action="">
			<div>
				<label for="name">Name: </label>
				<input class="form-control" type="text" id="name" name="name" value="<?php echo $user['name']?>">
			</div>
			<div>
				<label for="username">Username: </label>
				<input class="form-control" type="text" id="username" name="username" value="<?php echo $user['username']?>">
			</div>
			<div>
				<label for="phone">Phone: </label>
				<input class="form-control" type="text" id="phone" name="phone" value="<?php echo $user['phone']?>">
			</div>
			<div style="margin-top:10px;">
				<input type="submit" name="btnSave" value="Save" class="btn btn-primary">
			</div>
		</form>
		<form method="post" action="">
			<div>
				<label for="newPassword">New Password: </label>
				<input class="form-control" type="text" id="newPassword" name="newPassword" >
			</div>
			<div>
				<label for="cNewPassword">Confrim New Password: </label>
				<input class="form-control" type="text" id="cNewPassword" name="cNewPassword">
			</div>
			<div style="margin-top:10px;">
				<input type="submit" name="btnUpdatePassword" value="Update Password" class="btn btn-primary">
			</div>
		</form>
		<form method="post" action="" enctype="multipart/form-data">
			<hr>
			<div>
				<img src="<?php
					if($user['avatar'] !== ''){
						print 'images/'.$user['avatar'];
					}else{
						print 'images/noPhoto.png';
					}
				?>" style="width:200px;height: 100px;">
			</div>
			<div style="margin-top:20px;">
				<input class="form-control" type="file" name="user_file">
			</div>
			<div style="margin-top:10px;">
				<input type="submit" name="updateAvatar" value="Update Avatar" class="btn btn-primary">
			</div>
		</form>
		<div style="margin-top:20px;">
 <a href="profile.php" class="btn btn-success">Go back to profile</a>	
</div>
	</div>

</body>
</html>