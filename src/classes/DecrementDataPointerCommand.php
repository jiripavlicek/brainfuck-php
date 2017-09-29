<?php

class DecrementDataPointerCommand extends AbstractCommand {

    /**
     * @return int
     */
    public function run() : int
    {
        $this->registry->decrementPointer();
        return 1;
    }
}