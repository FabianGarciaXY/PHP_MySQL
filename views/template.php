<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            background-color: whitesmoke;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        h1 {
            font-family: sans-serif;
            background-color: white;
            width: 500px;
            border-radius: 9px;
            padding: 4px;
        }

        input {
            width: 600px;
            height: 40px;
            border-radius: 10px;
        }

        button {
            height: 45px;
            width: 100px;
            border-radius: 10px;
        }
        button:hover {
            transform: scale(1.05);
            transition: 0.5s;
        }

        .container {
            display: flex;
            flex-direction: row;
            gap: 25px;
        }

        table {
            padding: 20px;
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            background-color: cadetblue;
            font-size: 26px;
        }

        table > tr {
            padding: 10px;
            border: 2px solid black;
        }
        tr {
            padding: 10px;
            border: 2px solid black;
        }

        




    </style>

    <title>Template</title>
</head>
<body>

    <h1>Cuerpos Celestes</h1><br>

    <form class="container" method="post">
        <input id='value' name="item" placeholder="Ingresa un cuerpo celeste"  required>
        <button>Agregar</button>
    </form>

    <div>


        <?php
        // Registro de cuerpos celestes
        $arrayOfItems = [];
        $item = FormController::formController();
        
        if( $item == 'ok') {
            echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>';
            echo '<div class="alert alert-success">Elemento agregado!</div>'; 
        }
        ?>

        <table class="table">

            <tr>
                <th>id</th>
                <th>dato</th>
            </tr>

            <?php
            # Rederizado de cuerpos celestes
            $elementos = FormController::seleccionarRegistrosController();

            for( $element = 0; $element < count($elementos); $element++) {
                
                echo "<tr><td>".$elementos[$element]['id']; echo"</td><td>".$elementos[$element]['dato']; echo"</td></tr>";
            }

            ?>
        </table>

        
    </div>
</body>
</html>