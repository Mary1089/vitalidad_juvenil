<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(https://img.freepik.com/premium-photo/creative-illustration-showing-brain-against-colorful-background-leaves-intricate-designs_732812-11265.jpg?w=1920);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            background-size: cover;
            background-color: #f0f0f0;
        }


        h1 {
            font-size: 48px;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
            animation: bounceIn 2s ease-out;
            /* Aplica la animación */
            color: white;
            /* lo puse blanco para que resalte en el fondo */
        }

        /* Definimos la animación */
        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
        }


        .logo {
            width: 150px;
            height: auto;
            margin: 20px 0;
        }

        .button-group {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn-custom {
            background-color: #000000ff;
            color: white;
            border: none;
            padding: 15px 25px;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;

            /* Animación lenta aplicada al texto */
            animation: floatText 4s ease-in-out infinite;
        }

        /* Animación de movimiento vertical */
        @keyframes floatText {

            0%,
            100% {
                transform: translateY(0);
                /* posición normal */
            }

            50% {
                transform: translateY(-20px);
                /* sube un poco */
            }
        }


        .btn-custom:hover {
            background-color: #17bda7ff;
            transform: scale(1.1);
            box-shadow: 20px 10px 20px rgba(10, 206, 26, 0.88);
        }

        .btn-custom:active {
            transform: scale(0.98);
        }

        .notes-btn {
            background: linear-gradient(90deg, #FFC107, #FF9800);
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .notes-btn:hover {
            background-color: #FFC107;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .notes-section {
            display: flex;
            align-items: center;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-left: 10px;
            /* Espaciado entre el botón y la imagen */
            color: #fff;
        }

        .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
            /* Espaciado entre la imagen y el nombre */
        }

        .social-icons {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-icons a {
            font-size: 24px;
            color: #333;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.3);
            color: #6d6ba7;
        }
    </style>
</head>

<body>

    <div class="notes-section">
        <a href="notas.php"><button class="notes-btn">TUS NOTAS</button></a>
        <div class="user-info">
            <img src="" alt="Foto de perfil" id="userImage">
            <h5 id="userName">Usuario</h5>
        </div>
    </div>

    <h1>VITALIDAD JUVENIL</h1>


    <img src="logopng.png.300x300_q85_crop.png" alt="Logo" class="logo img-fluid rounded-circle" width="200">


    <div class="button-group">
        <a href="salud_mental.php" class="btn btn-custom">SALUD MENTAL</a>
        <a href="higiene_personal.php" class="btn btn-custom">HIGIENE PERSONAL</a>
        <a href="higiene_sueno.php" class="btn btn-custom">HIGIENE DEL SUEÑO</a>
        <a href="habitos_alimenticios.php" class="btn btn-custom">HÁBITOS ALIMENTICIOS</a>
    </div>

    <a href="conocenos.html" class="btn btn-custom mt-4">CONÓCENOS</a>


    <div class="social-icons">
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
    </div>


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        window.onload = function() {
            const nombre = localStorage.getItem("nombre");
            const profilePic = localStorage.getItem("profilePic");

            if (nombre) document.getElementById("userName").innerText = nombre;
            if (profilePic) {
                const img = document.getElementById("userImage");
                img.src = profilePic;
                img.style.borderRadius = "50%";
                img.style.width = "50px";
                img.style.height = "50px";
            }
        };
    </script>
</body>

</html>