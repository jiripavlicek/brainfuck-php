<?php

class InputRegisterCommand extends AbstractCommand {

    /**
     * @return int
     */
    public function run() : int
    {
        $value = readline();
        $this->registry->set($value);
        return 1;
    }
}