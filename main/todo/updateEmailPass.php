<?php 
session_start();
include '../View/header.php'; 
?>

<h1 class="title">Change Password</h1>
	<div class="container" id="contain" style="height: 470px;">
		<div class="formRadio" style="height: 470px;">
			<form action="index.php" method="post">
				<input type="hidden" name="action" value="updateEmailPass">

				<label>Enter your Email address:</label>
				<input type="email" name="currentEmail">
				<br>

				<label>Enter your current password:</label>
				<input type="password" name="currentPassword">
				<br>

				<label>Enter new password:</label>
				<input type="password" name="newPassword">
				<br>

				<label>Enter new password again:</label>
				<input type="password" name="newPasswordAgain">
				<br>

				<input type="submit" name="submit" value="Update">
			</form>
		</div>
	</div>
<?php include '../View/footer.php'; ?>