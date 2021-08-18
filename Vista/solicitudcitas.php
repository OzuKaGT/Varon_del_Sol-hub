<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para solicitud de citas </title>
    <link  href="Style/Estilo2.css" rel="stylesheet">
</head>
<header>
    <a href="Index.html"><img src="Imagenes/LogoInvis.png" alt="logo"></a>
</header>
<body>
    <form action="" method="post">
    <label id="tit">ASIGNACION DE CITAS</label><br><br><br>
    <label>Fecha probable de la cita</label>
    <input type="date"  min="2021-08-18" id="in1"><br><br>
    <label>Hora probable de la cita</label>
    <select id="in2">
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>01</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
    </select> :
    <select>
        <option>00</option>
        <option>10</option>
        <option>20</option>
        <option>30</option>
        <option>40</option>
        <option>50</option>
    </select><br><br>
    <label>Especialidad que necesita</label>
    <select id="in4">
        <option>--Seleccione una opción--</option>
        <option>Medicina general</option>
        <option>Odontologia</option>
        <option>Laboratorios de sangre</option>
    </select><br><br>
    <label>Telefono de contacto</label>
    <input type="text" id="in5"><br><br>
    <label>Correo Electronico</label>
    <input type="email"id="in6"><br><br><br>
    <button>ENVIAR</button>
    </form>
</body>
</html>