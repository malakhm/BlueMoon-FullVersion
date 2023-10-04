<?php

require_once 'connection.php';

if (
        isset($_POST['news_id']) && ($_POST['news_id'] != "") &&
        isset($_POST['title']) && ($_POST['title'] != "") &&
        isset($_POST['content']) && ($_POST['content'] != "")
) {
    $nid = $_POST['news_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (!empty($_FILES['photo']['name'])) {
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $photo);
    }

    $query = "Update news set title='$title', content='$content', photo='$photo' where news_id='$nid'";
    $res = mysqli_query($con, $query);
    if ($res) {
        header("Location:viewBlog.php");
    } else {
        header("Location:blogAdmin.php?news_id=$nid");
    }
}

