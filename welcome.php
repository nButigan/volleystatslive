<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dobrodo?li</title>
	<?php
	if(isset($_SESSION['poruka_prijava']) && !empty($_SESSION['poruka_prijava'])):
	?>
	<?php echo $_SESSION['poruka_prijava']; ?></h1>
        <?php $_SESSION['poruka_prijava'] = null; ?>
        <?php endif; ?>
    <style>
html, body {
	margin:0;
	padding:0;
}
body {
	background:#F6F7F8;
}
div#wave {
	
	margin-top:50vh;
	text-align:center;
	width:100%;
	height:100%;
	margin-left: auto;
	margin-right: auto;
    color:	#0a2845;
}
	.dot {
		display:inline-block;
		width:12px;
		height:12px;
		border-radius:50%;
		margin-right:3px;
		background:	#B0C4DE;
		animation: wave 1.3s linear infinite;
}
    .dot:nth-child(2) {
			animation-delay: -1.1s;
		}
		.dot:nth-child(3) {
			animation-delay: -0.9s;
		}
		
@keyframes wave {
	0%, 60%, 100% {
		transform: initial;
	}
	30% {
		transform: translateY(-15px);
	}
}
    </style>
</head>
<body>

    
    <div id="wave">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <h1>Preusmjeravanje</h1>
        </div>

</body>
</html>