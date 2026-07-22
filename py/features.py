# EmailValidationApi2 SDK feature factory

from feature.base_feature import EmailValidationApi2BaseFeature
from feature.test_feature import EmailValidationApi2TestFeature


def _make_feature(name):
    features = {
        "base": lambda: EmailValidationApi2BaseFeature(),
        "test": lambda: EmailValidationApi2TestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
