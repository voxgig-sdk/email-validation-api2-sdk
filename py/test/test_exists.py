# EmailValidationApi2 SDK exists test

import pytest
from emailvalidationapi2_sdk import EmailValidationApi2SDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = EmailValidationApi2SDK.test(None, None)
        assert testsdk is not None
