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
                    <h3>Registro de Pacientes</h3>
                    <div class="card-body">
                        <form action="app/insertar_Pacientes.php" method="POST">
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
                                <label for="nombre" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono">
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Password</label>
                                <input type="text" class="form-control" name="pass" id="telefono">
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
                            <th scope="col">ID_paciente</th>
                            <th scope="col">Nombre_paciente</th>
                            <th scope="col">Apellidos_paciente</th>
                            <th scope="col">email_paciente</th>
                            <th scope="col">telefono_paciente</th>
                            <th scope="col">password_paciente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'app/Listar_Pacientes.php';
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td> <?php echo $datos->id_paciente; ?> </td>
                                <td> <?php echo $datos->Nombre; ?> </td>
                                <td> <?php echo $datos->Apellido; ?> </td>
                                <td> <?php echo $datos->email; ?> </td>
                                <td> <?php echo $datos->telefono; ?> </td>
                                <td> <?php echo $datos->pass; ?> </td>
                                <td> <a href="frmEditar.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a> </td>
                                <td> <a href="crud/eliminarContacto.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a> </td>
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