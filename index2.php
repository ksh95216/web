<?php
	$connect = mysqli_connect('localhost','jinsu','!Cowlstn123','cyberdb') or die ("connect fail");
	$query = "select * from board order by number desc";
	$result = $connect->query($query);
	$total = mysqli_num_rows($result);

	session_start();

	if(isset($_SESSION['userid'])) {
		?>	<script>
				alert("login success");
				location.replace("./index.php");
			</script>
		<br/>
	<?php
		}
		else {
	?>		<button onclick="location.href='./login.php'">login</button>
			<br/>
	<?php	}
	?>

