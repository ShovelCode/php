/ src/Controller/HelloController.php

namespace App\Controller;

use Cake\Controller\Controller;

class HelloController extends Controller
{
    public function index()
    {
        $this->set('message', 'Hello, CakePHP!');
    }
}
