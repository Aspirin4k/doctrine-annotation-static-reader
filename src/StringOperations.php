<?php

namespace AnnotationStaticReader;

class StringOperations
{
    public static function withTabs(string $string, int $tabs = 1): string
    {
        return str_repeat(' ', 4 * $tabs) . $string;
    }
}
