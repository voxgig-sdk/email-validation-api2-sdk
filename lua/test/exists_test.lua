-- EmailValidationApi2 SDK exists test

local sdk = require("email-validation-api2_sdk")

describe("EmailValidationApi2SDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
