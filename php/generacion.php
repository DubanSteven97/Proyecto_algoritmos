<?php
    include("GeneracionArray.php");
    include("CargueArchivo.php");
    include("TreeSort.php");
    include("bubbleSort.php");
    include("insertionSort.php");

    $generararreglo= new GeneracionArray;
    $leerArchivo= new cargueArchivo;
    $ordenamiento_TreeSort = new implementacion();
    $ordenamiento_bubblesort = new bubbleSort();
    $ordenamiento_insertionSort = new insertionSort();

    
    $arreglo_tiempos;
    $arreglo_iteraciones;
    $arreglo_nombres;

	$algoritmo=$_POST['algoritmo'];

    $tipo_cargue=$_POST['flexRadioDefault'];



    if($tipo_cargue == "archivo"){


        $iteraciones = 0;


        $files = glob('../archivos/*.txt'); //obtenemos todos los nombres de los ficheros
        foreach($files as $file){
            if(is_file($file))
            unlink($file); //elimino el fichero
        }        

    //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
        foreach($_FILES["adjunto"]['tmp_name'] as $key => $tmp_name)
        {
            //Validamos que el archivo exista
            if($_FILES["adjunto"]["name"][$key]) {
                $filename = $_FILES["adjunto"]["name"][$key]; //Obtenemos el nombre original del archivo
                $source = $_FILES["adjunto"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
                
                $directorio = '../archivos/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
                
                $dir=opendir($directorio); //Abrimos el directorio de destino
                $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
                
                //Movemos y validamos que el archivo se haya cargado correctamente
                //El primer campo es el origen y el segundo el destino
                if(move_uploaded_file($source, $target_path)) {	
                    $arreglo_nombres[$iteraciones]=$_FILES["adjunto"]["name"][$key];
                    $iteraciones =  $iteraciones + 1 ;
                    } else {	
                    echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
                }
                closedir($dir); //Cerramos el directorio de destino
            }
        }

        for ($i = 0; $i < count($_FILES["adjunto"]); $i++) {
            $arreglo_tiempos[$i]=0;
            $arreglo_tiempos_2[$i]=0;
            $arreglo_tiempos_3[$i]=0;
        }
    }else{
        $nombre_archivo="null";
 	    $datos_inicio = $_POST['numeros_inicio'];
        $tipo_dato=$_POST['flexRadioDefault_tipo'];
        $avance_iteracion = $_POST['avance_iteracion'];
        $iteraciones=$_POST['Iteraciones'];

        if( $datos_inicio == "Otro"){
            $datos_inicio=$_POST['otro1'];
        }

        if( $avance_iteracion == "Otro"){
            $avance_iteracion=$_POST['otro2'];
        }  

        for ($i = 0; $i < $_POST['Iteraciones']; $i++) {
            $arreglo_tiempos[$i]=0;
            $arreglo_tiempos_2[$i]=0;
            $arreglo_tiempos_3[$i]=0;
        }
    }

    for ($j = 0; $j < count($algoritmo); $j++) {
        switch ($algoritmo[$j]) {
            case "Tree sort":
                for ($i = 0; $i < $iteraciones; $i++) {
                    if($tipo_cargue=="archivo"){  
                        $arreglo=$leerArchivo->leerArchivo($arreglo_nombres[$i]);
                        $datos_inicio= count($arreglo);

                        $tiempo_inicial = microtime(true);
                        $ordenamiento_TreeSort-> crearArbol($arreglo);
                        $tiempo_final = microtime(true);
                        
                        $tiempo = $tiempo_final - $tiempo_inicial;
                
                        $arreglo_tiempos[$i]=$tiempo;
                        $arreglo_iteraciones[$i]=$datos_inicio;
                    }elseif($tipo_cargue=="aleatorios"){
                        if($tipo_dato=="numerico"){
                            $arreglo=$generararreglo -> arrayNumerico($datos_inicio);
                        }elseif($tipo_dato=="letras"){
                            $arreglo=$generararreglo -> arrayPalabras($datos_inicio);
                        } 

                        $tiempo_inicial = microtime(true);
                        $ordenamiento_TreeSort-> crearArbol($arreglo);
                        $tiempo_final = microtime(true);
                        
                        $tiempo = $tiempo_final - $tiempo_inicial;
                
                        $arreglo_tiempos[$i]=$tiempo;
                        $arreglo_iteraciones[$i]=$datos_inicio;

                        $datos_inicio = $datos_inicio + $avance_iteracion ;
                    }
                }
                break;
            case "bubbleSort":
                for ($i = 0; $i < $iteraciones; $i++) {
                    if($tipo_cargue=="archivo"){  
                        $arreglo=$leerArchivo->leerArchivo($arreglo_nombres[$i]);
                        $datos_inicio= count($arreglo);

                        $tiempo_inicial = microtime(true);
                        $ordenamiento_bubblesort-> ordenarbubblesort($arreglo);
                        $tiempo_final = microtime(true);
                        
                        $tiempo2 = $tiempo_final - $tiempo_inicial;
                
                        $arreglo_tiempos_2[$i]=$tiempo2;
                        $arreglo_iteraciones[$i]=$datos_inicio;
                    }elseif($tipo_cargue=="aleatorios"){
                        if($tipo_dato=="numerico"){
                            $arreglo=$generararreglo -> arrayNumerico($datos_inicio);
                        }elseif($tipo_dato=="letras"){
                            $arreglo=$generararreglo -> arrayPalabras($datos_inicio);
                        } 

                        $tiempo_inicial = microtime(true);
                        $ordenamiento_bubblesort-> ordenarbubblesort($arreglo);
                        $tiempo_final = microtime(true);
                        
                        $tiempo2 = $tiempo_final - $tiempo_inicial;
                
                        $arreglo_tiempos_2[$i]=$tiempo2;
                        $arreglo_iteraciones[$i]=$datos_inicio;

                        $datos_inicio = $datos_inicio + $avance_iteracion ;
                    }
                }
                break;
            case "insertionSort":
                for ($i = 0; $i < $iteraciones; $i++) {
                    if($tipo_cargue=="archivo"){  
                        $arreglo=$leerArchivo->leerArchivo($arreglo_nombres[$i]);
                        $datos_inicio= count($arreglo);

                        $tiempo_inicial = microtime(true);
                        $ordenamiento_insertionSort-> insertion_Sort($arreglo);
                        $tiempo_final = microtime(true);
                        
                        $tiempo2 = $tiempo_final - $tiempo_inicial;
                
                        $arreglo_tiempos_3[$i]=$tiempo2;
                        $arreglo_iteraciones[$i]=$datos_inicio;
                    }elseif($tipo_cargue=="aleatorios"){
                        if($tipo_dato=="numerico"){
                            $arreglo=$generararreglo -> arrayNumerico($datos_inicio);
                        }elseif($tipo_dato=="letras"){
                            $arreglo=$generararreglo -> arrayPalabras($datos_inicio);
                        } 

                        $tiempo_inicial = microtime(true);
                        $ordenamiento_insertionSort-> insertion_Sort($arreglo);
                        $tiempo_final = microtime(true);
                        
                        $tiempo2 = $tiempo_final - $tiempo_inicial;
                
                        $arreglo_tiempos_3[$i]=$tiempo2;
                        $arreglo_iteraciones[$i]=$datos_inicio;

                        $datos_inicio = $datos_inicio + $avance_iteracion ;
                    }
                }                
                break;
            default;
                echo '<script language="javascript">alert("¡Seleccione un algoritmo!\n");location.href="../index.php";</script>';
            break;
        }
    }


?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Proyecto
    </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script type="text/javascript" href="../js/bootstrap.min.js"></script>
    <script type="text/javascript" href="../js/jquery-3.6.1.min.js"></script>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(
            [
                ['Iteraciones', 'Tiempo Tree sort', 'Tiempo Bubble Sort','Insertion Sort'],
                <?php


        for ($i = 0; $i <= count( $arreglo_iteraciones)-1; $i++) {
            echo('['.$arreglo_iteraciones[$i].', '.$arreglo_tiempos[$i].','.$arreglo_tiempos_2[$i].','.$arreglo_tiempos_3[$i].'],');
        }
      

        ?>
            ]);
        var options = {
            hAxis: {
                title: 'Iteraciones'
            },
            vAxis: {
                title: 'Tiempo'
            },
            title: 'Representación temporal Tree Sort - O (n log n)',
            curveType: 'function',
            //legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
    </script>
</head>

<body>
    <div class="loading"></div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Algoritmos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 id="Generalidades">Tiempo VS Iteración <button type="button" class="btn btn-primary"
                            onclick="location.href='../index.php'">Atrás</button></h1>
                    <div id="curve_chart" style="width: 100%; height: 500px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div style=" position: relative; height: 200px; overflow: auto;">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"># Iteraciones</th>
                                    <th scope="col">Número de ejecuciones</th>
                                    <th scope="col">Tiempo Tree sort</th>
                                    <th scope="col">Tiempo Bubble Sort</th>
                                    <th scope="col">Insertion Sort</th>
                                    <?php
                                    if($tipo_cargue == "archivo"){
                                ?>
                                    <th scope="col">Nombre Archivo</th>
                                    <?php
                                    }
                                ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i <= count( $arreglo_iteraciones)-1; $i++) {
                            ?>
                                <tr>
                                    <td><?php echo($i+1);?></td>
                                    <td><?php echo($arreglo_iteraciones[$i]);?></td>
                                    <td><?php echo($arreglo_tiempos[$i]);?></td>
                                    <td><?php echo($arreglo_tiempos_2[$i]);?></td>
                                    <td><?php echo($arreglo_tiempos_3[$i]);?></td>
                                    <?php
                                    if($tipo_cargue == "archivo"){
                                ?>
                                    <td><?php echo($arreglo_nombres[$i]);?></td>
                                    <?php
                                    }
                                ?>
                                </tr>
                                <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>
    </main>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright
        </div>
    </footer>

    <script>
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
    </script>
</body>

</html>