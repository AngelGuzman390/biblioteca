<?php
include '../conexion.php';
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio_publicacion'];
    $genero = $_POST['genero'];
    $disponible = isset($_POST['disponible']) ? 1  :0;

    $sql = "INSERT INTO libros(titulo,autor,anio_publicacion,genero,disponible) VALUES('$titulo','$autor','$anio','$genero','$disponible')";

    if($conn->query($sql)){
        header("Location: ../index.php");
    }else{
        echo"Error: ".$conn->error;
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container mt-4">
    <h2 class ="text-center">Agregar Libro</h2>

    <form action="" method="POST" class="border p4 rounded bg.light">
        <laber for="" class="form-label">Titulo</laber>
        <input type="text" name="titulo" id="" class="form-control" required>

        <laber for="" class="form-label">Autor</laber>
        <input type="text" name="autor" id="" class="form-control" required>

        <laber for="" class="form-label">AÑO</laber>
        <input type="number" name="anio_publicacion" id="" class="form-control" required>


        <laber for="" class="form-label">Genero</laber>
        <input type="text" name="genero" id="" class="form-control" required>

        <div class="form-check mt-2">
        <input type="checkbox" name="disponible" id="" class="form-cjeck-input" checked>
        <laber for="" class="form-label">Disponible</laber>
        </div>

        <button type="submit" class="btn btn-success mt-3">guardar</button>
        <a hrej="index.php" class="btn btn-secundary mt-3">volver</a>
</body>
</html>