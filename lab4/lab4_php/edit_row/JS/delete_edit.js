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
		var error_firstName = '';
		var error_lastName = '';
		if($('#firstName').val() == '')
		{
			error_firstName = 'First Name is required';
			$('#error_firstName').text(error_firstName);
			$('#firstName').css('border-color', '#cc0000');
		}
		else
		{
			error_firstName = '';
			$('#error_firstName').text(error_firstName);
			$('#firstName').css('border-color', '');
		}
		if($('#lastName').val() == '')
		{
			error_lastName = 'Last Name is required';
			$('#error_lastName').text(error_lastName);
			$('#lastName').css('border-color', '#cc0000');
		}
		else
		{
			error_lastName = '';
			$('#error_lastName').text(error_lastName);
			$('#lastName').css('border-color', '');
		}
		
		if(error_firstName != '' || error_lastName != '')
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
				$('#firstName').val(data.firstName);
				$('#lastName').val(data.lastName);
				$('#department').val(data.department);
				$('#gender').val(data.gender);
				$('#email').val(data.email);
				$('#mobilenumber').val(data.mobilenumber);
				$('#faviceflv').val(data.faviceflv);
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
	
	$('#data_delete_con').dialog({
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
						$('#data_delete_con').dialog('close');
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
		$('#data_delete_con').data('id', id).dialog('open');
	});
	
});  