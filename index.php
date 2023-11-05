<?php
include('db.php');

$sql = file_get_contents('./sql/install.sql');
$DB->multi_query($sql);
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ML - Gestão de funcionários</title>
    <link href="./assets/css/bootstrap_5.3.2.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home"><img src="./assets/images/logo.svg" width="32" height="32"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_REQUEST['page'] === 'home' || empty($_REQUEST['page'])) ? 'active' : ''; ?>"
                            href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_REQUEST['page'] === 'employee') ? 'active' : ''; ?>"
                            href="?page=employee">Funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_REQUEST['page'] === 'offices') ? 'active' : ''; ?>"
                            href="?page=offices">Cargos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($_REQUEST['page'] === 'skills') ? 'active' : ''; ?>"
                            href="?page=skills">Habilidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?php
        switch (@$_REQUEST['page']) {

            case 'home':
                include('./view/home.view.php');
                break;
            case 'employee':
                include('./view/employee.view.php');
                break;
            case 'offices':
                include('./view/offices.view.php');
                break;
            case 'skills':
                include('./view/skills.view.php');
                break;
            case 'success':
                include('./success.php');
                break;
            case 'error':
                include('./error.php');
                break;
            default:
                include('./view/home.view.php');
                break;
        }
        ?>
    </div>
    <script src="./assets/js/bootstrap_5.3.2.js"></script>
</body>

</html>