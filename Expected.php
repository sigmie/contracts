<?php

namespace Sigmie\Contracts;

interface Expected
{
    public static function createFromResponse(): Expected;
}
