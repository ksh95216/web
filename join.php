<?php
	$connect = mysqli_connect('localhost','jinsu','!Cowlstn123','cyberdb') or die("fail");
	
	$name=$_GET[name];
	$id=$_GET[id];
	$pw=$_GET[pw];

	$query = "insert into member (name,id,pw) values ('$name','$id', '$pw')";

	$result = $connect->query($query);

	if($result) {
	?>	<script>
		alert('가입 되었습니다.');
		location.replace("./index.php");
		</script>
	}
<?php	}
	else{
?>		<script>
			alert("fail");
		</script>
<?php	}
	mysqli_close($connect);
?>

	
