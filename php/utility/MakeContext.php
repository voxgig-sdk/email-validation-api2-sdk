<?php
declare(strict_types=1);

// EmailValidationApi2 SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class EmailValidationApi2MakeContext
{
    public static function call(array $ctxmap, ?EmailValidationApi2Context $basectx): EmailValidationApi2Context
    {
        return new EmailValidationApi2Context($ctxmap, $basectx);
    }
}
