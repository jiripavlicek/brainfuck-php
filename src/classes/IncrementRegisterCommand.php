<?php

class IncrementRegisterCommand extends AbstractCommand {

    /**
     * @return int
     */
    public function run() : int
    {
        $this->registry->increment();
        return 1;
    }
}