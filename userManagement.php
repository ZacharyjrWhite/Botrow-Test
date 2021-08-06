

<?php
require("login.php");
require("userPermissionService.php");
// require("PasswordService.php");
$de = date('Y-m-d');

$passwordService = new PasswordService();

if(isset($_GET["userToDelete"])){
	DeleteUser($_GET["userToDelete"]);
	$_GET["userToDelete"] = null;
	?>
	<script>window.location.href = "./userManagement.php";</script>
	<?php
}


if(isset($_GET["reactivateUser"])){
	ActivateUser($_GET["reactivateUser"]);
	$_GET["reactivateUser"] = null;
   ?>
   <script>window.location.href = "./userManagement.php";</script> 
<?php 
}

if(isset($_GET['togglePermissionUser']) and isset($_GET["togglePermissionID"]) and isset($_GET['activeFlag'])){
	$_SESSION['selectedUser'] = $_GET['togglePermissionUser'];
	toggleUserPermission($_GET["togglePermissionID"], $_GET["togglePermissionUser"], $_GET['activeFlag']);
	$_GET["togglePermissionUser"] = null;
	$_GET["togglePermissionID"] = null;
	$_GET['activeFlag'] = null;
	?>
	<script>window.location.href = "./userManagement.php?viewPermissions=<?php echo $_SESSION['selectedUser']; ?>&rowID=<?php echo $_GET['rowID'] ?>";</script>
	<?php
	$_SESSION['selectedUser'] = null;
}
?>

<?php
if(isset($_POST['submitPasswordRequest'])){
	UpdateUserPassword($_POST['submitPasswordRequestUser'], $passwordService->getEncryptedPassword($_POST['submitPasswordRequest']));
	?>
	<script>window.location.href = "./userManagement.php?EditRequested=<?php echo $_POST['submitPasswordRequestUser']; ?>";</script>
	<?php
}
?>

<?php
if(isset($_POST['addRequestUsername']) and isset($_POST['addRequestPassword']) and isset($_POST['addRequestConfirmPassword'])){

	$validInput = true;
	$newUsername = $_POST['addRequestUsername'];
	$output = "";
	if($_POST['addRequestPassword'] == $_POST['addRequestConfirmPassword']) {	$newPassword = $passwordService->getEncryptedPassword($_POST['addRequestPassword']);  } else {	$validInput = false;	}
	if(isset($_POST['addRequestTaxRate']) and $_POST['addRequestTaxRate'] != '') {	$newTaxRate = $_POST['addRequestTaxRate'];	} else {  $newTaxRate = 13;  }
	if(isset($_POST['addRequestAbbrev']) and $_POST['addRequestAbbrev'] != '') {	$newAbbrev = $_POST['addRequestAbbrev'];	} else {  $newAbbrev = 'horse';  }
	if(isset($_POST['addRequestResort']) and $_POST['addRequestResort'] != '') {	$newResort = $_POST['addRequestResort'];	} else {  $newResort = 'Kivi Park';  }
	if(isset($_POST['addRequestAccessCode']) and $_POST['addRequestAccessCode'] != '') {	$newAccessCode = $_POST['addRequestAccessCode'];	} else {  $newAccessCode = 456456;  }

	if($validInput == true){
		CreateUser($newUsername, $newPassword, $newTaxRate, $newAbbrev, $newResort, $newAccessCode);
		//addAllPermissionsToNewUser($newUsername);
	}
	?>
	<script>//window.location.href = "./userManagement.php?viewPermissions=<?php //echo $newUsername?>";</script>
	<?php
}
?>


<head>
  <meta charset="utf-8">
<title>Botrow - User Management</title>

  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type='text/css'>



	input {
	
  color: #585858;
  padding: 10px 12px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:50%;
		
	}
	
		input[type=submit] {
	
  color: #585858;
  padding: 10px 12px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:100%;
		
	}
	

	
	.buton1 {
position: relative;
background-color: #203A81;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
display: inline-block;
cursor: pointer;
color: #ffffff;
font-family: more;
font-size: 20px;
padding: 8px 17px;
text-decoration: none;
text-shadow: 0px 1px 0px #283966;
width: 120px;
text-transform: uppercase;
margin: 5px;
}

.buton1:active {
position: relative;
top: 1px;
}

.buton1:hover {
background-color: #0097ab;
position: relative;
top: 1px;
}

.buton2 {
position: relative;
background-color: #0097ab;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
display: inline-block;
cursor: pointer;
color: #ffffff;
font-family: more;
font-size: 20px;
padding: 8px 17px;
text-decoration: none;
text-shadow: 0px 1px 0px #283966;
width: 120px;
text-transform: uppercase;
margin: 5px;
}

