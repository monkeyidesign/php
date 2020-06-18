<?php

namespace App\Format;

class JSON extends BaseFormat implements FromStringInterface, NamedFormatInterface {
    public function convert()
    {
        return json_encode($this->data);
    }
    public function convertFormatString($string){
        return json_encode($string, true);
    }
    public function getName()
    {
        // TODO: Implement getName() method.
        return 'JSON';
    }
}