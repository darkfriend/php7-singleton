<?php

namespace darkfriend\helpers;


/**
 * Trait Singleton
 * @package darkfriend\helpers
 * @author darkfriend <hi@darkfriend.ru>
 * @version 1.0.8
 */
trait Singleton
{
    /** @var self */
    private static $_instance;

    /**
     * Singleton
     * @param bool $newSession create new instance
     * @param array $options
     * @return self
     * @throws \Exception
     */
    public static function getInstance($newSession = false, $options = [])
    {
        if (!static::$_instance || $newSession) {
            static::$_instance = new static($options);
        }
        return self::$_instance;
    }

    /**
     * Constructor
     * @param array $options
     */
    protected function __construct($options = [])
    {}
}