package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewDnsResultEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewDomainEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewEmailValidateEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewGenerateEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewGrammarEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewIpnEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewRedactEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewSslEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewUtilityEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

var NewWhoiEntityFunc func(client *EmailValidationApi2SDK, entopts map[string]any) EmailValidationApi2Entity

