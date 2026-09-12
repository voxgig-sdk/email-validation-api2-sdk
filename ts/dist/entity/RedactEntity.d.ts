import { EmailValidationApi2EntityBase } from '../EmailValidationApi2EntityBase';
import type { EmailValidationApi2SDK } from '../EmailValidationApi2SDK';
import type { Control } from '../types';
import type { Redact, RedactCreateData } from '../EmailValidationApi2Types';
declare class RedactEntity extends EmailValidationApi2EntityBase<Redact> {
    constructor(client: EmailValidationApi2SDK, entopts: any);
    make(this: RedactEntity): RedactEntity;
    create(this: any, reqdata?: RedactCreateData, ctrl?: Control): Promise<RedactEntity>;
}
export { RedactEntity };
