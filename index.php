<!DOCTYPE html>
<html>

<head>
    <title>
        Algoritmos
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" href="js/bootstrap.min.js"></script>
    <script type="text/javascript" href="js/jquery-3.6.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
</head>

<body>
    <!-- Carousel -->
    <div id="demo" class="carousel slide carousel-fade shadow-2-strong" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider.jpg" alt="Tree sort" class="d-block" id="slider1">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <h1 class="display-1"><b>Tree sort</b></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider.jpg" alt="Generalidades" class="d-block" id="slider2">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <h2 class="mb-3 display-1"><b>Generalidades</b></h2>
                        <p class="text-start fs-4">Es un algoritmo de clasificación el cual debe crear un árbol de
                            búsqueda
                            binario a partir de los elementos que se van a clasificar y luego recorre el árbol ( InOrden
                            )
                            para que los elementos se muestren de forma ordenada.</p>
                        <ul class="mb-3 text-start fs-4">
                            <li>Se puede usar como un ordenamiento único</li>
                            <li>Es equivalente al ordenamiento Quicksort(Ya que ambos recursivamente dividen los
                                elementos
                                en función de un pivote)</li>
                            <li>Es complejo e ineficiente si el árbol es desproporcional</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider.jpg" alt="Funcionamiento" class="d-block" id="slider3">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <h2 class="mb-3 display-1"><b>Funcionamiento</b></h2>
                        <p class="mb-3 text-start fs-4">El algoritmo consta de 3 pasos para su funcionamiento y son los
                            siguientes:
                        </p><br>
                        <ol class="mb-3 text-start fs-4">
                            <li><b>Paso 1:</b> Tome la entrada de elementos en una matriz.</li>
                            <li><b>Paso 2:</b> crear un árbol de búsqueda binaria insertando elementos de datos de la
                                matriz
                                en el árbol de búsqueda binaria.</li>
                            <li><b>Paso 3:</b> Realice un recorrido en orden en el árbol para ordenar los elementos.
                            </li>
                        </ol><br>
                        <p class="mb-3 text-start fs-4">La representación temporal de este algoritmo es <b> de O(n log
                                n)</b>
                            en el caso promedio y de <b>O(n <sup>2</sup> ) </b> en el peor de los casos (Este escenario
                            para cuando el árbol está desbalanceado o está parcialmente ordenado el arreglo)
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider.jpg" alt="Video" class="d-block" id="slider4">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">

                        <iframe width="1000px" height="500px" src="https://www.youtube.com/embed/n2MLjGeK7qA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <p class="mb-3 text-start fs-4"> Tree Sort | GeeksforGeeks. (2017b, agosto 20). YouTube
                        </p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider.jpg" alt="Demostración" class="d-block" id="slider5">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <h2 class="mb-3 display-1"><b>Demostración</b></h2>
                        <p class="text-justify fs-4">En la demostración verá un formulario en el cual va a poder
                            indicar
                            él tipo de generación de datos (generados aleatoriamente o cargue
                            desde un archivo), la cantidad de datos a procesar y el algoritmo con el que sé
                            ordenará. Después de realizar la selección se visualizará la
                            gráfica con el tiempo que tomo
                            cada algoritmo para los diferentes sets de datos.</p>
                        <a class="btn btn-outline-light btn-lg m-2" href="Ejecutar.php"
                            role="button" rel="nofollow" target="_blank">Comenzar</a>
                    </div>
                </div>
            </div>


            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
</body>

<script>
var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;

console.log(windowWidth);
console.log(windowHeight);

document.getElementById("slider1").style.width = `${windowWidth}px`;
document.getElementById("slider1").style.height = `${windowHeight}px`;
document.getElementById("slider2").style.width = `${windowWidth}px`;
document.getElementById("slider2").style.height = `${windowHeight}px`;
document.getElementById("slider3").style.width = `${windowWidth}px`;
document.getElementById("slider3").style.height = `${windowHeight}px`;
document.getElementById("slider4").style.width = `${windowWidth}px`;
document.getElementById("slider4").style.height = `${windowHeight}px`;
document.getElementById("slider5").style.width = `${windowWidth}px`;
document.getElementById("slider5").style.height = `${windowHeight}px`;
</script>

</html>