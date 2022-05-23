<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Table</title>
</head>
<body>

<h1>LAB - 4</h1>
















<table class = "table table-bordered text-center table-light table-hover" >
        <thead>
        <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Roll</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Icecream Flavour</th>
                    <th>Address</th>
                    <th>District</th>
                    <th colspan="2">Action</th>


                    
                </tr>

        </thead>

            <?php
                
                include('connect.php');

                $sql = "SELECT * FROM form";
                $result = $conn->query($sql);
                
                
                if ($result->num_rows > 0) {
                    // output data of each row
                
                    while($row = $result->fetch_assoc()) {
                        echo"<tr>";
                        echo "<td align=right>". $row["id"]. "</td>".
                            "<td>". $row["fname"]. "</td>" .
                            "<td>". $row["lname"] . "</td>".
                            "<td>". $row["dept"] . "</td>".
                            "<td>". $row["roll"] . "</td>".
                            "<td>". $row["gender"] . "</td>".
                            "<td>". $row["email"] . "</td>".
                            "<td>". $row["phone"] . "</td>".
                            "<td>". $row["fvice"] . "</td>".
                            "<td>". $row["address"] . "</td>".                   
                            "<td>". $row["district"] . "</td>". 
                            "<td>"?> <button type="button" class="btn btn-success btn-sm editbtn"> Edit</button>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm deletebtn"> DELETE </button>
                          </td>
                          
                         <?php "</td>";
                        echo"</tr>";
                    }
                } else {
                    echo "0 results";
                }


            ?>
                
            </table>


            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-danger"> Delete </button>
                    </div>
                </form>

            </div>
        </div>
    </div>




    




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

                <div class="lform-modal">

        <form action="update.php" method="post">
        <input type="hidden" name="update_id" id="update_id">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname">

          <label for="dept">Department</label>
          <select id="dept" name="dept">
            <option disabled selected>Select Department</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="IPE">IPE</option>
            <option value="ChE">ChE</option>
            <option value="BME">BME</option>
            <option value="PME">PME</option>
            <option value="TE">TE</option>
          </select>



          <label for="roll">Roll</label>
          <input type="text" id="roll" name="roll" >

          <label for="gender">Gender</label> <br>

          <div class="rbutton">


            <input type="radio" id="male" name="gender" value="Male" >
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female" >
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other" >
            <label for="other">Other</label> <br>

          </div>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" >

          <label for="phone">Mobile Number</label>
          <input type="text" id="phone" name="phone" >

          <label for="fvice">Favorite Icecream Flavor </label>

          <div class="rbutton">
            <input type="checkbox" id="chocolate" name="fvice[]" value="Chocolate">
            <label for="fvice">Chocolate </label><br>
            <input type="checkbox" id="vanilla" name="fvice[]" value="Vanilla">
            <label for="fvice">Vanilla </label><br>
            <input type="checkbox" id="neapolitan" name="fvice[]" value="Neapolitan">
            <label for="fvice">Neapolitan </label><br>
            <input type="checkbox" id="banana" name="fvice[]" value="Banana">
            <label for="fvice">Banana </label><br>
            <input type="checkbox" id="toffee" name="fvice[]" value="Toffee">
            <label for="fvice">Toffee </label><br>
          </div>
          
 
        
        




          <label for="address">Address</label>
          <input type="text" id="address" name="address" >
          


      
          <label for="district">Home District</label>
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
          </select>
         
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

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
                $('#dept').val(data[3]);
                $('#roll').val(data[4]);
                
                $('#email').val(data[6]);
                $('#phone').val(data[7]);

                $('#address').val(data[9]);
                $('#district').val(data[10]);

                if (data[5] == "Male") {
                    document.getElementById("male").checked="True";
                    
                }
                if (data[5] == "Female")  {
                    document.getElementById("female").checked="True";
                }
                if (data[5] == "Other")  {
                    document.getElementById("other").checked="True";
                }

                if (data[8].match("Chocolate")=="Chocolate") {
                    document.getElementById("chocolate").checked="True";
                }
                if (data[8].match("Vanilla")=="Vanilla") {
                    document.getElementById("vanilla").checked="True";
                }
                if (data[8].match("Neapolitan")=="Neapolitan") {
                    document.getElementById("neapolitan").checked="True";
                }
                if (data[8].match("Banana")=="Banana") {
                    document.getElementById("banana").checked="True";
                }
                if (data[8].match("Toffee")=="Toffee") {
                    document.getElementById("toffee").checked="True";
                }

               

            });










        });




    </script>




<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>




          




</body>
</html>