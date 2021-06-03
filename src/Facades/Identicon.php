<?php

namespace Lshorz\LaravelIdenticon\Facades;

use Illuminate\Support\Facades\Facade;


class Identicon extends Facade
{
    /**
     * @method static $this identiconImage(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
     * @method static $this identiconBase64(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
     * @method static $this identiconResource(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
     */
    protected static function getFacadeAccessor()
    {
        return 'Identicon';
    }
}
