<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class HeloController extends AppController
{
    public function index()
    {
<<<<<<< HEAD
        $id = $this->request->query('id');
        $name = $this->request->query('name');
        $this->set('message', 'your id:' . $id . ', name:' . $name);
=======
//        $this->set('message', 'Hello! this is sample page. ;-)');
//        $hage = $this->request->data('hoge');
        $str = $this->request->data('hoge');
        if ($str != null){
            $str = $this->request->data['hoge'];
            $this->set('message', 'you typed:' . $str);
        } else {
            $this->set('message','please type...');
        }
>>>>>>> db2d6b930da33477e425cb7cea06f961eaa80381
    }
}
