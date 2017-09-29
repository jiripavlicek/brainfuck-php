<?php

class OutputRegisterCommand extends AbstractCommand {

    /**
     * @return int
     */
    public function run() : int
    {
        $value = $this->registry->get();
        $this->output .= chr($value);
        return 1;
    }
}