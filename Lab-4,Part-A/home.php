<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
		<div class="container " style=" ">
			<div class="row">
				<div class="col-md-12 d-flex">
					
					<div class="left col-md-9 mt-3">
						<form action="signup.php" method="post" class="mt-5" style="height:500px;width:520px;margin-left: 400px;background-color: #ffcc99;margin-top:50px;" >
							<h1 class="text-center text-uppercase" style="color:#194d19;margin-left:150px;">Sign up form</h1>
							
							<input class="form-control mt-4" style="border:1px  solid blue; height: 25px;width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;"   type="text" name="firstname" placeholder="Enter Your First Name">
							<input class="form-control mt-4" style="border:1px  solid blue;height: 25px; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;"   type="text" name="lastname" placeholder="Enter Your Last Name">
							
							<select id="department" name="department" style="border:1px  solid blue; height: 25px;width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;">
								<option disabled selected>Select Department</option>
								<option value="CSE">CSE</option>
								<option value="EEE">EEE</option>
								<option value="IPE">IPE</option>
								<option value="ChE">ChE</option>
								<option value="BME">BME</option>
								<option value="PME">PME</option>
								<option value="TE">TE</option>
							</select>
							<input class="form-control mt-4" style="border:1px  solid blue; height: 25px;width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;"   type="text" name="roll" placeholder="Enter Your Roll">
							<input class="form-control mt-4" style="border:1px  solid blue; width:400px; height: 25px; border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;"   type="text" name="gender" placeholder="Enter Your Gender">
							<input class="form-control mt-4" style="border:1px  solid blue; width:400px;height: 25px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;"   type="email" name="email" placeholder="Enter Your Email Address">
							<input class="form-control mt-4" style="border:1px  solid blue; width:400px; height: 25px; border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;"   type="text" name="mobilenumber" placeholder="Enter Your Mobile number">
							<select id="icecreamflavour" name="icecreamflavour" style="border:1px  solid blue;height: 25px; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;">
								<option disabled selected>Favourite Icecream Flavour</option>
								<option value="Chocolate">Chocolate</option>
								<option value="Vanilla">Vanilla</option>
								<option value="Banana">Banana</option>
								<option value="Toffee">Toffee</option>
								<option value="Strawberry">Strawberry</option>
								<option value="Orange">orange</option>
								<option value="Vanilla">Vanilla</option>
								<option value="Blackberry">Blackberry</option>
							</select>
							<input class="form-control mt-4" style="border:1px  solid blue; width:400px; height: 25px; border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;"   type="text" name="address" placeholder="Enter Your Address">
							
							
							
							<select id="district" name="district" style="border:1px  solid blue;height: 25px; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;">
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
							</select>
							<input class="btn btn-success mt-4"style="border:1px  solid white; width:400px;  border-radius: 10px 10px 10px 10px; margin-left: 55px;margin-top:10px;height: 30px;" type="submit" value="Signup">
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>