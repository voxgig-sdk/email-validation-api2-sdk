<?php
declare(strict_types=1);

// EmailValidationApi2 SDK base feature

class EmailValidationApi2BaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(EmailValidationApi2Context $ctx, array $options): void {}
    public function PostConstruct(EmailValidationApi2Context $ctx): void {}
    public function PostConstructEntity(EmailValidationApi2Context $ctx): void {}
    public function SetData(EmailValidationApi2Context $ctx): void {}
    public function GetData(EmailValidationApi2Context $ctx): void {}
    public function GetMatch(EmailValidationApi2Context $ctx): void {}
    public function SetMatch(EmailValidationApi2Context $ctx): void {}
    public function PrePoint(EmailValidationApi2Context $ctx): void {}
    public function PreSpec(EmailValidationApi2Context $ctx): void {}
    public function PreRequest(EmailValidationApi2Context $ctx): void {}
    public function PreResponse(EmailValidationApi2Context $ctx): void {}
    public function PreResult(EmailValidationApi2Context $ctx): void {}
    public function PreDone(EmailValidationApi2Context $ctx): void {}
    public function PreUnexpected(EmailValidationApi2Context $ctx): void {}
}
