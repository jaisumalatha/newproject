<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<a href="<?php echo base_url();?>student-add" >add</a>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		

		<?php  
      foreach ($stu_data as $stu) {
	$name=$stu['name'];
	$city=$stu['city'];
	$contact_no=$stu['contact_no'];
	?>
		<p><?=$name?></p>
		<p><?=$city?></p>
		<p><?=$contact_no?></p>

	<?php }?>	
</div>

</body>
</html>