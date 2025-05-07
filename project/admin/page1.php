<?php
include 'member.php';
?>
<html>
<body>

<?php
Echo '<a href=logout.php> || Logout  ||</a>';
echo '<br><Center>';
echo '<H1> Admin Home </H1>';

	echo '<br><H3>';
	echo '<br>';
	Echo '<a href=displayprofessor.php> [ Display Professor ]</a>';
	echo '   ---   |   ---   ';
	Echo '<a href=displayrating.php> [ Ratings ]</a>';
	echo '   ---   |   ---   ';

	Echo '<a href=displaycontact.php> [ ContactUs ]</a>';
	echo '   ---   |   ---   ';
	Echo '<a href=approvecomment.php> [ Approve Comment ]</a>';
	echo '</H3><br>';
	
	
echo '<br></Center>';
?>

</body>
</html>