<?php

namespace App\Middleware\Contract;

use hisorange\BrowserDetect\Parser as Browser;

interface MiddlewareInterface{
    public function handle();
}