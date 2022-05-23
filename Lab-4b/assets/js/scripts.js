
function all() 
{
	// Ajax config
	$.ajax({
        type: "GET", //we are using GET method to get all record from the server
        url: 'all.php', // get the route value
        success: function (response) {//once the request successfully process to the server side it will return result here
            
            // Parse the json result
        	response = JSON.parse(response);

            var html = "";
            if(response.length) {
	            $.each(response, function(key,value) {
					html += '<tr>';
					html += "<td>"+value.fname+' '+value.lname+"</td>";
					html += "<td>"+value.dept+"</td>";
					html += "<td>"+value.roll+"</td>";
					html += "<td>"+value.gender+"</td>";
					html += "<td>"+value.email+"</td>";
					html += "<td>"+value.phone+"</td>";
					html += "<td>"+value.flavour+"</td>";
					html += "<td>"+value.address+', '+value.district+"</td>";
					html += "<td>";
					html += "<button class='btn btn-sm btn-primary mt-2' data-toggle='modal' data-target='#edit-employee-modal' data-id='"+value.id+"'>Edit</button>";
					html += "<button class='btn btn-sm btn-danger ml-2 mt-2' onclick='delete_user("+value.id+")'>"+value.id+"</button>";
					html += "</td>";
					html+='</tr>';
	            });
				
	           // html += '</div>';
            } else {
            	html += '<div class="alert alert-warning">';
				  html += 'No records found!';
				html += '</div>';
            }

            

            // Insert the HTML Template and display all employee records
			$("#user-list").html(html);
        }
    });
}

function save() 
{
	$("#btnSubmit").on("click", function() {
		var $this 		    = $(this); //submit button selector using ID
        var $caption        = $this.html();// We store the html content of the submit button
        var form 			= "#form"; //defined the #form ID
        var formData        = $(form).serializeArray(); //serialize the form into array
        var route 			= $(form).attr('action'); //get the route using attribute action

        // Ajax config
    	$.ajax({
	        type: "POST", //we are using POST method to submit the data to the server side
	        url: route, // get the route value
	        data: formData, // our serialized array data for server side
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	            $this.attr('disabled', true).html("Processing...");
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
	            $this.attr('disabled', false).html($caption);

	            // Reload lists of User
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);

				// Close modal
	            $('#myModal').modal('hide');
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	// You can put something here if there is an error from submitted request
	        }
	    });
	});
}

function resetForm(selector) 
{
	$(selector)[0].reset();
}


function get() 
{
	$(document).delegate("[data-target='#edit-employee-modal']", "click", function() {

		var userId = $(this).attr('data-id');

		// Ajax config
		$.ajax({
	        type: "GET", //we are using GET method to get data from server side
	        url: 'get.php', // get the route value
	        data: {id:userId}, //set data
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	            
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
	            response = JSON.parse(response);
	            $("#edit-form [name=\"id\"]").val(response.id);
	            $("#edit-form [name=\"email\"]").val(response.email);
	            $("#edit-form [name=\"first_name\"]").val(response.fname);
	            $("#edit-form [name=\"last_name\"]").val(response.lname);
				$("#edit-form [name=\"dept\"]").val(response.dept);
				$("#edit-form [name=\"gender\"]").val(response.gender);
	            $("#edit-form [name=\"address\"]").val(response.address);
				$("#edit-form [name=\"district\"]").val(response.district);
				$("#edit-form [name=\"tel\"]").val(response.phone);
				$("#edit-form [name=\"roll\"]").val(response.roll);
				
	        }
	    });
	});
}

function update() 
{
	$("#btnUpdateSubmit").on("click", function() {
		var $this 		    = $(this); //submit button selector using ID
        var $caption        = $this.html();// We store the html content of the submit button
        var form 			= "#edit-form"; //defined the #form ID
        var formData        = $(form).serializeArray(); //serialize the form into array
        var route 			= $(form).attr('action'); //get the route using attribute action

        // Ajax config
    	$.ajax({
	        type: "POST", //we are using POST method to submit the data to the server side
	        url: route, // get the route value
	        data: formData, // our serialized array data for server side
	        beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
	            $this.attr('disabled', true).html("Processing...");
	        },
	        success: function (response) {//once the request successfully process to the server side it will return result here
	            $this.attr('disabled', false).html($caption);

	            // Reload lists of employees
	            all();

	            // We will display the result using alert
	            alert(response);

	            // Reset form
	            resetForm(form);

	            // Close modal
	            $('#edit-employee-modal').modal('toggle');
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	// You can put something here if there is an error from submitted request
	        }
	    });
	});
}

function delete_user(id)
{
	if(confirm('Are you sure?'))
	{
		$.ajax({
			type:'post',
			url:'delete.php',
			data:{delete_id:id},
			success:function(data){
				$('#delete'+id).hide();
				all();
			}
		});
	}
}

$(document).ready(function() {

	// Get all employee records
	all();

	// Submit form using AJAX To Save Data
	save();

	// Get the data and view to modal
	get();
	 
	// Updating the data
	update();

});