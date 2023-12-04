<?PHP

session_start();
require '../dbconnection.php';

date_default_timezone_set("America/Argentina/Buenos_Aires");


// ------ API referente al LOGIN ------
// Verifica usuario y contraseña
if (!empty($_POST['dni']) && !empty($_POST['password'])) {

    $records = $conn->prepare("SELECT * FROM users WHERE dni = :dni AND password=:password");
    $records->bindParam("dni", $_POST['dni'], PDO::PARAM_STR);
    $records->bindParam("password", $_POST['password'], PDO::PARAM_STR);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if ($results > 0) {
        //Ingresa al sistema
        $_SESSION['user_id'] = $results['id'];

        //consulta el usuario logeado
        if (isset($_SESSION['user_id'])) {
            $records = $conn->prepare('SELECT users.id, users.dni, users.nombre, users.apellido, users.acceso FROM users WHERE users.id= :id');
            $records->bindParam(':id', $_SESSION['user_id']);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);

            $user = $results;
        }

        $_SESSION['dniUsuario'] = $user['dni'];
        $_SESSION['nombreUsuario'] = $user['nombre'];
        $_SESSION['apellidoUsuario'] = $user['apellido'];
        $_SESSION['accesoUsuario'] = $user['acceso'];

        // print_r($_SESSION['dniUsuario'] . " / " .  $_SESSION['nombreUsuario'] . " / " . $_SESSION['apellidoUsuario']);
        // header("Location: ../dashboard/dashboard.php");

        //Direcciona a la pagina de Inicio del DASHBOARD
        echo json_encode(0);
    } else {
        $checkUser = $conn->prepare("SELECT * FROM users WHERE dni=:dni");
        $checkUser->bindParam("dni", $_POST['dni'], PDO::PARAM_STR);
        $checkUser->execute();
        $userRegistros = $checkUser->rowCount();
        if ($userRegistros == 0) {
            // usuario incorrecto
            echo json_encode(1);
        } else {
            // password incorrecta
            echo json_encode(2);
        }
    }
}
