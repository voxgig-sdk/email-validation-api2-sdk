# EmailValidationApi2 SDK exists test

require "minitest/autorun"
require_relative "../EmailValidationApi2_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = EmailValidationApi2SDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
