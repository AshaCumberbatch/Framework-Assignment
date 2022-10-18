<?php

interface Observable_Interface
{
    public function attach(Observer_Interface $o);

    public function detach(Observer_Interface $o);

    public function notify();
}