-- EmailValidationApi2 SDK error

local EmailValidationApi2Error = {}
EmailValidationApi2Error.__index = EmailValidationApi2Error


function EmailValidationApi2Error.new(code, msg, ctx)
  local self = setmetatable({}, EmailValidationApi2Error)
  self.is_sdk_error = true
  self.sdk = "EmailValidationApi2"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function EmailValidationApi2Error:error()
  return self.msg
end


function EmailValidationApi2Error:__tostring()
  return self.msg
end


return EmailValidationApi2Error
