<?php
include('./controller/employee.controller.php');

$controller = new EmployeeController();
session_start();

$employees = $controller->getEmployees();
?>
<div class="row">
    <div class="col-8">
        <p class="fs-4 m-0">
            Funcionários
        </p>
    </div>
    <div class="col-4 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" id="new_employee">Cadastrar</button>
    </div>
</div>
<hr>
<?php if (isset($_SESSION['message']) && isset($_SESSION['message_type'])) : ?>
<div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['message']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Idade</th>
            <th scope="col">Celular</th>
            <th scope="col">Cargo</th>
            <th scope="col">Data de entrada</th>
            <th scope="col">Data de saída</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach ($employees as $value) {
        ?>
        <tr>
            <th scope="row"><?php echo $count ?></th>
            <td><?php echo $value['id'] ?? 'Não atribuído' ?></td>
            <td><?php echo $value['name'] ?? 'Não informado' ?></td>
            <td><?php echo $value['surname'] ?? 'Não informado' ?></td>
            <td><?php echo $value['age'] ?? 'Não informado' ?></td>
            <td><?php echo $value['phone'] ?? 'Não informado' ?></td>
            <td><?php echo $value['offices_id'] ?? 'Não atribuído' ?></td>
            <td><?php echo $value['entry_date'] ?? 'Não atribuído' ?></td>
            <td><?php echo $value['end_date'] ?? 'Não atribuído' ?></td>
            <td class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-warning btn-sm p-2"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path
                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg></button>
                    <form action="requests.php" method="POST">
                        <button type="submit" class="btn btn-danger btn-sm p-2" name="delete_employee"
                            value="<?php echo $value['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg></button>
                    </form>
                </div>
            </td>
        </tr>
        <?php
            $count++;
        }
        ?>
    </tbody>
</table>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var newEmployeeButton = document.getElementById("new_employee");

    newEmployeeButton.addEventListener("click", function() {
        window.location.href = "view/employee.form.php";
    });
});
</script>