<?php include("inc/login-proc.php"); ?>
<div id='cssmenu'>
<ul>
	<li class='has-sub'><a href='index.php'><span>Map</span></a></li>

		
		<?php if(!$logged_in){ ?>
			<li class='has-sub'><a href='insertdata.php'><span>Insert&nbsp;earthquakes</span></a></li>
			<?php } ?>
		
		<?php if(!$logged_in){ ?>
		<li class='has-sub'><a href='emptydatabase.php'><span>Delete&nbsp;earthquakes</span></a></li>
		    <?php } ?>
		
		<?php if($logged_in){ ?>
		<li class='has-sub'><a href='login-form.php'><span>Login</span></a></li>
			<?php } ?>
		
		
			
		<?php if($logged_in){ ?>
			<li class='has-sub'><a href='register-form.php'><span>Register</span></a></li>
			<?php } ?>
		
		<?php if($logged_in){ ?>
			<li class='has-sub'><a href='logout-form.php'><span>Logout</span></a></li>
			<?php } ?>
		
		<?php if(!$logged_in){ ?>
			<li class='has-sub'><a href='installdb.php'><span>Install&nbsp;database</span></a></li>		<th>
			<?php } ?>
</ul>
</div>