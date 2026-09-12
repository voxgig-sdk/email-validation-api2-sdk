import { EmailValidationApi2EntityBase } from '../EmailValidationApi2EntityBase';
import type { EmailValidationApi2SDK } from '../EmailValidationApi2SDK';
import type { Control } from '../types';
import type { EmailValidate, EmailValidateLoadMatch } from '../EmailValidationApi2Types';
declare class EmailValidateEntity extends EmailValidationApi2EntityBase<EmailValidate> {
    constructor(client: EmailValidationApi2SDK, entopts: any);
    make(this: EmailValidateEntity): EmailValidateEntity;
    load(this: any, reqmatch?: EmailValidateLoadMatch, ctrl?: Control): Promise<EmailValidateEntity>;
}
export { EmailValidateEntity };
