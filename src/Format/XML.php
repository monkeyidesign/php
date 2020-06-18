<?php

namespace App\Format;

class XML extends BaseFormat implements NamedFormatInterface{
    public function convert()
    {
        $result = '';

        foreach ($this->data as $key => $value) {
            $result .= '<'.$key.'>'.$value.'</'.$key.'>';
        }

        return htmlspecialchars($result);
    }
    public function getName()
    {
        // TODO: Implement getName() method.
        return 'XML';
    }
}