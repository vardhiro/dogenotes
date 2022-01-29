<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family: Ubuntu, Verdana;
        }
        li{
            font-size: 1.25rem;
            text-transform: capitalize;
        }
        a{
            color: blue;
            text-decoration: none;
        }
    </style>
    <?php
    $filename = str_replace("-", " ", $filename);
    ?>
    <title><?php echo $filename; ?> | Dogenotes</title>
</head>
<body>
    <h1><?php echo $filename ?></h1>
    <?php
    $file = str_replace(' ', '-',$filename);
    echo "<a href='../edit/$file'>🖋 Edit this note</a><br>";
    echo "<a href='../delete/$file'>🗑 Delete this note</a><br>";
    ?>
    <?php
        $file = fopen("./notes/$filename.md", "r");
        $content = str_replace("<", "&lt;",fread($file, 20000000));
        $content = str_replace(">", "&gt;",$content);
        require_once('md.php');
        $parsedown = new Parsedown();
    ?>
    <p><?php echo $parsedown->text($content); ?></p>
</body>
</html>
