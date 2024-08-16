<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php if(isset($_SESSION['nome']) & isset($_SESSION['email'])): ?>
                <div class="dados">
                    <p><?= $_SESSION['nome'] ?></p>
                    <p><?= $_SESSION['email'] ?></p>
                    
                </div>
            <?php endif ?>
</body>
</html>