.buton2:active {
position: relative;
top: 1px;
}

.buton2:hover {
background-color: #203A81;
position: relative;
top: 1px;
}



	.daa {
	
  color: #203A81;
  padding: 10px 10px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
			font-family:more;
	font-size:24px;
	height: 48px;
	font-weight: bold;
		overflow: hidden; 
	

	}	
	
	.buton4 {
		margin: 0px;
		position: relative;
	background-color:#203A81;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:more;
	font-size:18px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 300px;
	text-transform: uppercase;
}

.buton4:active {
	position:relative;
	
}

.buton4:hover {
		background-color:#6D6E70;
	position:relative;
	
}

.btn_disabled{
	position: relative;
	background-color: #474545;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	display:inline-block;
	color: #787171;
	font-family:more;
	font-size:20px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 120px;
	text-transform: uppercase;
}

.buton5 {
		position: relative;
		background-color:#203A81;
		-moz-border-radius:10px;
		-webkit-border-radius:10px;
		border-radius:10px;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:more;
		font-size:12px;
		padding:8px 0px;
		width: 100%;
		text-decoration:none;
		text-shadow:0px 1px 0px #283966;
		text-transform: uppercase;
		cursor: pointer;
		text-align: center;			
		margin: 5px;
		margin-right: 10px;
		margin-left: -5px;
	}

.cool{
	margin-top: 25px;
	padding:4px 17px;
	background-color:#203A81;
	color:#ffffff;
	font-family:more;
	font-size:25px;
}

.header{
	background-color:#203A81;
	color:#ffffff;
	font-family:more;
	font-size:25px;
	margin-bottom: 20px;
}

.userTable{
	width: 1200px;
	background-color: #e1e6f5;
	font-family:more;
	font-size:25px;
	border-collapse: collapse;	
}

.userTable td, .userTable th{
	text-align: left;
	padding-left: 15px;
	
}

.hasBorderBottom{
	border-bottom: 2px solid #c3c8d6;
}
.userTable span{
	margin-left: 50%;
}

.userTable tr:nth-child(even){
	background-color: #c3cade;
}

.clearText{
	opacity: 0;
}

.deleteButton{
	background-color: red;
}

.activateButton{
	background-color: green;
}

.activeText{
	color: green;
}

.inactiveText{
	color: red;
}

.disabled {
	background-color: #474545;
}

.disabled:hover, .btn_disable:hover{
	cursor: not-allowed;
}

.hidden{
	display: none;
}

.userEditInputs{
	float:left;
	margin-top: 20px;
}

.small_margin_top{
	margin-top: 10px;
}

.addButton{
	float: right;
	width: 300px;
}

.addInterface a{
	margin: 0px;
	margin-left: 10px;
}

.searchUsername{
	width: 300px;
	float: right;
	margin-right: 10px;
}

.searchButton{
	float: right;
	width: 300px;
	border: none;
	text-decoration: none;
	margin-right: 10px;
	margin-left: 10px;
	display: inline-block;
}

.addInterface form{
	float: right;
	margin: 0;
}

.buton5.cancelButton{
	float: right;
	width: 50px;
	border: none;
	text-decoration: none;
	margin-top: 5px;
	display: inline-block;
}

tr.highlight{
	background-color: #63c8f7  !important;
}

.btn_disabled {
position: relative;
background-color: #474545;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
display: inline-block;
color: #787171;
font-family: more;
font-size: 20px;
padding: 8px 17px;
text-decoration: none;
text-shadow: 0px 1px 0px #283966;
width: 120px;
text-transform: uppercase;
cursor: not-allowed;
margin: 5px;
}

._disabled,
._disabled:hover {
background-color: #474545;
color: #787171;
cursor: not-allowed;
}

.disabled,
.disabled:hover {
background-color: #474545;
color: #787171;
cursor: not-allowed;
}

  </style>
</head>
<center>
<table align="center"><tr><td align="center">
<?php require("pageHeader.php"); ?>

<table width="1200" class="cool" align="center"><tr><td align="center"><font face="more" size="6"><b>User Management</b></font>
</td></tr></table>

<div class="addInterface">
	<p style="margin-top: 25px; float: left; font-style: italic; font-size: 10pt;">* Admin User</p><br>
	
	<?php 
	if(isset($_GET['SearchUser'])){
	?> 
		<form method="POST" action="userManagement.php">
		<a class="buton5 cancelButton" href="userManagement.php">X</a>
		<button type="submit" class="buton5 searchButton">Search User</button>
		<input type="text" class="searchUsername" name="searchUsername" id="searchUsername" placeholder="Username" autocomplete="off" autofocus required>
		</form>
	<?php
	}else{
	?>
		<a style="float: right;" class="buton5 addButton" href="userManagement.php?AddRequested=true">Create User</a>
		<a style="float: right;" class="buton5 addButton" href="userManagement.php?SearchUser=true">Search User</a>
	<?php 
	}
	?>
	
