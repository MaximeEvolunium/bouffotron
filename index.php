<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Où est-ce qu’on bouffe à midi ?</title>
<meta name="description" content="Où est-ce qu’on bouffe à midi ?">
<meta name="keywords" content="Où est-ce qu’on bouffe à midi ?">
<link rel="shortcut icon" type="image/x-icon" href="/bouffe/new_cv/img/favico.png">
<link rel="stylesheet" type="text/css" href="/bouffe/style.css">
</head>
<body style="background-image:url(/bouffe/img/bg_<?php echo rand(1,26); ?>.jpg), url(/bouffe/new_cv/img/trame.png);" onClick="window.location.reload( true );">
<div id="wrapper">
<div id="cv">
<h1>Où est-ce qu’on bouffe à midi ?</h1>
<?php
$input = array(
				"Kebab de l'université", 
				"McDo",
				"Quick",
				"Best Bagel",
				"Sushi Shop",
				"PizzaHut",
				"Dominos",
				"Chinois",
				"Foodies",
				"Holly's Diner",
				"MyWok"
				);
$rand_keys = array_rand($input, 2);?>
<p>Ben on a qu’à aller chez <strong><?php echo $input[$rand_keys[0]];?></strong>,<br /> Ou au pire chez <strong><?php echo $input[$rand_keys[1]];?></strong>.</p>
</div>
</div><!-- fin wrapper -->
</body>
</html>
