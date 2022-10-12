<!DOCTYPE html>
<html>

<head>
    <title>
        Proyecto
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" href="js/bootstrap.min.js"></script>
    <script type="text/javascript" href="js/jquery-3.6.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta charset="utf-8">
</head>

<body>
    <div class="loader"></div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tree sort</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Generalidades">Generalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Funcionamiento">Funcionamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Demostracion">Demostración</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 id="Generalidades">Generalidades</h1>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitis</p>
                </div>
            </div>
            <div class="row">
                <h2 id="Funcionamiento">Funcionamiento</h2>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
                        commodi eius esse sint atque, nemo repudiandae distinctio cupiditate veritatis asperiores odit
                        dicta
                        quaerat vero. Fugit, debitisLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        perspiciatis
                        ipsa delectus quos
 </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/n2MLjGeK7qA"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 id="Demostracion">Demostración</h2><br>
                    <form class="row g-3" name="formulario" action="php/generacion.php" enctype="multipart/form-data"
                        method="post" enctype="multipart/form-data" required>
                        <div class="col-12">
                            <select class="form-select" aria-label="Default select example" id="algoritmo"
                                name="algoritmo">
                                <option disabled>Algoritmos de organización</option>
                                <option value="Tree sort">Tree sort</option>
                                <option value="Otro1">Otro 1</option>
                                <option value="Otro2">Otro 1 </option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" require value="aleatorios">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Datos aleatorios
                                </label>
                                <div class="tipo-dato">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault_tipo"
                                            id="flexRadioDefault1_numericos" require value="numerico" disabled>
                                        <label class="form-check-label" for="flexRadioDefault1_numericos">
                                            Datos numéricos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault_tipo"
                                            id="flexRadioDefault2_letras" required value="letras" disabled>
                                        <label class="form-check-label" for="flexRadioDefault2_letras">
                                            Datos texto
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" required value="archivo">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Datos archivo
                                </label>
                            </div>

                            <div class="adjunto">
                                <input type="file" name="adjunto[]" class="form-control" aria-label="file example"
                                    id="adjunto[]" accept=".txt" multiple="" disabled>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="inicio">
                                <select class="form-select" multiple aria-label="multiple select example"
                                    id="numeros_inicio" name="numeros_inicio" required disabled>
                                    <option disabled>Números de datos de inicio</option>
                                    <option value="1000" selected>1000</option>
                                    <option value="2000">2000</option>
                                    <option value="3000">3000</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="otro1">
                                <label for="otro1" class="form-label">Otro:</label>
                                <input type="number" class="form-control" id="otro1" name="otro1" min="1"
                                    pattern="^[0-9]+" aria-describedby="emailHelp" required disabled>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="iteraciones">
                                <label for="Iteraciones" class="form-label">Iteraciones</label>
                                <input type=" number" class="form-control" id="Iteraciones" name="Iteraciones"
                                    aria-describedby="emailHelp" min="1" pattern="^[0-9]+" required disabled>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="avance">
                                <select class="form-select" multiple aria-label="multiple select example"
                                    id="avance_iteracion" name="avance_iteracion" required disabled>
                                    <option disabled>Avance entre iteración</option>
                                    <option value="500" selected> 500</option>
                                    <option value="1000">1000</option>
                                    <option value="2000">2000</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="otro2">
                                <div>
                                    <label for="otro2" class="form-label">Otro:</label>
                                    <input type=" number" class="form-control" id="otro2" name="otro2"
                                        aria-describedby="emailHelp" min="1" pattern="^[0-9]+" required disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <center> <button type="submit" class="btn btn-primary" id="enviar"
                                    name="enviar">Enviar</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div><br>
    </main>

    <script>
    var adjunto = document.getElementById('adjunto[]');
    var dato1 = document.getElementById('flexRadioDefault2_letras');
    var dato2 = document.getElementById('flexRadioDefault1_numericos');
    var otro1 = document.getElementById('otro1');
    var otro2 = document.getElementById('otro2');
    var inicio = document.getElementById('numeros_inicio');
    var iteraciones = document.getElementById('Iteraciones');
    var avance = document.getElementById('avance_iteracion');
    var enviar = document.getElementById('enviar');


    // evento para el input radio del "si"
    document.getElementById('flexRadioDefault2').addEventListener('click', function(e) {
        console.log('Vamos a habilitar el campo para el adjunto');
        adjunto.disabled = false;
        dato1.disabled = true;
        dato2.disabled = true;
        iteraciones.disabled = true;
        avance.disabled = true;
    });

    // evento para el input radio del "no"
    document.getElementById('flexRadioDefault1').addEventListener('click', function(e) {
        console.log('Vamos a deshabilitar el campo para el adjunto');
        adjunto.disabled = true;
        dato1.disabled = false;
        dato2.disabled = false;
        iteraciones.disabled = false;
        avance.disabled = false;
    });

    // evento para habilitar campo otro1
    document.getElementById('numeros_inicio').addEventListener('click', function(e) {
        if (document.formulario.numeros_inicio.selectedIndex == 4) {
            console.log('Vamos a habilitar el campo para el adjunto');
            otro1.disabled = false;
        }

    });

    //evento para desabilitar campo otro1
    document.getElementById('numeros_inicio').addEventListener('click', function(e) {
        if (document.formulario.numeros_inicio.selectedIndex != 4) {
            console.log('Vamos a habilitar el campo para el adjunto');
            otro1.disabled = true;
        }
    });
    // evento para habilitar campo otro2
    document.getElementById('avance_iteracion').addEventListener('click', function(e) {
        if (document.formulario.avance_iteracion.selectedIndex == 4) {
            console.log('Vamos a habilitar el campo para el adjunto');
            otro2.disabled = false;
        }

    });

    //evento para desabilitar campo otro2
    document.getElementById('avance_iteracion').addEventListener('click', function(e) {
        if (document.formulario.avance_iteracion.selectedIndex != 4) {
            console.log('Vamos a habilitar el campo para el adjunto');
            otro2.disabled = true;
        }
    });

    document.getElementById('flexRadioDefault2').addEventListener('click', function(e) {
        console.log('Vamos a deshabilitar el campo para el adjunto');
        inicio.disabled = true;
    });
    document.getElementById('flexRadioDefault1').addEventListener('click', function(e) {
        console.log('Vamos a deshabilitar el campo para el adjunto');
        inicio.disabled = false;
    });
   
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
    </script>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright
        </div>
    </footer>
</body>

</html>