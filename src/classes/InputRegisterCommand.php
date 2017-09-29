<?php

class InputRegisterCommand extends AbstractCommand {

    public function run()
    {
        $value = readline();
        $this->registry->set($value);
        return 1;
    }
}