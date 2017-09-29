<?php

class IncrementDataPointerCommand extends AbstractCommand {

    public function run()
    {
        $this->registry->incrementPointer();
        return 1;
    }
}