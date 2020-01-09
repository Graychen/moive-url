<?php

namespace graychen\moive;

trait singletontrait
{
    public static function getInstance()
    {
        static $instance = null;

        if (! isset($instance)) {
            $instance = new static();
        }

        return $instance;
    }
}