<?php

if (!function_exists('flash')) {
    function flash($type, $message)
    {
        session()->flash('alert-type', $type);
        session()->flash('message', $message);
    }
}
