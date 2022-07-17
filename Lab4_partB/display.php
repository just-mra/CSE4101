<?php
$conn=mysqli_connect('localhost','root','','p_lab4_partb');
session_start();
$sql="SELECT* FROM info";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Display Data</title>
		<link rel="stylesheet" href="display_style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/all.min.css">
		<link rel="stylesheet" href="css/fontawesome.min.css">
	</head>
	<style>

		h1{
			text-align: center;
			font-size: 35px ;
			color: black;
			margin-top: 10px;
		}
		select{
			margin-top: 10px ;
			width: 100%;
			height: 25px;
		}
		input{
			margin-top: 10px ;
			width: 100%;
			height: 30px;
		}

	</style>
	<body>
		<?php if (isset($_SESSION['delete'])) {?>
		<div class="alert alert-success">
			Data has been deleted Successfully!!
		</div>
		
		<?php } ?>
		<div class="header">
			<h1 style="color: lightblue">DATA LIST</h1>
		</div>
		<table class="table">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Department</th>
				<th>Roll</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Flavour</th>
				<th>Address</th>
				<th>District</th>
				<th>Options</th>
			</tr>
			<?php
			while ($row=mysqli_fetch_assoc($result)) {?>
			<tr>
				<td><?=$row['Id'] ; ?></td>
				<td><?=$row['firstname'] ; ?></td>
				<td><?=$row['lastname'] ; ?></td>
				<td><?=$row['department'] ; ?></td>
				<td><?=$row['roll'] ; ?></td>
				<td><?=$row['gender'] ; ?></td>
				<td><?=$row['email'] ; ?></td>
				<td><?=$row['mobilenumber'] ; ?></td>
				<td><?=$row['icecreamflavour'] ; ?></td>
				<td><?=$row['address'] ; ?></td>
				<td><?=$row['district'] ; ?></td>
				<td>
					<a class="btn1" data-toggle="modal" data-target="#modaldata">Edit</a>
					<a class="btn2" onclick="return confirm('Are you Sure to delete this??')" href="delete.php?Id=<?=$row['Id'] ; ?>" title="">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
		</table>
		
		
	</div>
</div>
</div>
<div class="modal fade" id="modaldata">
<div class="modal-dialog modal-sm modal-dialog-centered">
	<div class="modal-content" style="width:500px;">
		<div class="modal-header">
			<h5 class="modal-title"><i class="fa fa-edit" style="color:red;"></i> UPDATE DATA</h5>
			<button type="button" class="close" data-dismiss="modal" >
			&times;
			</button>
		</div>
		<div class="modal-body">
			<form action="update.php" method="post">
				
				<input type="text" name="firstname" placeholder="Enter Your First Name"><br>
				<input type="text" name="lastname" placeholder="Enter Your Last Name"><br>
				
				<select id="department" name="department">
					<option disabled selected>Select Department</option>
					<option value="CSE">CSE</option>
					<option value="EEE">EEE</option>
					<option value="IPE">IPE</option>
					<option value="ChE">ChE</option>
					<option value="BME">BME</option>
					<option value="PME">PME</option>
					<option value="TE">TE</option>
				</select><br>
				<input type="text" name="roll" placeholder="Enter Your Roll"><br>
				<input type="text" name="gender" placeholder="Enter Your Gender"><br>
				<input type="email" name="email" placeholder="Enter Your Email Address"><br>
				<input type="text" name="mobilenumber" placeholder="Enter Your Mobile number"><br>
				<select id="icecreamflavour" name="icecreamflavour">
					<option disabled selected>Favourite Icecream Flavour</option>
					<option value="Chocolate">Chocolate</option>
					<option value="Vanilla">Vanilla</option>
					<option value="Banana">Banana</option>
					<option value="Toffee">Toffee</option>
					<option value="Strawberry">Strawberry</option>
					<option value="Orange">orange</option>
					<option value="Vanilla">Vanilla</option>
					<option value="Blackberry">Blackberry</option>
				</select><br>
				<input type="text" name="address" placeholder="Enter Your Address"><br>
				
				
				
				<select id="district" name="district">
					<option disabled selected>Select District</option>
					<option value="Bagerhat">Bagerhat</option>
					<option value="Bandarban">Bandarban</option>
					<option value="Barguna">Barguna</option>
					<option value="Barisal">Barisal</option>
					<option value="Bhola">Bhola</option>
					<option value="Bogra">Bogra</option>
					<option value="Brahmanbaria">Brahmanbaria</option>
					<option value="Chandpur">Chandpur</option>
					<option value="Chittagong">Chittagong</option>
					<option value="Chuadanga">Chuadanga</option>
					<option value="Comilla">Comilla</option>
					<option value="Cox'sBazar">Cox'sBazar</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Dinajpur">Dinajpur</option>
					<option value="Faridpur">Faridpur</option>
					<option value="Feni">Feni</option>
					<option value="Gaibandha">Gaibandha</option>
					<option value="Gazipur">Gazipur</option>
					<option value="Gopalganj">Gopalganj</option>
					<option value="Habiganj">Habiganj</option>
					<option value="Jaipurhat">Jaipurhat</option>
					<option value="Jamalpur">Jamalpur</option>
					<option value="Jashore">Jashore</option>
					<option value="Jhalokati">Jhalokati</option>
					<option value="Jhenaidah">Jhenaidah</option>
					<option value="Khagrachari">Khagrachari</option>
					<option value="Khulna">Khulna</option>
					<option value="Kishoreganj">Kishoreganj</option>
					<option value="Kurigram">Kurigram</option>
					<option value="Kushtia">Kushtia</option>
					<option value="Lakshmipur">Lakshmipur</option>
					<option value="Lalmonirhat">Lalmonirhat</option>
					<option value="Madaripur">Madaripur</option>
					<option value="Magura">Magura</option>
					<option value="Manikganj">Manikganj</option>
					<option value="Maulvibazar">Maulvibazar</option>
					<option value="Meherpur">Meherpur</option>
					<option value="Munshiganj">Munshiganj</option>
					<option value="Mymensingh">Mymensingh</option>
					<option value="Naogaon">Naogaon</option>
					<option value="Narail">Narail</option>
					<option value="Narayanganj">Narayanganj</option>
					<option value="Narsingdi">Narsingdi</option>
					<option value="Natore">Natore</option>
					<option value="Nawabganj">Nawabganj</option>
					<option value="Netrokona">Netrokona</option>
					<option value="Nilphamari">Nilphamari</option>
					<option value="Noakhali">Noakhali</option>
					<option value="Pabna">Pabna</option>
					<option value="Panchagarh">Panchagarh</option>
					<option value="Patuakhali">Patuakhali</option>
					<option value="Pirojpur">Pirojpur</option>
					<option value="Rajbari">Rajbari</option>
					<option value="Rajshahi">Rajshahi</option>
					<option value="Rangamati">Rangamati</option>
					<option value="Rangpur">Rangpur</option>
					<option value="Satkhira">Satkhira</option>
					<option value="Shariatpur">Shariatpur</option>
					<option value="Sherpur">Sherpur</option>
					<option value="Sirajganj">Sirajganj</option>
					<option value="Sunamganj">Sunamganj</option>
					<option value="Sylhet">Sylhet</option>
					<option value="Tangail">Tangail</option>
					<option value="Thakurgaon">Thakurgaon</option>
				</select><br>
				<input class="btn btn-success" style="height:35px;" type="submit" value="UPDATE">
				
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
// unset($_SESSION['update']);
unset($_SESSION['delete']);
?>
</body>
</html>