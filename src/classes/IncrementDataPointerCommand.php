<?php

class IncrementDataPointerCommand extends AbstractCommand {

    /**
     * @return int
     */
    public function run() : int
    {
        $this->registry->incrementPointer();
        return 1;
    }
}