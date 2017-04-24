<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <style>
            label {
                display: block;
                margin: 15px 0;
            }
        </style>
    </head>
    <body>
	<header>
	    Admin`s page
	</header>
	<div>
	    <ul>
		<li><a href="../../../index.php">Home</a></li>
		<li><a href="/admin/actors/">Actors</a></li>
		<li><a href="/admin/films/">Films</a></li>
	    </ul>
	</div>
	<div>
	<?php include_once $content_view ?>
	</div>
	
    </body>
</html>


