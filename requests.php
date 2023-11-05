<?php
include('./controller/employee.controller.php');

$controller = new EmployeeController();

if (isset($_POST['save_employee'])) {
    $employees = $controller->addEmployee($_POST);

    if ($employees) {
        header("Location: index.php?page=success");
        exit;
    }

    header("Location: index.php?page=error");
    exit;
}

if (isset($_POST['delete_employee'])) {
    $employees = $controller->removeEmployee($_POST['delete_employee']);

    if ($employees) {
        session_start();

        $_SESSION['message'] = 'Usuário apagado com sucesso!';

        // Defina o tipo de mensagem (pode ser 'success', 'warning', 'info', 'danger', etc.)
        $_SESSION['message_type'] = 'success';

        header("Location: index.php?page=employee");
        exit();
    }

    header("Location: index.php?page=error");
    exit;
}
