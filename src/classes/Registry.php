<?php

class Registry {

    private $data = [];
    private $pointer = 0;

    public function incrementPointer()
    {
        $this->pointer++;
    }

    public function decrementPointer()
    {
        $this->pointer--;
    }

    public function get()
    {
        return $this->getByIndex($this->pointer);
    }

    public function set($value)
    {
        $this->setByIndex($this->pointer, $value);
    }

    public function getByIndex($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : 0;
    }

    public function setByIndex($index, $value)
    {
        $this->data[$index] = $value;
    }

    public function increment()
    {
        $this->set($this->get() + 1);
    }

    public function decrement()
    {
        $this->set($this->get() - 1);
    }
}