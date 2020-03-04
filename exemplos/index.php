<?php

// Definir o meu array associativo $pessoa1;
$pessoa1 = [
    "nome" => "Elizabete Moura",
    "idade" => 48,
    "feminino" => true,
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="pessoa">
		<img src="./img/foto.jpeg" alt="<?=$pessoa1['nome'];?>">
		<div class="dados">
			<div class="info">
				<span>Nome:</span>
				<div><?=$pessoa1['nome'];?></div>
			</div>
			<div class="info">
				<span>Idade:</span>
				<div><?=$pessoa1['idade'];?></div>
			</div>
			<div class="info">
				<span>Sexo:</span>
				<div>
					<?php
						// if ($pessoa1['feminino']) {
						//     echo ("Feminino");
						// } else {
						//     echo ("Masculino");
						// }
					?>

					<?= $pessoa1['feminino'] ? 'Feminino' : 'Masculino' ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
