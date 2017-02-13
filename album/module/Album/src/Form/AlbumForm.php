<?php
namespace Album\Form;

use Zend\Form\Form;
use Zend\Form\Fieldset;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // Ignore the name provided to the constructor
        parent::__construct('album');
        
        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);
        $this->add([
            'name' => 'title',
            'type' => 'text',
            'options' => [
                'label' => 'Title',
            ],
        ]);
        $this->add([
            'name' => 'artist',
            'type' => 'text',
            'options' => [
                'label' => 'Artist',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}