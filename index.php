<?php
    $listaProductos = array();
    for ( $i=0; $i < 8; $i++){
        $producto = array(
            "id" => "",
            "imagen" => "img/1.png",
            "titulo" => "Paragolpe delantero adap.",
            "antes" => "Antes $2.626",
            "precio" => "$2.101"
        );
        $producto["id"] = $i;
        array_push($listaProductos, $producto);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
          href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">

    <title>
        Summa Solution FED Test
    </title>
</head>
<body>

    <section class="titulo">
        <div class="container">
            Summa Solutions FED Test
        </div>
    </section>

    <section class="texto">
        <div class="container">
            <div class="texto__contenedor">
                <div class="texto__parrafo">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                vel facilisis.
                </div>
            </div>
        </div>
    </section>

     <section class="grilla">
        <div class="container">
            <div class="row">
                <?php
                foreach ($listaProductos as $key => $value){
                ?>
                <div class="col-sm-3">
                    <div class="grilla__item">
                        <div class="grilla__item__contenedor_imagen">
                            <img class="img-fluid"
                                 src="img/1.png">
                        </div>
                        <div class="grilla_item__titulo">
                            <?php
                                echo $value["titulo"];
                            ?>
                        </div>
                        <div class="grilla__item__antes">
                            <?php
                                echo $value["antes"];
                            ?>
                        </div>
                        <div class="grilla__item__precio">
                            <?php
                                echo $value["precio"];
                            ?>
                        </div>
                        <div class="renglon contenedor--boton">
                            <button class="btn btn-success  btn_detalle">
                                VER DETALLES
                            </button>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>