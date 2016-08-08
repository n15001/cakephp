<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class HeloController extends AppController
{
    public function index()
    {
//        $this->set('message', 'Hello! this is sample page. ;-)');
//        $hage = $this->request->data('hoge');
        $str = $this->request->data('hoge');
        if ($str != null){
            $str = $this->request->data['hoge'];
            $this->set('message', 'you typed:' . $str);
        } else {
            $this->set('message','please type...');
        }
    }
}
