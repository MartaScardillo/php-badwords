<?php

$text = $_POST['text'];

$replace = $_POST['replace_word'];

$newText = str_replace('Lorem Ipsum', $replace, $text)
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

</head>

<body>
    <div>
        <h1>Testo</h1>
        <p>
            <?php echo $text; ?>
        </p>
        <h2>Lunghezza Testo Originale:
            <?php echo strlen($text) ?>
        </h2>

        <h1>Testo senza parola:</h1>
        <p>
            <span>
                <?php echo $newText; ?>
            </span>
        </p>
        <h2>Lunghezza Testo Cambiato:
            <?php echo strlen($newText) ?>
        </h2>
    </div>

</body>

</html>