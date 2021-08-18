<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de medicos</title>
    <link  href="../Style/Estilo3.css" rel="stylesheet">
</head>
<header>
        <a href="Inicio.php"><img src="../Imagenes/LogoInvis.png" alt="logo" id="logonav"></a>
        <nav>
            <ul class="nav_links">
                <ol><a href="Iniciosesion.php"> Iniciar Sesion </a></ol>
                <ol><a href="registropersona.php"> Soy paciente </a></ol>
            </ul>
        </nav>
    </header>
<body>
    <form action="" method="post">
    <label id="tit"> REGISTRO DE MEDICOS </label><br><br><br>
    <label>Tipo de documento</label>
    <select id="in1">
        <option></option>
        <option>Cedula de Ciudadania</option>
        <option>Documento extranjero</option>
    </select><br><br>
    <label>Numero de documento</label>
    <input type="text" min="7" max="10" id="in2"><br><br>
    <label>Nombres del medico</label>
    <input type="text"id="in3"><br><br>
    <label>Apellidos del medico</label>
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
    <input type="password" id="in9"><br><br>
    <label>Especialidad</label>
    <input type="text" id="in10"><br><br>
    <button>ENVIAR</button>
    <p> ¿Ya estas registrado? <a href="Iniciosesion.php">Inicia Sesión</a> </p>
    </form>
</body>
</html>