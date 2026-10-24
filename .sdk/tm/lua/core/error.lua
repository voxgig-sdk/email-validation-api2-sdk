-- EmailValidationApi2 SDK error

local json = require("dkjson")

local EmailValidationApi2Error = {}
EmailValidationApi2Error.__index = EmailValidationApi2Error

-- Reachable for a debugger, absent from the table itself: the context holds
-- the live spec and options, and an error is what gets dumped or encoded.
local CONTEXT = setmetatable({}, { __mode = "k" })


function EmailValidationApi2Error.new(code, msg, ctx)
  local self = setmetatable({}, EmailValidationApi2Error)
  self.is_sdk_error = true
  self.sdk = "EmailValidationApi2"
  self.code = code or ""
  self.msg = msg or ""
  self.result = nil
  self.spec = nil
  self.status = -1
  CONTEXT[self] = ctx
  return self
end


function EmailValidationApi2Error:context()
  return CONTEXT[self]
end


function EmailValidationApi2Error:error()
  return self.msg
end


function EmailValidationApi2Error:not_found()
  return 404 == self.status
end


-- What make_error attached is already cleaned; the context is not part of
-- the record.
function EmailValidationApi2Error:to_table()
  return {
    sdk = self.sdk,
    code = self.code,
    msg = self.msg,
    status = self.status,
    result = self.result,
    spec = self.spec,
  }
end


function EmailValidationApi2Error:to_json()
  return json.encode(self:to_table())
end


function EmailValidationApi2Error:__tostring()
  return self.msg
end


function EmailValidationApi2Error.__tojson(self)
  return self:to_json()
end


return EmailValidationApi2Error
