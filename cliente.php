<!DOCTYPE html>
<html lang="es">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DWES: Tarea 9</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 20px;
            }

            h1 {
                
                background-color: azure;
            }

            p {
                font-style: italic;
                color: grey;
            }
            .actividad{
                font-weight: bold;
                color: lightslategray;
                border: solid black 0.1rem;
                width: 40em;
                margin: 0 auto;
                font-style: normal;
                background-color: antiquewhite;
                 
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
            // Carga el documento
            $(document).ready(function(){
                //Se ejecuta la función refrescar cada 5 segundos
                setTimeout(refrescar, 5000);
            });

            function refrescar(){
                //Función que carga de nuevo la URL
                location.reload();
            }
        </script>
    </head>
    <body>
        <h1> Generador de actividades </h1>
        <p> ¿No sabes qué hacer? Esta página te dará ideas en inglés para que no vuelvas a aburrirte nunca más.</p>
        <?php
            //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $actividad_json = file_get_contents('http://www.boredapi.com/api/activity/');
             // Se decodifica el fichero JSON y se convierte a objeto
            $actividad = json_decode($actividad_json);
        ?>

        <p class="actividad"><?php echo $actividad->activity; ?></p>

    </body>
</html>
