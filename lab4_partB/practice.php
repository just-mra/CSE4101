<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Practice</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
	<button class="btn btn-warning" data-toggle="modal" data-target="#Registration">Registration</button>

	<!--Registration Modal-->
    <div class="modal" id="Registration">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="text-dark">Registration Form</h3>
          </div>
          <div class="modal-body">
          <p id="message" class="text-dark"></p>
            <form>
              <input type="text" class="form-control my-2" placeholder="User Name" id="UserName">
              <input type="email" class="form-control my-2" placeholder="User Email" id="UserEmail">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btn_register">Register Now</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>