<?php

namespace Utils;

use Hurah\Types\Type\PlainText;

class Text
{

    public static function concat(...$params): PlainText
    {
        $oPlainText = new PlainText();
        foreach ($params as $item) {
            if (is_string($item)) {
                $oPlainText->append($item);
            }
        }
        return $oPlainText;
    }
}
