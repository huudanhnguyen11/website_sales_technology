<?php
require('checkUser.php');
include '../../Models/brand_db.php';
if (!isset($_GET['type'])) {
    header('Location: ../Views/Brand');
} else if (isset($_GET['type']) && $_GET['type'] == 'them') {
    if ($_POST['name'] !== '' && $_FILES['brandimg']['tmp_name'] != null) {
        $path = "../Assets/img/";
        $filename = $_FILES['brandimg']['name'];
        $path = $path . $filename;
        $count = insertBrand($_POST['name'], $_POST['description'], $path);
        if ($count > 0) {
            $message = "Create Successful";
            header("Location: ../views/brand?mes=$message");
        } else {
            header('Location: ../views/brand/create.php');
        }
    }
} else if (isset($_GET['type']) && $_GET['type'] == 'sua') {
    $id_update = $_POST['id'];
    $name_update = $_POST['name_update'];
    $des_update = $_POST['description_update'];
    $brandimg = $_POST['brandimg_update'];
    $update_count = updateBrand($id_update, $name_update, $des_update,$brandimg);
    if ($update_count > 0) {
        $message = "Update Successful";
        header("Location: ../views/brand?mes=$message");
    }
} else if (isset($_GET['type']) && $_GET['type'] == 'xoa') {
    $id = $_GET['id'];
    $dele_count = deleteBrand($id);
    if ($dele_count > 0) {
        $message = "Delete Successful";
        header("Location: ../views/brand?mes=$message");
    }
}
