<?php 
	
	include "config.php";
	include "includes/header.php"; 
	include "includes/check_login.php";
	include "includes/nav.php";

?>
	<div class="jumbotron">
	  This is a simple CRUD with login AUTH application written in procedural PHP, mysqli, bootstrap, and jquery. This app has the following features:
	  <ul>
	  	<li>CRUD Create Update and Delete Records</li>
	  	<li>Pagination</li>
	  	<li>Search fucntionality</li>
	  	<li>Configurable Variables in config.php which includes date time format, app name, max records per pafe</li>
	  	<li>Authentication System</li>
	  </ul>
	  Work in progress
	  <ul>
	  	<li>Password Crypting</li>
	  	<li>Forgot password with email link</li>
	  	<li>user registration</li>
	  	<li><s>advanced search(search by dates)</s> -6-5-2016</li>
	  	<li>export to xls, csv, pdf and print</li>
	  	<li><s>define max records shown per page in config.php</s></li>
	  	<li>elimate unused bootstrap js code.</li> 
	  	<li><s>Enhance Delete</s></li>
	  	<li>Give the option to use a page or a modal in edit view or add</li>
	  	<li>create simple dashboard (Users logged in, Total Users, Users added by Month, Top 10 users recently updated, 10 newest users.)</li>
	  	<li>Integrate Facebook time</li>
	  	<li>Fix problem with Google chrom not displaying bootstrap alerts</li>
	  	<li><s>Expand Fields, phone, firstname, lastname</s> -6-6-2016</li>
	  	<li><s>Concat first and lastname so a search can be done using both</s> -6-6-2016</li>
	  	<li><s>Format phone number during input and edit and view</s> -6-6-2016</li>
	  	<li>Sortby field in advanced users</li>
	  	<li>Selectable number of records per page in advanced users</li>
	  	<li>Create a relational table to users possibly</li>
	  	<li>Add upload image User Avatar, need to find an ajax fix for files</li>
	  	<li><s>Show number of records returned</s> -6-5-2016</li>
	  	<li><s>Create several list users simple medium and advanced</s> -6-5-2016</li>
	  	<li><s>Rename variables q to query and p to page to make it easier to read in the URI</s> -6-5-2016</li>
	  	<li><s>Use jquery for top nav active instead of php if conditions</s></li>
	  	<li>Fix issue under users advanced if you click a canned date the URI doesnt reflect the datefrom and dateto until you submit again</li>
	  	<li>Add animation to slowly fade alerts</li>
	  	<li>Create Permission system</li>
	  	<li>create logging system</li>
	  	<li>Create Extra Field a check box radio selection, and Select drop down</li>
	  </ul>
	</div>

<?php include "includes/footer.php"; ?>