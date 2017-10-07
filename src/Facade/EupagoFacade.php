<?php

namespace PedroLadeira\Eupago\Facade;

use Illuminate\Support\Facades\Facade;

class Eupago extends Facade {

    protected static function getFacadeAccessor() {
        return 'eupago-laravel-package';
    }

}
