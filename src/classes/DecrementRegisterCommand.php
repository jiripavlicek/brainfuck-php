<?php

class DecrementRegisterCommand extends AbstractCommand {

    /**
     * @return int
     */
    public function run() : int
    {
        $this->registry->decrement();
        return 1;
    }
}