<?php

namespace Drongotech\ResponseParser;

use Drongotech\ResponseParser\Traits\ErrorParser;
use Drongotech\ResponseParser\Traits\FileUploadTrait;
use Drongotech\ResponseParser\Traits\RequestTraits;
use Drongotech\ResponseParser\Traits\ResponseTrait;

class DefaultService
{
    use ErrorParser, RequestTraits, ResponseTrait, FileUploadTrait;
    protected $colors = [
        'blue', 'green', 'yellow', 'navyblue', 'black',
    ];

    protected $existing_colors = [];

    public function random_color_part()
    {
        do {
            $color = str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
            $existing = in_array($color, $this->existing_colors);
            $this->existing_colors[] = $color;
        } while ($existing);

        return $color;

    }

    public function random_color()
    {
        return '#' . $this->random_color_part() . $this->random_color_part() . $this->random_color_part();
    }

}
