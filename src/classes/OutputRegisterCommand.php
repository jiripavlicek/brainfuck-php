<?php

class OutputRegisterCommand extends AbstractCommand {

    public function run()
    {
        $value = $this->registry->get();
//        echo chr(ord('A') + $value);
        echo chr($value);
        return 1;
    }
}