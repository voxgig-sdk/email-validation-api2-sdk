<?php
declare(strict_types=1);

// EmailValidationApi2 SDK exists test

require_once __DIR__ . '/../emailvalidationapi2_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = EmailValidationApi2SDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
