<?php
declare(strict_types=1);

// EmailValidationApi2 SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class EmailValidationApi2Features
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new EmailValidationApi2BaseFeature();
            case "test":
                return new EmailValidationApi2TestFeature();
            default:
                return new EmailValidationApi2BaseFeature();
        }
    }
}
