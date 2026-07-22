
import { Context } from './Context'


class EmailValidationApi2Error extends Error {

  isEmailValidationApi2Error = true

  sdk = 'EmailValidationApi2'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  EmailValidationApi2Error
}

