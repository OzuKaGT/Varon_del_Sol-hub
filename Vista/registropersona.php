<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de pacientes</title>
    <link  href="../Style/Estilo1.css" rel="stylesheet">
</head>
<header>
        <a href="Inicio.php"><img src="../Imagenes/LogoInvis.png" alt="logo" id="logonav"></a>
        <nav>
            <ul class="nav_links">
                <ol><a href="Iniciosesion.php"> Iniciar Sesion </a></ol>
                <ol><a href="registromedico.php"> Soy medico </a></ol>
            </ul>
        </nav>
    </header>
<body>
    <form action="../Controlador/ValidarRegistro.php" method="post">
    <label id="tit"> REGISTRO DE PACIENTES </label><br><br><br>
    <label>Tipo de documento</label>
    <select name="tipo" id="in1">
        <option value=""></option>
        <option value="Registro Civil">Registro Civil</option>
        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
        <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
        <option value="Documento extranjero">Documento extranjero</option>
    </select><br><br>
    <label>Numero de documento</label>
    <input type="text" name="numb" min="7" max="10" id="in2"><br><br>
    <label>Nombres del paciente</label>
    <input type="text" name="name" id="in3"><br><br>
    <label>Apellidos del paciente</label>
    <input type="text" name="lname" id="in4"><br><br>
    <label>Telefono de contacto</label>
    <input type="text" name="tel" id="in6"><br><br>
    <label>Edad</label>
    <input type="text" name="age" id="in7"><br><br>
    <label>Correo Electronico</label>
    <input type="email" name="email" id="in8"><br><br>
    <label>Contraseña</label>
    <input type="password" name="pass" id="in9"><br><br><br>
    <input type="submit" value="Registrar" name="registro">
    <p> ¿Ya estas registrado? <a href="Iniciosesion.php">Inicia Sesión</a> </p>
    </form>
</body>
</html>