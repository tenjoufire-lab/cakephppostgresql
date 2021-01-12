<?php

namespace App\Controller\Admin;
 
use Cake\Controller\Controller;
 
class AdminController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
 
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication'); // 追加
    }
}