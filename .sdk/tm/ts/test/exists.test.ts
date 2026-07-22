
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { EmailValidationApi2SDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await EmailValidationApi2SDK.test()
    equal(null !== testsdk, true)
  })

})
