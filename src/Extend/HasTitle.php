<?php

namespace Statamic\Extend;

use Statamic\Support\Str;

trait HasTitle
{
    protected static $title;

    public static function title()
    {
        return static::$title ?? Str::humanize(static::handle());
    }
}
