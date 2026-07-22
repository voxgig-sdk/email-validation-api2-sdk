# EmailValidationApi2 SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module EmailValidationApi2Features
  def self.make_feature(name)
    case name
    when "base"
      EmailValidationApi2BaseFeature.new
    when "test"
      EmailValidationApi2TestFeature.new
    else
      EmailValidationApi2BaseFeature.new
    end
  end
end
