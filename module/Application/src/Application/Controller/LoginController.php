<?php
/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/21/2015
 * Time: 6:49 AM
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\LoginForm;
use Zend\View\Helper\ViewModel;

class LoginController extends AbstractActionController
{
    public function loginAction(){
        $form = new LoginForm();
        return ['form'=>$form];
        //exit('opa');
    }
} 