
<?php 
$conn=mysqli_connect('localhost', 'root','', 'web4b');

$sql="SELECT* FROM registration";
$result=mysqli_query($conn,$sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Display Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	<!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- sweetalert link  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
	
</head>
<body>
	

<div class="container">
	<div class="row">
		<div class="col-md-12">	


			<h2 class="text-center text-info text-uppercase">Data Table</h2>
			<table class="table table-bordered text-center w-100 table-dark table-hover rounded">
				<tr>
					<th>SL No</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Departments</th>
					<th>Roll</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Number</th>
					<th>Flavor</th>
					<th>Address</th>
					<th>District</th>
					<th>Action</th>
				</tr>

				<?php 
				while ($row=mysqli_fetch_assoc($result)) {?>

				<tr>
					
					<td><?=$row['id'] ; ?></td>
					<td><?=$row['fname'] ; ?></td>
					<td><?=$row['lname'] ; ?></td>
					<td><?=$row['departments'] ; ?></td>
					<td><?=$row['roll'] ; ?></td>
					<td><?=$row['gender'] ; ?></td>
					<td><?=$row['email'] ; ?></td>
					<td><?=$row['mnumber'] ; ?></td>
					<td><?=$row['flavor'] ; ?></td>
					<td><?=$row['address'] ; ?></td>
					<td><?=$row['district'] ; ?></td>
					<td class="d-flex">
					


					
<button style="margin-right: 10px;" class="btn btn-success mr-3 editbtn" >Edit</button>

<!-- <a class="btn btn-danger ml-2" onclick="return confirm('Are you Sure ??')" href="delete.php?id=<?=$row['id'] ; ?>" title="">Delete</a> -->
<a class="btn btn-danger ml-2" onclick="return confirm('Are you Sure ??')" href="delete.php?id=<?=$row['id'] ; ?>" title="">Delete</a>

<!-- modal part css  -->



<!-- modal part bootstrap  -->
<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form style="" action="update1.php" method="post">
                <input type="hidden" name="update_id" id="update_id">
                    
            <label style="color: black" for="fname">First name <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="text" id="fname" name="fname" required><br>
            <label style="color: black" for="lname">Last name <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="text" id="lname" name="lname" required><br>
            <label style="color: black" for="">Department <span style="color: rgb(255, 0, 0);">*</span></label>
            <select name="departments"><br>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="IPE">IPE</option>
                <option value="PME">PME</option>
                <option value="BME">BME</option>
                <option value="ChE">ChE</option>
                <option value="TE">TE</option>
            </select><br>
            <label style="color: black" for="">Roll <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="number" name="roll" id="roll" required><br>
            <label style="color: black" for="">Gender</label><br>
            <input style="color: black" class="text-dark" type="radio" name="gender" value="Male" id="male" > 
            <label class="text-dark" for="Male">Male</label><br>
            
            <input style="color: black" class="text-dark" type="radio" name="gender" value="Female" id="female">
            <label class="text-dark" for="Female">Female</label><br>
            
            <label style="color: black" for="">Email <span style="color: red">*</span></label>
            <input type="email" name="email" id="email" required><br>
            <label style="color: black" for="">Mobile Number:</label>
            <input type="number" name="mnumber" id="mnumber"><br>
            <label style="color: black" for="">Favorite Icecream flavor</label>
            <select name="flavor" id="">
                <option value="Apple">Apple</option>
                <option value="Bacon">Bacon</option>
                <option value="Banana">Banana</option>
                <option value="Beer">Beer</option>
                <option value="Cake">Cake</option>
                <option value="Cheese">Cheese</option>
                <option value="Cherry">Cherry</option>
                <option value="Chocolate">Chocolate</option>
                <option value="Coffee">Coffee</option>
                <option value="Crab">Crab</option>
                <option value="Grape">Grape</option>
                
            </select><br>
            <label style="color: black" for="">Address</label>
                <input type="text" name="address"id="address">
            <label style="color: black" for="">Home District <span style="color: rgb(255, 0, 0);">*</span></label>
            <select name="district">
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
            <input type="submit" value="Update">

        </form>

            </div>
        </div>
    </div>

    
						

					</td>
				</tr>

			<?php } ?>

			</table>

			<a class="btn btn-success mb-5" href="index.php">Back to Form</a>

		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#departments').val(data[3]);
                $('#roll').val(data[4]);
                
                $('#email').val(data[6]);
                $('#mnumber').val(data[7]);
                $('#flavor').val(data[8]);
                $('#address').val(data[9]);
                $('#district').val(data[10]);
            });
        });
    </script>

<script>
        document.getElementById('sweetalert').addEventListener('click', function () {
            Swal.fire('How is it going?');
        })
    </script>
<!-- <script>
        $(document).ready(function () {
            $("#myBtn").click(function () {
                $("#myModal").modal();
            });
        });
    </script> -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>