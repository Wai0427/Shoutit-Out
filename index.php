<?php include 'database.php';

?>

<?php 
 $query = "SELECT * FROM shouts ORDER BY id DESC";
 $shouts = mysqli_query($connect, $query);

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SHOUT IT!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
	<div id="container">
		<header>
			<h1>SHOUT IT! Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
					<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?></li>
				<?php endwhile ; ?>

				<!-- <li class="shout"><span>11:30AM - </span>Wai: 还没起来吗？我现在去吃东西咯，你起来了跟我说 我吃了就出发去找你噢~ </li>
				<li class="shout"><span>12:11PM - </span>KBing: 你出门了？不用来找我噢 我等下跟我室友出去吃 </li>
				<li class="shout"><span>12:13PM - </span>KBing: Missed voice call. . . </li>
				<li class="shout"><span>12:29PM - </span>Wai: 我要到了，我不方便接电话  等下我载你们过去吧我顺便去逛街 </li>
				<li class="shout"><span>12:40PM - </span>KBing: Kayyy, 酱等你来 小心驾车 </li> -->
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div class="error">
					<strong><?php echo $_GET['error']; ?> !<strong>
				</div>
			<?php endif; ?>

			<form action="process.php" method="post">
				<input type="text" name="user" placeholder="Enter your name here">
				<input type="text" name="message" placeholder="Enter message here">
				<br>
				<input class="shout-btn" type="submit" name="submit" value="Shout It Out">
			</form>
		</div>



	</div>
	
</body>
</html>