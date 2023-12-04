<?PHP
include('../dashboard/modulos/session_header.php');

// session_start();
// require '../dbconnection.php';

// date_default_timezone_set("America/Argentina/Buenos_Aires");
if (isset($_GET['opcion'])) {
    $opcion = $_GET['opcion'];
}

// echo $_POST['opcion'];
if (isset($_POST['opcion'])) {
    $opcion = $_POST['opcion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $acceso = $_POST['acceso'];
}

// consulta SQL
switch ($opcion) {
    case 0:
        $sql = "SELECT users.nombre, users.apellido, users.dni, users.acceso, users.id FROM users;";
        $result = mysqli_query($conexion, $sql);

        while ($fila = mysqli_fetch_array($result)) {
            $arreglo["data"][] = $fila;
        }
        echo json_encode($arreglo);
        break;

    case 1:
        //ALTA usuario
        $password = $_POST['ingresarPassword'];

        // Verifica si el Usuario esta duplicado
        $sentenciaSQL = $conn->prepare("SELECT * FROM users WHERE dni=:dni");
        $sentenciaSQL->bindParam("dni", $_POST['dni'], PDO::PARAM_STR);
        $sentenciaSQL->execute();
        $numeroRegistros = $sentenciaSQL->rowCount(); //devuelve el nuemro de registgros coincidentes con el usuario

        //SI NO EXISTE USUARIO LO REGISTRA
        if ($numeroRegistros == 0) {

            $sql = "INSERT INTO users (nombre, apellido, dni, acceso, password, email) VALUES ('$nombre', '$apellido',  '$dni', '$acceso', '$password', '$email');";

            if (mysqli_query($conexion, $sql)) {
                echo json_encode('1');
            } else {
                echo json_encode('El usuario no pudo registrarse!');
            };
        } else {
            echo json_encode('El usuario ya existe');
        };
        break;

    case 2:
        // Consulta by ID
        $id = $_GET['id'];
        $sql = "SELECT users.* FROM users WHERE users.id=$id";
        $result = mysqli_query($conexion, $sql);
        $datos = array();
        while ($fila = mysqli_fetch_array($result)) {
            array_push($datos, $fila);
        }
        echo json_encode($datos);
        break;

    case 3:
        // Actualiza los datos by ID
        $id = $_POST['id'];
        if (isset($id)) {

            $sql = "UPDATE users SET dni = '$dni', nombre = '$nombre', apellido = '$apellido', acceso = '$acceso', email='$email' WHERE users.id = $id;";

            if (mysqli_query($conexion, $sql)) {
                echo json_encode('1');
            } else {
                echo json_encode('0');
            }
        } else {
            echo json_encode('0');
        }
        break;

    case 4:
        // Eliminar by ID
        $id = $_GET['id'];

        if (isset($id)) {
            //borra el reguistro en la tabala especificada
            $sql = "DELETE FROM users WHERE users.id = $id";
            if (mysqli_query($conexion, $sql)) {
                echo json_encode('1');
            } else {
                echo json_encode('0');
            };
        } else {
            echo json_encode('0');
        };
        break;
}
mysqli_close($conexion);
