<?php

namespace App\presenters\contracts;

trait Presentable
{
    protected $presenterInstance;
    public function present()
    {
        if(!$this->presenter || !class_exists($this->presenter)){
            throw new \Exception("presenter not fount !!");
        }

        if(!$this->presenterInstance){
            $presenterInstance = new $this->presenter($this);
        }

        return $presenterInstance;
    }
}
