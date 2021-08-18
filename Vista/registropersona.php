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
    <form action="" method="post">
    <label id="tit"> REGISTRO DE PACIENTES </label><br><br><br>
    <label>Tipo de documento</label>
    <select id="in1">
        <option></option>
        <option>Registro Civil</option>
        <option>Tarjeta de Identidad</option>
        <option>Cedula de Ciudadania</option>
        <option>Documento extranjero</option>
    </select><br><br>
    <label>Numero de documento</label>
    <input type="text" min="7" max="10" id="in2"><br><br>
    <label>Nombres del paciente</label>
    <input type="text"id="in3"><br><br>
    <label>Apellidos del paciente</label>
    <input type="text" id="in4"><br><br>
    <label>Direccion</label>
    <input type="text" id="in5"><br><br>
    <label>Telefono de contacto</label>
    <input type="text" id="in6"><br><br>
    <label>Edad</label>
    <input type="text" id="in7"><br><br>
    <label>Correo Electronico</label>
    <input type="email" id="in8"><br><br>
    <label>Contraseña</label>
    <input type="password" id="in9"><br><br><br>
    <button>ENVIAR</button>
    <p> ¿Ya estas registrado? <a href="Iniciosesion.php">Inicia Sesión</a> </p>
    </form>
</body>
</html>