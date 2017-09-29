<?php

class OutputRegisterCommand extends AbstractCommand {

    public function run()
    {
        $value = $this->registry->get();
        $this->output .= chr($value);
        return 1;
    }
}