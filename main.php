<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="flex-container">

		<div class = "header">
		<?php include 'menu.inc.php'?>
		<?php include 'logo.inc.php'?>
		</div>

		<div class="aboutMe">

			<h1> <?php echo $greetings?></h1>

			<div class="data">
				<div class="myImg">
					<?php echo '<img src ="img/cat.jpg"';?>
				</div>

				<div class = "fullname">
					<p> Меня зовут 
					<?php
						echo $name . '<br>';
						echo 'город ' . $city;
					?>
					</p>

					<p> Мне
						<?php echo $age ?>
						лет
					</p>
					<p>Мы изучили переменные</p>
					<p>Изучили простые операции с ними, а так же цикл</p>
				</div>
			</div>

			
		
			<div class="knowledge">
				<?php include 'knowledge.inc.php'?>
			</div>
		</div>

		<?php include 'footer.inc.php'?>
	</div>	
</body>
</html>