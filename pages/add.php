<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding a note</title>
</head>
<body>
    <form action="" method="post">
        <h1>Adding new note</h1>
        Title:<br>
        <input type="text" name="title" id="">
        <br><br>
        Content (in markdown):<br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br><br>
        <button>Add</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['title']) && isset($_POST['content']))
{   
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if(!file_exists("./notes/$title.md")){
        $file = fopen("./notes/$title.md", "w");
        fwrite($file, $content);
        fclose($file);
        echo "<script>alert("Note created !")</script>";
    }else{
        echo "<script>alert("Change the title! Note with same title exists")</script>";
    }
}
?>
