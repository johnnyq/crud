<?php 
	
	include "config.php";
	include "includes/header.php"; 
	include "includes/check_login.php";
	include "includes/nav.php";
	
	$sql = mysqli_query($mysqli,"SELECT * FROM users");
	
	$total_found_rows = mysqli_num_rows($sql);

?>

<div id="response"></div>

<?php

if($total_found_rows > 0) { 

?>
<div class="table-responsive">
	<table class="table table-bordered table-hover">	
	    <thead>	
	        <tr>	
	            <th>Name</th>
	            <th>Email</th>
	            <th>Phone</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
		</thead>
	    <tbody>
			
	        <?php

				while($row = mysqli_fetch_array($sql)){
	                $user_id = $row['user_id'];
	                $first_name = $row['first_name'];
	                $last_name = $row['last_name'];
	                $email = $row['email'];
	                $phone = $row['phone'];
	                if(strlen($phone)>2){ $phone = substr($row['phone'],0,3)."-".substr($row['phone'],3,3)."-".substr($row['phone'],6,4);}
	                $user_created = date($config_date_format,$row['user_created']);               
	                echo "
						<tr>
							<td>$first_name $last_name</td>
							<td>$email</td>
							<td>$phone</td>
							<td>$user_created</td>
							<td>
								<div class='btn-group'>
								    <a class='btn btn-default' href='edit_user.php?user_id=$user_id'><span class='glyphicon glyphicon-pencil'></span></a>
	                                <button class='btn btn-default delete_user' id='$user_id'><span class='glyphicon glyphicon-remove'></span></button>
	                                <a class='btn btn-default' href='user_details.php?user_id=$user_id'><span class='glyphicon glyphicon-eye-open'></span></a>
	                            </div>
							</td>
						</tr>
					";
				}
			?>
		
	    </tbody>
	</table>
</div>

<?php

	}else{
		echo "<div class='alert alert-warning'>No records found.</div>";
	}

include "includes/footer.php";

?>