# EmailValidationApi2 SDK utility: make_context

from emailvalidationapi2_sdk.core.context import EmailValidationApi2Context


def make_context_util(ctxmap, basectx):
    return EmailValidationApi2Context(ctxmap, basectx)
