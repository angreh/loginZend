<?php
/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/20/2015
 * Time: 9:09 PM
 */

namespace Application\Form;

use Zend\Form\Form;

class LoginForm extends Form {
    public function __construct($name = null){
        parent::__construct('login');

        $this->add([
            'name' => 'login',
            'type' => 'text',
            'options' => [
                'label' => 'Login'
            ]
        ]);

        $this->add([
            'name' => 'password',
            'type' => 'password',
            'options' => [
                'label' => 'Senha'
            ]
        ]);

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Enviar'
            ),
        ));

    }
} 