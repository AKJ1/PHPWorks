<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>generator of sidebars</title>
        <style type="text/css">

        h4	{
        	text-align:center;
        }
		div{
			width: 150px;
			
			border-radius: 10px;
			border: 2px solid black;
			background: linear-gradient(to top, rgb(200,200,255) 0%, rgb(200,200,255) 50%, rgb(240,240,255) 100%);
		}
		li{
			color: black;
			list-style-type: circle;
		}
        </style>
    </head>
    <body>
        <form method="post">
        	Categories: <input type="text" name="categories">
        	Tags: <input type="text" name="tags">
        	Months: <input type="text" name="months">
        	<button type="submit">Submit!</button>
			<?php if (!empty($_POST['tags']) || !empty($_POST['categories']) || !empty($_POST['months'])) {
				$categories = explode(", ", $_POST['categories']);
				$tags = explode(", ",$_POST['tags']);
				$months = explode(", ",$_POST['months']);

			?>
        	<div>
        	
        		<h4>Categories</h4>
        		<hr>
        		<ul>
        		<?php foreach ($categories as $key => $value) {
        		# code...
        	?>
        			<li><a href=""> <?php echo $value; ?></a></li>

        		<?php } ?>
        		</ul>
        	</div>
        	<div>
        	
        		<h4>Tags</h4>
				<hr>
        		<ul>
        		<?php foreach ($tags as $key => $value) {
        		# code...
        	?>
        			<li><a href=""> <?php echo $value; ?></a></li>

        		<?php } ?>
        		</ul>
        	</div>
        	<div>
        	
        		<h4>Months</h4>
        		<hr>
        		<ul>
        		<?php foreach ($months as $key => $value) {
        		# code...
        	?>
        			<li><a href=""> <?php echo $value; ?></a></li>

        		<?php } ?>
        		</ul>
        	</div>
        	<?php } ?>
        </form>
    </body>
</html>