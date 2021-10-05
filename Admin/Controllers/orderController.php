<?php
require('checkUser.php');
include '../../Models/order_db.php';
if (!isset($_GET['type'])) {
    header('Location: ../Views/Order');
} else if (isset($_GET['type']) && $_GET['type'] == 'them') {
    if ($_POST['customerId'] !== '') {
        $count = insertOrder(date("Y-m-d"),$_POST['statusorder'],$_POST['shippingaddress'],$_POST['shippingcity'],$_POST['statuspayment'],$_POST['CustomerId'],$_POST['']);
        if ($count > 0) {
            $message = "Create Successful";
            header("Location: ../views/order?mes=$message");
        } else {
            header('Location: ../views/order/create.php');
        }
    }
} else if (isset($_GET['type']) && $_GET['type'] == 'sua') {
    $id_update = $_POST['id'];
    $status_update = $_POST['statusorder'];
    $payment_update = $_POST['payment'];
    $update_count = updateOrder($id_update,$status_update,$payment_update);
    if ($update_count > 0) {
        $message = "Update Successful";
        header("Location: ../views/order?mes=$message");
    }
} else if (isset($_GET['type']) && $_GET['type'] == 'xoa') {
    $id = $_GET['id'];
    $dele_count = deleteOrder($id);
    if ($dele_count > 0) {
        $message = "Delete Successful";
        header("Location: ../views/order?mes=$message");
    }
}