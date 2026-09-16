# EmailValidationApi2 SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module EmailValidationApi2Features
  def self.make_feature(name)
    case name
    when "base"
      EmailValidationApi2BaseFeature.new
    when "ratelimit"
      EmailValidationApi2RatelimitFeature.new
    when "retry"
      EmailValidationApi2RetryFeature.new
    when "test"
      EmailValidationApi2TestFeature.new
    when "timeout"
      EmailValidationApi2TimeoutFeature.new
    else
      EmailValidationApi2BaseFeature.new
    end
  end
end
