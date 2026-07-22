# EmailValidationApi2 SDK utility: make_context
require_relative '../core/context'
module EmailValidationApi2Utilities
  MakeContext = ->(ctxmap, basectx) {
    EmailValidationApi2Context.new(ctxmap, basectx)
  }
end
