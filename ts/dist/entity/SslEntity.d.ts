import { EmailValidationApi2EntityBase } from '../EmailValidationApi2EntityBase';
import type { EmailValidationApi2SDK } from '../EmailValidationApi2SDK';
import type { Control } from '../types';
import type { Ssl, SslListMatch } from '../EmailValidationApi2Types';
declare class SslEntity extends EmailValidationApi2EntityBase<Ssl> {
    constructor(client: EmailValidationApi2SDK, entopts: any);
    make(this: SslEntity): SslEntity;
    list(this: any, reqmatch?: SslListMatch, ctrl?: Control): Promise<SslEntity[]>;
}
export { SslEntity };
