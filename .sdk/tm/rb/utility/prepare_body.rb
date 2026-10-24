# EmailValidationApi2 SDK utility: prepare_body
require_relative 'media'
module EmailValidationApi2Utilities
  PrepareBody = ->(ctx) {
    return nil unless ctx.op.input == "data"
    return EmailValidationApi2Utilities.raw_body(ctx.reqdata) if EmailValidationApi2Utilities.raw_request?(ctx.point)
    ctx.utility.transform_request.call(ctx)
  }
end
