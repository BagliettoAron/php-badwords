<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ea veniam velit incidunt soluta dolore placeat nulla sapiente eveniet! Nemo aliquam atque, asperiores labore qui esse dolores eveniet modi vero.';
    $text_length = strlen($text);
    $wordToCensor = $_GET['badWord'];
    $text_explode = explode("", $text);
    $censoredText = str_replace($wordToCensor, "***", $text);
    $censoredText_length = strlen($censoredText);
    ?>

    <p>
        <?php
        echo $text;
        ?>
    </p>

    <p>
        <?php
        echo 'il paragrafo non censurato è lungo ' . $text_length . ' lettere';
        ?>
    </p>

    <p>
        <?php
        echo $censoredText
        ?>
    </p>

    <p>
        <?php
        echo 'il paragrafo censurato è lungo ' . $censoredText_length . ' lettere';
        ?>
    </p>



</body>

</html>