<?php


namespace Lshorz\LaravelIdenticon;

use Jdenticon\Identicon as Jdenticon;

class Identicon
{
    /**
     * @var Jdenticon
     */
    protected Jdenticon $identicon;

    public function __construct()
    {
        $this->identicon = new Jdenticon();
    }

    /**
     * 显示Identicon头像图片
     *
     * @param string $value
     * @param int $size 头像大小
     * @param string $backgroundColor 背景色 ['#FFF'|'rgba(255, 255, 255, 0.9)']
     * @param float $padding
     *
     * @return \Illuminate\Http\Response
     */
    public function identiconImage(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
    {
        $this->identicon->setOptions([
            'value' => $value,
            'size' => $size,
            'style' => [
                'backgroundColor' => $bgColor,
                'padding' => $padding
            ]
        ]);

        $icon = $this->identicon->getImageData();
        return response()->make($icon, 200, ['Content-Type' => 'image/png']);
    }

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
    public function identiconBase64(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
    {
        $this->identicon->setOptions([
            'value' => $value,
            'size' => $size,
            'style' => [
                'backgroundColor' => $backgroundColor,
                'padding' => $padding
            ]
        ]);

        return $this->identicon->getImageDataUri();
    }

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
    public function identiconResource(string $value, int $size = 120, string $backgroundColor = '#FFF', float $padding = 0.08)
    {
        $this->identicon->setOptions([
            'value' => $value,
            'size' => $size,
            'style' => [
                'backgroundColor' => $backgroundColor,
                'padding' => $padding
            ]
        ]);

        return $this->identicon->getImageData();
    }
}
