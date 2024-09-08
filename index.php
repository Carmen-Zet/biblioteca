// Cambia esta línea:
$pathsPath = realpath(FCPATH . '../app/Config/Paths.php');
// Por esta:
$pathsPath = realpath(FCPATH . 'app/Config/Paths.php');

// Cambia esta línea:
require FCPATH . '../vendor/autoload.php';
// Por esta:
require FCPATH . 'vendor/autoload.php';
