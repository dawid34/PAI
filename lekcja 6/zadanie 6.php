<head>
        <title>formularze</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form method="post" action="./zadanie6.php">
        <input type="text" name="imie" />
        <input type="submit" />
    </form>
        <?php
        if(isset($_POST['Siemanoo'])){
           echo "Cześć nazwyam się Dawid" . $_POST['imie'];
        }
        ?>
    </body>
</html>