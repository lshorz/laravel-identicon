<?php

use Lshorz\LaravelIdenticon\Identicon;

if (!function_exists('identicon_img')) {
    /**
     * 显示Identicon头像
     *
     * @param string $value
     * @param int $size 头像大小
     * @param string $backgroundColor 背景色 ['#FFF'|'rgba(255, 255, 255, 0.9)']
     * @param float $padding
     *
     * @return \Illuminate\Http\Response
     */
    function identicon_img(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
    {
        return app(Identicon::class)->getIdenticonImage($value, $size, $backgroundColor, $padding);
    }
}

if (!function_exists('identicon_base64')) {
    /**
     * 显示Identicon头像base64图像
     *
     * @param string $value
     * @param int $size 头像大小
     * @param string $backgroundColor 背景色 ['#FFF'|'rgba(255, 255, 255, 0.9)']
     * @param float $padding
     *
     * @return string
     */
    function identicon_base64(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
    {
        return app(Identicon::class)->getIdenticonBase64($value, $size, $backgroundColor, $padding);
    }
}


if (!function_exists('identicon_resource')) {
    /**
     * 显示Identicon图像资源
     *
     * @param string $value
     * @param int $size 头像大小
     * @param string $backgroundColor 背景色 ['#FFF'|'rgba(255, 255, 255, 0.9)']
     * @param float $padding
     *
     * @return resource
     */
    function identicon_resource(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
    {
        return app(Identicon::class)->getIdenticonResource($value, $size, $backgroundColor, $padding);
    }
}

