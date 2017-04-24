<!DOCTYPE html> 
<head>
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <meta charset="utf-8"> 
    <style> 
	#qwert{margin:0 auto;} 
	*{ 
	    margin:0; 
	    padding:0; 
	} 
	body{overflow-x:hidden;} 
	h2{ 
	    text-align:center; 
	    font-family: 'Lobster', cursive; 
	    font-size: 50px; 
	    margin-top:20px; 
	    margin-bottom:20px; 
	} 
	.flex-btn{ 
	    overflow:hidden; 
	    width:75%; 
	    margin:0 auto; 
	} 
	.flex-btn> li{ 
	    border-right:10px solid white; 
	    box-sizing:border-box; 
	    width: calc(100% / 3); 
	    height:50px; 
	    background-color:tomato; 
	    float:left; 
	    margin-left:20px; 
	    text-align:center; 
	    text-decoration:none; 
	    list-style:none; 
	    color:white; 
	    margin:0 auto; 
	} 
	.flex-btn> li a{ 
	    color:white; 
	    line-height:50px; 
	    text-decoration:none; 
	} 
	.wrapper-content{ 
	    margin:20px 0; 
	    width:100%; 
	    border:1px solid; 
	    overflow:hidden; 
	} 
	.lsb,.rsb{ 
	    width:20%; 
	    min-height:500px; 
	    background-color:red; 

	} 
	.lsb{float:left;} 
	.rsb{float:right;} 
	.block-content{width:58%;float:left; padding:0px;text-align:center;padding:10px;overflow:hidden;} 
	footer{ 
	    clear:both; 
	} 
    </style> 
</head> 
<body> 
    <div class="wrapper-site"> 
	<div class="wrapper-header-logo"> 
	    <h2>Форсаж7</h2> 
	</div> 
	<div class="wrapper-nav-top"> 
	    <ul class='flex-btn'> 
		<li><a href="/">Главная</a></li> 
		<li><a href="/actors/">Актеры</a></li>
		<li><a href="/films/">Фильмы</a></li>
	    </ul> 
	</div> 
	<div class="wrapper-content"> 
	    <div class="lsb"></div> 
	    <div class="block-content"><?php include_once $content_view ?></div>
	    <div class="rsb"></div> 
	</div> 
	<footer> 
	    <p style="text-align:center">PHP 16-3 c</p> 
	</footer> 
    </div> 
</body> 
</html>
