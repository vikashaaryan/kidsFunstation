<?php
include_once "config/connect.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // ID को सुरक्षित तरीके से प्राप्त करें

    $delete = $connect->query("DELETE FROM session WHERE id = $id");

    if ($delete) {
       redirect("index.php");
    } else {
        header("Location: index.php?msg=error");
    }
} else {
    header("Location: index.php");
}
exit;
