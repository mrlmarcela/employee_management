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
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-x-circle text-danger mb-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>

            <div>
                <p class="fs-4 text-center mb-4">Houve um erro e infelizmente não foi possível realizar a ação.</p>
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