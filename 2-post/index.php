<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="registro.php" method="POST">
        <label for="usuario">Nombre de usuario</label>
        <input class='form-control' type="text" name="usuario" id="usuario">
        <br>
        <label for="">Contraseña</label>
        <input class='form-control' type="password" name="contrasena" id="">
        <br>
        <label for="masculino">Masculino</label>
        <input  type="radio" name="sexo" id="masculino" value="masculino">
        <label for="femenino">Femenino</label>
        <input  type="radio" name="sexo" id="femenino" value="femenino">
        <label for="otre">Otres</label>
        <input  type="radio" name="sexo" id="otre" value="otre">
        <br>
        <label for="">dni</label>
        <input class='form-control' type="number" name="dni" id="">
        
        <label for="">fecha de nacimiento</label>
        <input class='form-control' type="date" name="fecha" id="">
        <br>
        <label for="">Deporte favorito</label>
        <select class='form-control' name="op[]" id="" multiple>
            <option value="futbol">futbol</option>
            <option value="basquet">basquet</option>
            <option value="handbol">handbol</option>
            <option value="box">box</option>
        </select>
        <br>
        <input class='btn btn-primary' type="submit" value="Regristrar">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

