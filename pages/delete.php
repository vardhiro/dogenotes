<?php
    $filename = str_replace('-', " ", $filename);
    unlink("notes/$filename.md");
    echo "<script>alert('$filename deleted successfully !')</script>";
?>