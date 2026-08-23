# EmailValidationApi2 SDK feature factory

from emailvalidationapi2_sdk.feature.base_feature import EmailValidationApi2BaseFeature
from emailvalidationapi2_sdk.feature.test_feature import EmailValidationApi2TestFeature


_FEATURES = {
    "base": lambda: EmailValidationApi2BaseFeature(),
    "test": lambda: EmailValidationApi2TestFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
