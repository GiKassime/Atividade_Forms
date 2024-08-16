<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exemplo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <main>

        <form action="processa_formulario.php" method="POST">
            
            <h3>Cadastre-se</h3>
            <?php if(isset($_SESSION['msg'])): ?>
                <div class="error">
                    <?= $_SESSION['msg'] ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" >
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>

            <div class="form-group">
                <label>Habilidades:</label>

                <label for="html">
                    <input type="checkbox" id="html" name="habilidades" value="HTML">HTML
                </label>

                <label for="css">
                    <input type="checkbox" id="css" name="habilidades" value="CSS">CSS
                </label>
    
                <label for="javascript">
                    <input type="checkbox" id="javascript" name="habilidades" value="JavaScript">JavaScript
                </label>
    
                <label for="php">
                    <input type="checkbox" id="php" name="habilidades" value="PHP">PHP
                </label>
                
            </div>


            <div class="form-group">
                <label for="pais">País:</label>
                <select id="pais" name="pais">
                    <option value="br">Brasil</option>
                    <option value="us">Estados Unidos</option>
                    <option value="in">Índia</option>
                    <option value="de">Alemanha</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>

            <div class="form-group">
                <label for="curriculo">Upload de Currículo:</label>
                <input type="file" id="curriculo" name="curriculo" >
            </div>

            <div class="form-group">
                <label for="comentarios">Comentários:</label><br>
                <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>

        </form>

    </main>
</body>

</html>