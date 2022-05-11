<?php
require_once 'plantilla/cabecera.php';
?>
<!-- INICIO DEL CONTENIDO -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crud de Contactos</h1>
    </div>
    <div class="container">

              <div class="row">
            <div class="col-md-6">
                <div class="card">
                    
                    <div class="card-body">
                        <form action="app/insertarMedicos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" name="especialidad" id="telefono">
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">email</th>
                            <th scope="col">especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'app/listarMedicos.php';
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td> <?php echo $datos->id_medico; ?> </td>
                                <td> <?php echo $datos->nombre_medico; ?> </td>
                                <td> <?php echo $datos->apellido_medico; ?> </td>
                                <td> <?php echo $datos->email; ?> </td>
                                <td> <?php echo $datos->especialidad; ?> </td>
                                <td> <a href="frmEditar.php?id=<?php echo $datos->id_medico ?>" type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a> </td>
                                <td> <a href="app/eliminarMedico.php?id=<?php echo $datos->id_medico ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a> </td>
                            </tr>
                        <?php  } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';
    ?>