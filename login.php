<?php
	session_start();
	$connect = mysqli_connect("localhost","jinsu","!Cowlstn123",'cyberdb') or die("fail");

	$id=$_GET['id'];
	$pw=$_GET['pw'];

	$query = "select * from member where id='$id'";
	$result = $connect->query($query);

	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		
		if($row['pw']==$pw){
			$_SESSION['userid']=$id;
			if(isset($_SESSION['userid'])){
			?>	<script>
					location.replace("./index2.php");
				</script>
<?php
			}
			else{
				echo "session fail";
			}
		}

		else {
	?>		<script>
				alert("wrong id or wrong password");
				history.back();
			</script>
	<?php
		}

	}
		else{
?>		<script>
			alert("wrong id or wrong password");
			history.back();
		</script>
<?php
	}
?>
