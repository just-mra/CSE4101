<html>  
    <head>  
        <title>PHP Ajax Crud using JQuery UI Dialog Box</title>  
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">PHP Ajax Crud using JQuery UI Dialog</a></h3><br />
			<br />
			<div align="right" style="margin-bottom:5px;">
			<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>
		
		<div id="user_dialog" title="Add Data">
			<form method="post" id="user_form">
				<div class="form-group">
					<label>Enter ID</label>
					<input type="number" name="id" id="id" class="form-control"/>
					<span id="error_id" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter First Name</label>
					<input type="text" name="first_name" id="first_name" class="form-control" required/>
					<span id="error_first_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" required/>
					<span id="error_last_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Department</label>
					<input type="text" name="department" id="department" class="form-control" required/>
					<span id="error_department" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Gender</label>
					<input type="text" name="gender" id="gender" class="form-control" required/>
					<span id="error_gender" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" id="email" class="form-control" required/>
					<span id="error_email" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" name="mobilenumber" id="mobilenumber" class="form-control" required/>
					<span id="error_mobilenumber" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Favorite Icecream Flavor</label>
					<input type="text" name="favoriteicecreamflavor" id="favoriteicecreamflavor" class="form-control" required/>
                </select>
					<span id="error_favoriteicecreamflavor" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" id="address" class="form-control" required/>
					<span id="error_address" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>District</label>
					<input type="text" name="district" id="district" class="form-control" required/>
					<span id="error_last_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>
			</form>
		</div>
		
		<div id="action_alert" title="Action">
			
		</div>
		
		<div id="delete_confirmation" title="Confirmation">
		<p>Are you sure you want to Delete this data?</p>
		</div>
		
    </body>  
</html>  




<script>  
$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	
	$("#user_dialog").dialog({
		autoOpen:false,
		width:400
	});
	
	$('#add').click(function(){
		$('#user_dialog').attr('title', 'Add Data');
		$('#action').val('insert');
		$('#form_action').val('Insert');
		$('#user_form')[0].reset();
		$('#form_action').attr('disabled', false);
		$("#user_dialog").dialog('open');
	});
	
	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var error_first_name = '';
		var error_last_name = '';
		var error_department = '';
		var error_gender = '';
		var error_email = '';
		var error_mobilenumber = '';
		var error_favoriteicecreamflavor = '';
		var error_address = '';
		var error_district = '';
		if($('#first_name').val() == '')
		{
			error_first_name = 'First Name is required';
			$('#error_first_name').text(error_first_name);
			$('#first_name').css('border-color', '#cc0000');
		}
		else
		{
			error_first_name = '';
			$('#error_first_name').text(error_first_name);
			$('#first_name').css('border-color', '');
		}
		if($('#last_name').val() == '')
		{
			error_last_name = 'Last Name is required';
			$('#error_last_name').text(error_last_name);
			$('#last_name').css('border-color', '#cc0000');
		}
		else
		{
			error_last_name = '';
			$('#error_last_name').text(error_last_name);
			$('#last_name').css('border-color', '');
		}
		if($('#department').val() == '')
		{
			error_department = 'Department is required';
			$('#error_department').text(error_first_name);
			$('#department').css('border-color', '#cc0000');
		}
		else
		{
			error_department = '';
			$('#error_department').text(error_gender);
			$('#department').css('border-color', '');
		}
		if($('#gender').val() == '')
		{
			error_gender = 'Gender is required';
			$('#error_gender').text(error_gender);
			$('#gender').css('border-color', '#cc0000');
		}
		else
		{
			error_gender = '';
			$('#error_gender').text(error_gender);
			$('#gender').css('border-color', '');
		}
		if($('#email').val() == '')
		{
			error_gender = 'Email is required';
			$('#error_email').text(error_email);
			$('#email').css('border-color', '#cc0000');
		}
		else
		{
			error_email = '';
			$('#error_email').text(error_email);
			$('#email').css('border-color', '');
		}

		if($('#mobilenumber').val() == '')
		{
			error_mobilenumber = 'Mobile Number is required';
			$('#error_mobilenumber').text(error_mobilenumber);
			$('#mobilenumber').css('border-color', '#cc0000');
		}
		else
		{
			error_mobilenumber = '';
			$('#error_mobilenumber').text(error_mobilenumber);
			$('#mobilenumber').css('border-color', '');
		}

		if($('#favoriteicecreamflavor').val() == '')
		{
			error_favoriteicecreamflavor = 'Favorite Icecream Flavor is required';
			$('#error_favoriteicecreamflavor').text(error_favoriteicecreamflavor);
			$('#favoriteicecreamflavor').css('border-color', '#cc0000');
		}
		else
		{
			error_favoriteicecreamflavor= '';
			$('#error_favoriteicecreamflavor').text(error_favoriteicecreamflavor);
			$('#favoriteicecreamflavor').css('border-color', '');
		}
		
		if($('#district').val() == '')
		{
			error_district = 'District is required';
			$('#error_district').text(error_district);
			$('#district').css('border-color', '#cc0000');
		}
		else
		{
			error_district= '';
			$('#error_district').text(error_district);
			$('#district').css('border-color', '');
		}
		if(error_first_name != '' || error_last_name != '' || error_department != '' || error_gender != '' || error_email != '' || error_mobilenumber != '' || error_favoriteicecreamflavor != '' || error_address != '' || error_district != '')
		{
			return false;
		}
		else
		{
			$('#form_action').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"action.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_dialog').dialog('close');
					$('#action_alert').html(data);
					$('#action_alert').dialog('open');
					load_data();
					$('#form_action').attr('disabled', false);
				}
			});
		}
		
	});
	
	$('#action_alert').dialog({
		autoOpen:false
	});
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('id');
		var action = 'fetch_single';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data)
			{
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('#department').val(data.department);
				$('#gender').val(data.gender);
				$('#email').val(data.email);
				$('#mobilenumber').val(data.mobilenumber);
				$('#favoriteicecreamflavor').val(data.favoriteicecreamflavor);
				$('#address').val(data.address);
				$('#district').val(data.district);
				$('#user_dialog').attr('title', 'Edit Data');
				$('#action').val('update');
				$('#hidden_id').val(id);
				$('#form_action').val('Update');
				$('#user_dialog').dialog('open');
			}
		});
	});
	
	$('#delete_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"action.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#delete_confirmation').dialog('close');
						$('#action_alert').html(data);
						$('#action_alert').dialog('open');
						load_data();
					}
				});
			},
			Cancel : function(){
				$(this).dialog('close');
			}
		}	
	});
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		$('#delete_confirmation').data('id', id).dialog('open');
	});
	
});  
</script>