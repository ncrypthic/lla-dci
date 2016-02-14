<?php

namespace example;

use Ris\Dci\AbstractContext;

class DefaultContext extends AbstractContext
{
    public $data;
    
    public function execute()
    {
        echo get_class($this->data);
    }
}
