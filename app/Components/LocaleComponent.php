<?php
/**
 * Created by PhpStorm.
 * User: Asoft
 * Date: 15.06.2018
 * Time: 14:12
 */

namespace App\Components;


class LocaleComponent
{
    public $locales = [];

    public function __construct()
    {
        $this->locales = config('translatable.locales');
    }
}
