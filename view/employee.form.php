<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ML - Gestão de funcionários</title>
    <link href="../assets/css/bootstrap_5.3.2.css" rel="stylesheet" />
</head>

<body>
    <div class="bg-body-tertiary p-3">
        <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg></button>
        <span class="ms-3">Cadastro de funcionário</span>
    </div>
    <div class="container pt-5">
        <p class="fs-4 mb-5">Cadastro de funcionário</p>
        <form method="POST" action="../requests.php">
            <div class="col-4 mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-4 mb-3">
                <label for="surname" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="surname">
            </div>
            <div class="col-2 mb-3">
                <label for="age" class="form-label">Idade</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="col-4 mb-3">
                <label for="phone" class="form-label">Celular</label>
                <input type="number" class="form-control" name="phone">
            </div>
            <div class="col-4 mb-5">
                <label for="office" class="form-label">Cargo</label>
                <select name="offices_id" class="form-select" aria-label="Default select example">
                    <option selected value="1">Desenvolvedor</option>
                    <option value="2">Analista</option>
                    <option value="3">Design</option>
                </select>
            </div>
            <div></div>
            <button type="submit" class="btn btn-primary" name="save_employee">Submit</button>
        </form>
    </div>

    <script src="./assets/js/bootstrap_5.3.2.js"></script>
</body>

</html>