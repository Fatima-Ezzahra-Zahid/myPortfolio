<?php 
include 'includes/head.php';
	if(isset($_GET['id_c']))
	{
		$stmt_select=$db->prepare('SELECT * FROM projects WHERE id_pro=:uid');
		$stmt_select->execute(array(':uid'=>$_GET['id_c']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("assets/img/".$imgRow['pict']);
		$stmt_delete=$db->prepare('DELETE FROM projects WHERE id_pro=:uid');
		$stmt_delete->bindParam(':uid', $_GET['id_c']);
		if($stmt_delete->execute())
		{
			?>
			<script>
			alert("You are deleted one item");
			window.location.href=('projects.php');
			</script>
			<?php 
		}else 

		?>
			<script>
			// alert("Can not delete item");
			// window.location.href=('projects.php');
			</script>
			<?php 

	}

	?>