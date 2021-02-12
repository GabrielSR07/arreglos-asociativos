<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro con Arreglos Asociativos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <div>
        
        <br>
        <br>
        <form id="formulario" method="POST">
            <label for="nombre">
                <span>Nombre:</span>
                <input type="text" id="nombre" placeholder="Nombre..." name="nombre">
            </label>

            <label for="apellido">
                <span>Apellido:</span>
                <input type="text" id="apellido" placeholder="Apellido..." name="apellido">
            </label>
           
            <label for="ci">
                <span>C.I:</span>
                <input type="text" id="ci" placeholder="C.I..." name="ci">
            </label>

            <label for="sueldo">
                <span>Sueldo:</span>
                <input type="text" id="sueldo" placeholder="Sueldo..." name="sueldo">
            </label>

            <label for="direccion">
                <span>Dirección:</span>
                <input type="text" id="direccion" placeholder="Dirección..." name="direccion">
            </label>

            <label for="oficina">
                <span>Oficina:</span>
                <input type="text" id="oficina" placeholder="Oficina...">
            </label>

            <button type="button" id="enviar">Enviar</button>
        </form>
        <br>
        <br>


        <form id="formulario2" method="POST">
            <label for="nombre2">
                <span>Nombre:</span>
                <input type="text" id="nombre2" placeholder="Nombre...">
            </label>

            <label for="apellido2">
                <span>Apellido:</span>
                <input type="text" id="apellido2" placeholder="Apellido...">
            </label>
           
            <label for="ci2">
                <span>C.I:</span>
                <input type="text" id="ci2" placeholder="C.I...">
            </label>

            <label for="sueldo2">
                <span>Sueldo:</span>
                <input type="text" id="sueldo2" placeholder="Sueldo..." >
            </label>

            <label for="direccion2">
                <span>Dirección:</span>
                <input type="text" id="direccion2" placeholder="Dirección..." >
            </label>

            <label for="oficina2">
                <span>Oficina:</span>
                <input type="text" id="oficina2" placeholder="Oficina...">
            </label>

            <button type="button" id="enviar2">Enviar</button>
        </form>

        <br>
        <br>


        <form id="formulario3" method="POST">
            <label for="nombre3">
                <span>Nombre:</span>
                <input type="text" id="nombre3" placeholder="Nombre...">
            </label>

            <label for="apellido3">
                <span>Apellido:</span>
                <input type="text" id="apellido3" placeholder="Apellido...">
            </label>
           
            <label for="ci3">
                <span>C.I:</span>
                <input type="text" id="ci3" placeholder="C.I...">
            </label>

            <label for="sueldo3">
                <span>Sueldo:</span>
                <input type="text" id="sueldo3" placeholder="Sueldo..." >
            </label>

            <label for="direccion3">
                <span>Dirección:</span>
                <input type="text" id="direccion3" placeholder="Dirección..." >
            </label>

            <label for="oficina3">
                <span>Oficina:</span>
                <input type="text" id="oficina3" placeholder="Oficina...">
            </label>

            <button type="button" id="enviar3">Enviar</button>
        </form>

    </div>

    <br>
    <br>

    <div id="respuesta"></div>
    <br>
    <div id="respuesta2"></div>
    <br>
    <div id="respuesta3"></div>
    
</body>

<script>

    $('#enviar').click(function() {
        var nombre = document.getElementById('nombre').value;
        var apellido = document.getElementById('apellido').value;
        var ci = document.getElementById('ci').value;
        var sueldo = document.getElementById('sueldo').value;
        var direccion = document.getElementById('direccion').value;
        var oficina = document.getElementById('oficina').value;

        var ruta = "name="+nombre+"&last="+apellido+"&ci="+ci+"&sueldo="+sueldo+"&direccion="+direccion+"&oficina="+oficina;

       $.ajax({
            url:'back.php',
            type: 'POST',
            data: ruta,
       })
       .done(function(res) {
            $('#respuesta').html(res)
       })
       .fail(function() {
        console.log("error");
       })
       .always(function() {
        console.log("complete");
       });

    });

     $('#enviar2').click(function() {
        var nombre = document.getElementById('nombre2').value;
        var apellido = document.getElementById('apellido2').value;
        var ci = document.getElementById('ci2').value;
        var sueldo = document.getElementById('sueldo2').value;
        var direccion = document.getElementById('direccion2').value;
        var oficina = document.getElementById('oficina2').value;

        var ruta = "name2="+nombre+"&last2="+apellido+"&ci2="+ci+"&sueldo2="+sueldo+"&direccion2="+direccion+"&oficina2="+oficina;

       $.ajax({
            url:'back2.php',
            type: 'POST',
            data: ruta,
       })
       .done(function(res) {
            $('#respuesta2').html(res)
       })
       .fail(function() {
        console.log("error");
       })
       .always(function() {
        console.log("complete");
       });

    });

     $('#enviar3').click(function() {
        var nombre = document.getElementById('nombre3').value;
        var apellido = document.getElementById('apellido3').value;
        var ci = document.getElementById('ci3').value;
        var sueldo = document.getElementById('sueldo3').value;
        var direccion = document.getElementById('direccion3').value;
        var oficina = document.getElementById('oficina3').value;

        var ruta = "name3="+nombre+"&last3="+apellido+"&ci3="+ci+"&sueldo3="+sueldo+"&direccion3="+direccion+"&oficina3="+oficina;

       $.ajax({
            url:'back3.php',
            type: 'POST',
            data: ruta,
       })
       .done(function(res) {
            $('#respuesta3').html(res)
       })
       .fail(function() {
        console.log("error");
       })
       .always(function() {
        console.log("complete");
       });

    });

</script>

</html>