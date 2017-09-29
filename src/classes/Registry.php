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

    /**
     * @param int $value
     */
    public function set($value)
    {
        $this->setByIndex($this->pointer, $value);
    }

    /**
     * @param int $index
     * @return int
     */
    public function getByIndex($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : 0;
    }

    /**
     * @param int $index
     * @param int $value
     */
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