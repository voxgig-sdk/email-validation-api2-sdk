<?php
declare(strict_types=1);

// EmailValidationApi2 SDK utility: prepare_body

class EmailValidationApi2PrepareBody
{
    public static function call(EmailValidationApi2Context $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
