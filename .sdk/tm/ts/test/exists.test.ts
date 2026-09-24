
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { EmailValidationApi2SDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = EmailValidationApi2SDK.test()
    equal(testsdk instanceof EmailValidationApi2SDK, true,
      'EmailValidationApi2SDK.test() must return a client synchronously')
  })

})
