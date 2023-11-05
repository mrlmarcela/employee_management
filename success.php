<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ML - Gestão de funcionários</title>
    <link href="../assets/css/bootstrap_5.3.2.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex justify-content-center align-items-center mt-5 pt-5">
        <div>
            <div class="d-flex justify-content-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-check2-circle text-primary" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                </svg>
            </div>

            <div>
                <p class="fs-4 text-center mb-5">Ação realizada com sucesso!</p>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" id="home">Voltar para home</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var newEmployeeButton = document.getElementById("home");

            newEmployeeButton.addEventListener("click", function() {
                window.location.href = "index.php";
            });
        });
    </script>
</body>

</html>