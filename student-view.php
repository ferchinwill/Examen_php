<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">
   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>DETALLES DEL ALUMNO
                            <a href="index.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM alumnos WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <div class="mb-3">
                                    <label>Grado</label>
                                    <p class="form-control">
                                        <?= $student['Grado']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Genero</label>
                                    <p class="form-control">
                                        <?= $student['Genero']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Nombre Alumno</label>
                                    <p class="form-control">
                                        <?= $student['nombre']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Correo</label>
                                    <p class="form-control">
                                        <?= $student['correo']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Telefono</label>
                                    <p class="form-control">
                                        <?= $student['telefono']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Carrera</label>
                                    <p class="form-control">
                                        <?= $student['carrera']; ?>
                                    </p>
                                </div>

                        <?php
                            } else {
                                echo "<h4>no se pido encontrar el alumno</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>