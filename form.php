<?php

/**
 * Class Form
 * Përmet de générer un formulaire rapidement et simplement
 */

class Form{
    
    
    /**
     * @var $data array Donnee utilisees par le formulaire
     */
    protected $data;
    
    /**
     * @var string Tag utilise pour entourer les champs
     */
    protected $surround = 'p';
    
    public function __construct($data = array()) {
        $this->data = $data;
    }
    
    /**
     * @param $html string Code HTML a entourer
     * @return string
     */
    protected function surround($html) {
		return "<{$this->surround}>{$html}<{$this->surround}>";
    }
    
    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    
    public function input($name) {
        return $this->surround('<input type="text" name="'. $name . '" value="' . $this->getValue($name) . '"');
    }
    
    /**
     * @return string
     */
    
    public function submit() {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
    
}

