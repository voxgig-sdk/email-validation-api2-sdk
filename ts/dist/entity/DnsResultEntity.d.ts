import { EmailValidationApi2EntityBase } from '../EmailValidationApi2EntityBase';
import type { EmailValidationApi2SDK } from '../EmailValidationApi2SDK';
import type { Control } from '../types';
import type { DnsResult, DnsResultLoadMatch } from '../EmailValidationApi2Types';
declare class DnsResultEntity extends EmailValidationApi2EntityBase<DnsResult> {
    constructor(client: EmailValidationApi2SDK, entopts: any);
    make(this: DnsResultEntity): DnsResultEntity;
    load(this: any, reqmatch?: DnsResultLoadMatch, ctrl?: Control): Promise<DnsResultEntity>;
}
export { DnsResultEntity };
