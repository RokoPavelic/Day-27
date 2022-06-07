<?php
// 1.
class Computer
{
    // 2.
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = 'off';

    // 6.
    public function switchOff()
    {
        $this->status = 'off';
    }

    // 7.
    public function toggleSwitch()
    {
        $this->status = $this->status == 'off' ? 'on' : 'off';
    }
} 