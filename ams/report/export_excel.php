<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=file.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Fullname</th>
					<th>Modulename</th>
					<th>Datetime</th>
					<th>Status</th>
				</tr>
			<tbody>
	";
	
	$query = $conn->query("SELECT * FROM `compliance_regulatory`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td>".$fetch['cl_id']."</td>
					<td>".$fetch['fullname']."</td>
					<td>".$fetch['modulename']."</td>
					<td>".$fetch['xdatetime']."</td>
					<td>".$fetch['xstat']."</td>
				</tr>
	";
	}
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>