</div>

<br><br>


<!-- View user information, activate or disable, or update user -->
<table class = "userTable">
	<tr class="header"><th></th><th>Username</th><th>Status</th><th class="clearText">Update</th><th class="clearText">Delete</th></tr>
    <!-- <tr class="header"><th></th><th>Username</th><th>Password</th><th>Active</th><th class="clearText">Update</th><th class="clearText">Delete</th></tr> -->
    <?php
    $users = GetUsers();
    while ($row = mysqli_fetch_array($users, MYSQLI_BOTH)) {
		$isAdmin = isAdminUser($row["username"]);
    ?>		<tr>
				<td> <?php if($isAdmin) { echo "*"; } ?></td>
				<td> <?php echo $row["username"] ?> </td>
				<!-- <td> <?php echo $row["password"] ?> </td> -->
				<td class="<?php if($row["active"] == 1) { echo "activeText"; } else { echo "inactiveText"; } ?>"> <?php if($row["active"] == 1) { echo "Active"; } else { echo "Inactive"; } ?> </td>
				

				<?php if($isAdmin || $row['active'] == 0){ 
					?> <td><a class="buton5 disabled">Update</a></td> <?php
				}else{ 
					?> <td><a class="buton5 editButton" href="userManagement.php?EditRequested=<?php echo $row["username"]?>">Update</a></td> <?php
				} ?>

				<?php if($row["active"] == 0 ) {
					if($isAdmin){
						?> <td><a class="buton5 activateButton disabled">Activate</a></td> <?php
					}else{
						?> <td><a class="buton5 activateButton" href="userManagement.php?reactivateUser=<?php echo $row["username"]?>">Activate</a></td> <?php
					}
				}else{
                    if ($isAdmin) {
						?> <td><a class="buton5 deleteButton disabled">Delete</a></td> <?php
                    }else{
						?> <td><a class="buton5 deleteButton" href="userManagement.php?userToDelete=<?php echo $row["username"]?>">Delete</a></td> <?php
					}
				}
				?>
			</tr> 
	<?php
    }?>
</table>


<!-- Edit user information or view permissions -->
<?php if(isset($_GET["EditRequested"])) { ?>
	<div class="userEditInputs">
		<table class = "userTable">
			<tr class="header"><th>Username</th><th>Password</th><th></th><th></th></tr>
			<?php
			$users = GetUsers();
			while ($row = mysqli_fetch_array($users, MYSQLI_BOTH)) {
				$isAdmin = isAdminUser($row["username"]);
                if ($_GET["EditRequested"] == $row["username"]) {
                    ?>		<tr>
						<td> <?php echo $row["username"] ?> </td> 
						<td> <?php echo $passwordService->decryptPass($row["password"]); ?> </td>
						<td><a class="buton5 editButton" href="userManagement.php?passwordRequest=<?php echo $row["username"]?>">Change Password</a></td> 
						<?php if ($isAdmin) {
                        ?> <td><a class="buton5 editButton disabled">Permissions</a></td> <?php
                    } else {
                        ?> <td><a class="buton5 editButton" href="userManagement.php?viewPermissions=<?php echo $row["username"]?>">Permissions</a></td> <?php
                    } ?>
					</tr> 
			<?php
                }
			}?>
		</table>
	</div>
<?php } ?>

<?php if(isset($_GET["passwordRequest"])) { ?>
	<div class="userEditInputs">
		<form method="POST" action="userManagement.php">
			<table class = "userTable">
				<tr class="header"><th>Username</th><th>Password</th><th class="clearText">Update</th><th class="clearText">Delete</th></tr>
				<?php
				$users = GetUsers();
				while ($row = mysqli_fetch_array($users, MYSQLI_BOTH)) {
					if ($_GET["passwordRequest"] == $row["username"]) {
						?>	
						<tr>
						<td><?php echo $row["username"] ?><input type="text" class="hidden" name="submitPasswordRequestUser" id="submitPasswordRequestUser" value="<?php echo $row["username"] ?>"></td> 
						<td><input class="small_margin_top" type="text" name="submitPasswordRequest" id="submitPasswordRequest" value="<?php echo $passwordService->decryptPass($row["password"]); ?>" autocomplete="off" required></td>
						<td><button class="buton5 editButton" type="submit">Update Password</a></td>
						<td><a class="buton5 editButton" href="userManagement.php?EditRequested=<?php echo $row["username"]?>">Cancel</a></td> 
						</tr> 
				<?php
					}
				}?>
			</table>
		</form>
	</div>
<?php } ?>

