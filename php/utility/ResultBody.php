<?php
declare(strict_types=1);

// EmailValidationApi2 SDK utility: result_body

class EmailValidationApi2ResultBody
{
    public static function call(EmailValidationApi2Context $ctx): ?EmailValidationApi2Result
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
