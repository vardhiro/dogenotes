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
    <title>Home | Dogenotes</title>
</head>
<body>
    <h1>All notes</h1>
    <a href='add/new'>+ Add a note</a>
    <?php
        $notes = scandir("./notes");
        sort($notes, SORT_STRING);
        echo "<ol>";
        foreach($notes as $note)
        {
            if($note  == ".." || $note == ".")
            {
                echo "";
            }else{
                $note = str_replace(".md","",$note);
                $filename = str_replace(" ", "-", $note);
                echo "<li>$note <br>
                <br><a href='view/$filename'>📜 View this note</a><br><a href='edit/$filename'>🖋 Edit this note</a> <br><a href='delete/$filename'>🗑 Delete this note</a></li>";
            }
        }
        echo "</ol>";
    ?>
</body>
</html>