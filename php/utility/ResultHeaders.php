<?php
declare(strict_types=1);

// EmailValidationApi2 SDK utility: result_headers

class EmailValidationApi2ResultHeaders
{
    public static function call(EmailValidationApi2Context $ctx): ?EmailValidationApi2Result
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
