<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM info";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Department</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Favorite Icecream Flavor</th>
		<th>Adress</th>
		<th>District</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="20px">'.$row["id"].'</td>
			<td width="10%">'.$row["first_name"].'</td>
			<td width="10%">'.$row["last_name"].'</td>
			<td width="10%">'.$row["department"].'</td>
			<td width="10%">'.$row["gender"].'</td>
			<td width="10%">'.$row["email"].'</td>
			<td width="10%">'.$row["mobilenumber"].'</td>
			<td width="10%">'.$row["favoriteicecreamflavor"].'</td>
			<td width="10%">'.$row["address"].'</td>
			<td width="10%">'.$row["district"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="12" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>