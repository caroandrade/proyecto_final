<?php include("base.php")?>
<?php include("include/encabezado.php")?>

<h1>Pedidos</h1>

<div class="formulario" >
    <div class="col-md-12  text-center" >

        <form class="needs-validation" novalidate action="guardarpedido.php" method="POST">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label name="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="" required>

                </div>
                <div class="col-md-3 mb-3">
                    <label name="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="" required>

                </div>
            </div>


            <div class="col-md-6 mb-3">
                <label name="correo">Correo</label>
                <input type="email" class="form-control" name="correo" placeholder="correo@gmail.com" value="" required>

            </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" placeholder="calle y número" required>
        </div>
    </div>






    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="localidad">Localidad</label>
            <input type="text" class="form-control" name="localidad" placeholder="localidad" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="state" name="provincia">Provincia</label>
            <input class="text" name="provincia" required>


        </div>
        <div class="col-md-3 mb-3">
            <label for="zip">Cod.Postal</label>
            <input type="text" class="form-control" name="cp" placeholder="" required>

        </div>
    </div>

    <hr class="mb-8 col-6">

    <!-- cajas y variedad-->
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="variedad">Variedad</label>
            <input class="text" name="variedad" required>


        </div>
        <div class="col-md-3 mb-3">
            <label for="cajas">Cantidad de cajas</label>
            <input type="text" name="cajas" placeholder="" required>

        </div>
    </div>

    <hr class="mb-6 col-6">



    <div class="row">

        <div class="col-12  text-center">
            <button class="btn btn-success btn-lg btn-block" type="submit">Ingresar la Solicitud</button>
        </div>
    </div>
</div>
</form>





<?php include("include/piedepag.php")?>
