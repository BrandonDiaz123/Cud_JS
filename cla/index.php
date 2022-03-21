<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="nvbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Producto</a>
    </nav>

    <div clas="contenedor">
        <div id="app" class="fila 5">
            <div class="columna">
                <div class="tarjeta">
                    <div class="tarjeta-header">
                        <h4>agreagar producto</h4>
                        <form id="formulario-producto" class="tarjeta-cuerpo" action="">
                            <div class="formulario-grupos">
                            <input type="text" id="nombre" placehorlder="nombre de producto" class="control-formulario">
                            </div>
                            <input type="submint" value="Guardar" class="btn btn-primario btn-bloque">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Lista de productos-->
    <div id="lista-producto" class="columna-8">
        
    </div>
    <script src="app.js"></script>
</body>
</html>