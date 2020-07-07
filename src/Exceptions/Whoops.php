<?php

namespace Phplite\Exceptions;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class Whoops
{
    /**
     * Whoops constructor
     * 
     */
    private function __construct() {}

    /**
     * Handle the whoops error
     * 
     * @return void
     */
    public static function handle() {
        $whoops = new Run();
        $whoops->prependHandler(new PrettyPageHandler);
        $whoops->register();
    }
}

