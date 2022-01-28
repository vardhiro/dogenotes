<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $filename = str_replace("-", " ", $filename);
    ?>
    <title>Editing '<?php echo $filename; ?>'' | Dogenotes</title>
</head>
<body>
    <form method="post">
        <h1>Editing '<?php echo $filename ?>'</h1>
        Content: <br>
        <?php
        $file = fopen("./notes/$filename.md","r");
        $content = fread($file, 2000000);
        ?>
        <textarea name="content" id="" cols="30" rows="10"><?php echo $content; ?></textarea>
        <br><br>
        <button>Update</button>
    </form>
</body>
</html> 
<?php
if(isset($_POST['content']))
{
    $content = $_POST['content'];
    $file = fopen("./notes/$filename.md","w");
    fwrite($file, $content);
    echo "<script>alert('Note Updated')</script>";
}
?>