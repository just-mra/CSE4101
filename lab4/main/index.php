<!DOCTYPE html>
<html>  
    <head>  
        <title>Home Page</title>  
        <link rel="stylesheet" href="CSS/bootstrap.min.css" />
		<script src="CSS/jquery.min.js"></script>  
		<script src="CSS/jquery-ui.js"></script>
    </head>  

    <body>  
		
		<div id="user_dialog" title="Add Data">
			<form method="post" id="user_form">

				<div class="form-group">
					<label> Your ID</label>
					<input type="number" name="id" id="id" class="form-control"/>
					<span id="error_id" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label> First Name</label>
					<input type="text" name="firstName" id="firstName" class="form-control" required/>
					<span id="error_firstName" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label> Last Name</label>
					<input type="text" name="lastName" id="lastName" class="form-control" required/>
					<span id="error_lastName" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Department</label>
					<select name="department" id="department" required>
                    <option value="CSE">CSE</option>
                    <option value="BME">BME</option>
					<option value="ChE">ChE</option>
                    
					<option value="PME">PME</option>
                    <option value="IPE">IPE</option>
					<option value="EEE">EEE</option>
                    
                    
                </select>
					
				</div>
				<div class="form-group">
					<label>Gender</label>
					<select name="gender" id="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
					<span id="error_gender" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" id="email" class="form-control" required/>
					<span id="error_email" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input type="text" name="mobilenumber" id="mobilenumber" class="form-control" required/>
					<span id="error_mobilenumber" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Favorite Icecream Flavor</label>
					<select name="faviceflv" id="faviceflv" required>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Banana">Banana</option>
					<option value="Mango">Mango</option>
					<option value="Vanilla">Vanilla</option>
                    <option value="Orange">Orange</option>
					<option value="Chocolate">Chocolate</option>
                    
                    
                    
                </select>
					<span id="error_lastName"></span>
				</div>

				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" id="address" class="form-control" required/>
					<span id="error_lastName" ></span>
				</div>
				
				<div class="form-group">
					<label>District</label>
					<select name="district" id="district" >
                    <option value="Jashore">Jashore</option>
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
					
				</div>
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>
			</form>
		</div>
		
		<div id="actionalert" title="Action">
			
		</div>
		
		<div id="data_delete_con" title="delete_data">
		<p>Confirm to delete data!</p>
		</div>
		
    </body>  
</html>  




<script src="JS/delete_edit.js">  

</script>