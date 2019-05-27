<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            echo 'Obrigado, ' . $_POST['nome'] . '. ';
            echo 'Sua dúvida junto ao prof(a) ' . $_POST['professor'] . ' logo será atendida.<br>';

            echo '<a href="index.html">Página Inicial</a>';
        ?>
    </body>
</html>