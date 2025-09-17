<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Notas</title>
    <style>
        body {
            margin: 20px;
        }

        .note-card {
            margin-bottom: 20px;
        }

        #noteInput {
            background-color: #daa9a9;
        }
    </style>
</head>

<style>
    body {
        background: linear-gradient(to right, #daa9a9, #ce79d7);
        margin: 20px;
        background-image: url(https://4kwallpapers.com/images/wallpapers/blue-sky-half-moon-crescent-moon-clouds-star-trails-5k-1920x1080-8404.png);
        background-size: 100%;
    }

    #regreso {
        width: 12px;
        height: 5px;
    }

    /* Canvas para la lluvia */
    #rainCanvas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 9999;
    }

    .container-fluid{
        border-radius: 30%;
    }

    
</style>

<body>
    <!-- Canvas de lluvia -->
    <canvas id="rainCanvas"></canvas>

    <div class="container-fluid">
        <h1 class="text-center py-4"
            style="margin-top: 50px;  margin-bottom: 50px; background-color: #ce79d7; height: 100px; width: 100%; ">
            Gestor de Notas</h1>
        <div class="mb-4">
            <textarea id="noteInput" class="form-control" rows="4" placeholder="Escribe tu nota aquí..."></textarea>
            <br>
            <br>
            <center><button id="saveNoteBtn" class="btn btn-primary mt-2">Guardar Nota</button></center>
            <br>
        </div>
        <center>
            <h2 class="text-center py-4"
                style="margin-top: 50px; margin-bottom: 50px; background-color: #ce79d7; height: 100px; width: 100%;">Notas
                Guardadas</h2>
        </center>
        <div id="notesList"><!-- Las notas guardadas aparecerán aquí --></div>
    </div>
    <br>
    <center>
    <button onclick="window.location.href='pantallainicial.php'" 
            class="btn btn-primary mt-2" 
            style="background-color: #406ac5ff;">
        REGRESAR
    </button>
</center>


    <script>
        // ====== Efecto de lluvia ====== //
        const canvas = document.getElementById("rainCanvas");
        const ctx = canvas.getContext("2d");

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const drops = [];
        const numDrops = 150;

        class Drop {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.length = Math.random() * 20 + 10;
                this.speed = Math.random() * 5 + 2;
            }

            fall() {
                this.y += this.speed;
                if (this.y > canvas.height) {
                    this.y = -this.length;
                    this.x = Math.random() * canvas.width;
                }
            }

            draw() {
                ctx.beginPath();
                ctx.strokeStyle = "rgba(174,194,224,0.6)";
                ctx.lineWidth = 1;
                ctx.moveTo(this.x, this.y);
                ctx.lineTo(this.x, this.y + this.length);
                ctx.stroke();
            }
        }

        for (let i = 0; i < numDrops; i++) {
            drops.push(new Drop());
        }

        function animateRain() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let drop of drops) {
                drop.fall();
                drop.draw();
            }
            requestAnimationFrame(animateRain);
        }

        animateRain();

        window.addEventListener("resize", () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });

        // ====== Código de notas ======
        const saveNoteBtn = document.getElementById('saveNoteBtn');
        const noteInput = document.getElementById('noteInput');
        const notesList = document.getElementById('notesList');
        let notes = JSON.parse(localStorage.getItem('notes')) || [];

        function displayNotes() {
            notesList.innerHTML = '';
            notes.forEach((note, index) => {
                const noteCard = `<div class="card note-card"><div class="card-body"><p>${note}</p><button class="btn btn-danger btn-sm" onclick="deleteNote(${index})">Eliminar</button></div></div>`;
                notesList.innerHTML += noteCard;
            });
        }

        function saveNote() {
            const noteText = noteInput.value.trim();

            if (noteText) {
                notes.push(noteText);
                localStorage.setItem('notes', JSON.stringify(notes));
                noteInput.value = '';
                displayNotes();
            }
        }

        function deleteNote(index) {
            notes.splice(index, 1);
            localStorage.setItem('notes', JSON.stringify(notes));
            displayNotes();
        }

        saveNoteBtn.addEventListener('click', saveNote);
        displayNotes();
    </script>
</body>

</html>