<?php if(isset($_GET["viewPermissions"])) { ?>
	<div class="userEditInputs">
		<table class = "userTable">
			<tr class="header"><th><?php echo "View Permissions: " . $_GET["viewPermissions"]?></th><th></th><th></th></tr>
			<?php
				
				$user = $_GET["viewPermissions"];
				
				if($user != ''){	$_SESSION["selectedUser"] = $user;    }
				$permissions = getUsersPermissions($_GET["viewPermissions"]);
				while ($row = mysqli_fetch_array($permissions, MYSQLI_BOTH)) {
					$isActive = $row["active"];
					?>		
						<tr class="<?php echo "CurrentRow-" . $row['id']; ?>">
							<td><?php echo $row["description"] ?></td><td class="<?php if($isActive == 0){ echo "inactiveText"; } else { echo "activeText"; } ?>">
								<?php if($isActive == 0){ echo "Inactive"; } else { echo "Active"; } ?></td><td><a class="buton5 toggleButton" 
								href="userManagement.php?
									togglePermissionID=<?php echo $row['id'] ?>
									&togglePermissionUser=<?php echo $_GET["viewPermissions"];?>
									&activeFlag=<?php echo $row["active"];?>
									&rowID=CurrentRow-<?php echo $row['id']; ?>">Toggle</a></td>
						</tr> 
					<?php
				}
			?>
		</table>
	</div>
<?php } ?>


<?php if(isset($_GET["AddRequested"])) { ?>
	<div class="userEditInputs">
		<form method="POST" action="userManagement.php">
			<table class = "userTable">
				<tr class="header"><th style="width: 250px;"></th><th style="width: 250px;"></th><th style="width: 250px;" class=""></th><th style="width: 250px;" class="clearText">Delete</th></tr>
					<tr>
						<td><input style="width: 250px;" class="small_margin_top" type="text" Placeholder="Username - non-numeric" name="addRequestUsername" id="addRequestUsername" pattern="[A-Za-z]+" autocomplete="off" required></td>
						<td></td><td></td><td></td>
					</tr>
					<tr>
						<td><input style="width: 250px;" class="small_margin_top" type="text" Placeholder="Password - alphanumeric" name="addRequestPassword" id="addRequestPassword" pattern="[A-Za-z\d$@$!%*?&]+" autocomplete="off" required></td>
						<td><input style="width: 250px;" class="small_margin_top" type="text" Placeholder="Confirm Password - alphanumeric" name="addRequestConfirmPassword" id="addRequestConfirmPassword" pattern="[A-Za-z\d$@$!%*?&]+" autocomplete="off" required></td><td></td><td>
					</tr>
			
					<tr><td><button class="buton5 editButton" type="submit">Add User</button></td><td></td><td><td></td></tr> 
			</table>
		</form>
	</div>
<?php } ?>


<script>
$(window).load(function() {
	if($('.userEditInputs').length != 0){
		$("html, body").animate({
		scrollTop: $('.userEditInputs').offset().top
		}, 0);
	}
});

const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));

<?php 
if(isset($_GET['viewPermissions']) || isset($_GET["AddRequested"])){
	if(isset($_GET['rowID'])){
		?>
		var oldRow = document.querySelector(".highlight");
		if(oldRow !== null){
			oldRow.classList.remove("highlight");	
		}
		var currentRow = '<?php echo $_GET['rowID']; ?>';
		var newRow = document.querySelector(`.${currentRow}`);
		newRow.classList.add("highlight");
		newRow.scrollIntoView(true);
		<?php
	}else{
	?>    
		$(window).load(function() {
		$("html, body").animate({
			scrollTop: $('.userEditInputs').offset().top
		}, 0);
		});
	<?php
	}
}
?>
	
<?php
if(isset($_POST['searchUsername'])){
	?>
			var searchVar = '<?php echo trim($_POST['searchUsername']) ?>';
			var table = document.querySelector(".userTable");
			var rows = table.querySelectorAll("tr");
			var foundRow = null;

			rows.forEach((row, i) =>{
				if(i != 0){
					var username = row.querySelectorAll("td")[1].innerHTML.trim();
					if(searchVar.toUpperCase() === username.toUpperCase()){
						rows[i].classList.add("highlight");
						foundRow = rows[i];
					}else{
						rows[i].classList.remove("highlight");
					}
				}
			})

			if(foundRow !== null){
				foundRow.scrollTo({
				top: 100,
				left: 100,
				behavior: 'smooth'
				});
			}
	<?php
}
?>
	
$(window).load(function() {
	if($('.highlight').length != 0){
		$("html, body").animate({
			scrollTop: $('.highlight').offset().top
		}, 0);
	}
});


</script>