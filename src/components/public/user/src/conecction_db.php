<?php

function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "Cuetzala1";
    $db = "proyectosw";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("No se pudo conectar: %s\n". $conn -> error);
    return $conn;
}

function insertarDatos($correo, $contraseña) {
    $conn = OpenCon();

    $correo = $conn->real_escape_string($correo);
    $contraseña = $conn->real_escape_string($contraseña);

    $sql = "INSERT INTO datos (correo, contraseña) VALUES ('$correo', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        return "Nuevo registro creado exitosamente";
    } else {
        return "Error al insertar el registro: " . $conn->error;
    }

    $conn->close();
}

function mostrarDatos() {
    $conn = OpenCon();

    $sql = "SELECT * FROM datos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo 
                "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["correo"]. "</td>
                    <td>" . $row["contraseña"]. "</td>
                    <td>
                        <a href='?editar=" . $row["id"] . "' data-bs-toggle='modal' data-bs-target='#editarModal' style='text-decoration: none;'>
                            <i class='fa fa-pencil-square-o text-primary' aria-hidden='true' style=' font-size: 24px; margin-right: 15px'></i>
                        </a>
                        <a href='?eliminar=" . $row["id"] . "'>
                            <i class='fa fa-trash text-danger' aria-hidden='true' style=' font-size: 24px; margin-left: 15px'></i>
                        </a>
                    </td>
                </tr>";
        }
    } else {
        echo "0 resultados";
    }

    $conn->close();
}

if(isset($_GET['eliminar'])) {
    $id_a_eliminar = $_GET['eliminar'];
    $resultado = eliminarDato($id_a_eliminar);
    echo $resultado;
}

if(isset($_GET['editar'])) {
    $id_a_editar = $_GET['editar'];
    $nueva_contrasena = $_POST['contraseña'];
    $resultado = editarContraseña($id_a_editar, $nueva_contrasena);
    echo $resultado;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['correo']) && isset($_POST['contraseña'])) {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    
    // Llamar a la función para insertar datos
    $resultado = insertarDatos($correo, $contraseña);
    
    // Imprimir el resultado (puedes redirigir a otra página si lo deseas)
    echo $resultado;
}

function eliminarDato($id) {
    $conn = OpenCon();

    $id = $conn->real_escape_string($id);

    $sql = "DELETE FROM datos WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        return "Registro eliminado exitosamente";
    } else {
        return "Error al eliminar el registro: " . $conn->error;
    }

    $conn->close();
}

function editarContraseña($id, $nuevaContraseña) {
    $conn = OpenCon();

    $id = $conn->real_escape_string($id);
    $nuevaContraseña = $conn->real_escape_string($nuevaContraseña);

    $sql = "UPDATE datos SET contraseña='$nuevaContraseña' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        return "Contraseña actualizada exitosamente";
    } else {
        return "Error al actualizar la contraseña: " . $conn->error;
    }

    $conn->close();
}

?>

