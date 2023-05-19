$ cake new myapp


$ cd myapp

// src/Controller/HelloController.php

namespace App\Controller;

use Cake\Controller\Controller;

class HelloController extends Controller
{
    public function index()
    {
        $this->set('message', 'Hello, CakePHP!');
    }
}




<!-- templates/Hello/index.ctp -->

<!DOCTYPE html>
<html>
<head>
    <title>Hello CakePHP</title>
</head>
<body>
    <h1><?= $message ?></h1>
</body>
</html>


// config/routes.php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Hello', 'action' => 'index']);
});





$ cake server
