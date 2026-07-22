<?php
declare(strict_types=1);

// EmailValidationApi2 SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

EmailValidationApi2Utility::setRegistrar(function (EmailValidationApi2Utility $u): void {
    $u->clean = [EmailValidationApi2Clean::class, 'call'];
    $u->done = [EmailValidationApi2Done::class, 'call'];
    $u->make_error = [EmailValidationApi2MakeError::class, 'call'];
    $u->feature_add = [EmailValidationApi2FeatureAdd::class, 'call'];
    $u->feature_hook = [EmailValidationApi2FeatureHook::class, 'call'];
    $u->feature_init = [EmailValidationApi2FeatureInit::class, 'call'];
    $u->fetcher = [EmailValidationApi2Fetcher::class, 'call'];
    $u->make_fetch_def = [EmailValidationApi2MakeFetchDef::class, 'call'];
    $u->make_context = [EmailValidationApi2MakeContext::class, 'call'];
    $u->make_options = [EmailValidationApi2MakeOptions::class, 'call'];
    $u->make_request = [EmailValidationApi2MakeRequest::class, 'call'];
    $u->make_response = [EmailValidationApi2MakeResponse::class, 'call'];
    $u->make_result = [EmailValidationApi2MakeResult::class, 'call'];
    $u->make_point = [EmailValidationApi2MakePoint::class, 'call'];
    $u->make_spec = [EmailValidationApi2MakeSpec::class, 'call'];
    $u->make_url = [EmailValidationApi2MakeUrl::class, 'call'];
    $u->param = [EmailValidationApi2Param::class, 'call'];
    $u->prepare_auth = [EmailValidationApi2PrepareAuth::class, 'call'];
    $u->prepare_body = [EmailValidationApi2PrepareBody::class, 'call'];
    $u->prepare_headers = [EmailValidationApi2PrepareHeaders::class, 'call'];
    $u->prepare_method = [EmailValidationApi2PrepareMethod::class, 'call'];
    $u->prepare_params = [EmailValidationApi2PrepareParams::class, 'call'];
    $u->prepare_path = [EmailValidationApi2PreparePath::class, 'call'];
    $u->prepare_query = [EmailValidationApi2PrepareQuery::class, 'call'];
    $u->result_basic = [EmailValidationApi2ResultBasic::class, 'call'];
    $u->result_body = [EmailValidationApi2ResultBody::class, 'call'];
    $u->result_headers = [EmailValidationApi2ResultHeaders::class, 'call'];
    $u->transform_request = [EmailValidationApi2TransformRequest::class, 'call'];
    $u->transform_response = [EmailValidationApi2TransformResponse::class, 'call'];
});
