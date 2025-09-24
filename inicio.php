

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitalidad Juvenil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="Logo.png.png">
    <style>
        body {
            background-color: #2e6b56;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .center-content {
            text-align: center;
        }

        .btn-custom {
            background: linear-gradient(90deg,  #1accc3ff,  #1accc3ff);
            color: white;
            font-weight: bold;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 3px 5px 5px black;
        }

        .btn-custom:hover {
            background-color: #1dcec5ff;
            transform: scale(1.1);
            box-shadow: 20px 10px 20px rgba(45, 248, 4, 0.88);
        }

        .btn-custom:active {
            transform: scale(0.95);
        }

        .logo {
            margin-bottom: 20px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }


        .modal-title {
            box-shadow: 3px 4px 4px aqua;
        }

        .btn-close:focus {
            box-shadow: none;
        }

        .modal-content .btn-custom {
            background: linear-gradient(90deg, #23dad0ff, #1ad8ceff);
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .modal-content .btn-custom:hover {
            background-color: #1accc3ff;
            transform: scale(1.1);
            box-shadow: 20px 10px 20px rgba(70, 241, 3, 0.94);
        }

        .modal-content .btn-custom:active {
            transform: scale(0.95);
        }

        @keyframes sobresalto {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Aplicar la animación al título */
        .titulo-animado {
            animation: sobresalto 1.5s ease-in-out infinite;
            display: inline-block;
            /* Necesario para que el transform funcione correctamente */
        }
    </style>
</head>

<body>
    <div class="container center-content">
        <h1 class="text-white titulo-animado">¡BIENVENIDOS A VITALIDAD JUVENIL!</h1>


        <br>
        <br>
        <img src="logopng.png.300x300_q85_crop.png" alt="Logo" class="logo img-fluid rounded-circle" width="200">
        <br>
        <br>
        <div class="button-group">
            <button type="button" class="btn btn-custom btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</button>
            <a href="Primera.html" class="btn btn-custom btn-lg">Registrarse</a>
        </div>

        <!-- Modal de Iniciar Sesión -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="box-shadow: 5px 7px 5px black;">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><a href="inicio2.php"></a></button>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>