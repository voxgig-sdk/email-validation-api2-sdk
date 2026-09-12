import { EmailValidationApi2EntityBase } from '../EmailValidationApi2EntityBase';
import type { EmailValidationApi2SDK } from '../EmailValidationApi2SDK';
import type { Control } from '../types';
import type { Ipn, IpnLoadMatch } from '../EmailValidationApi2Types';
declare class IpnEntity extends EmailValidationApi2EntityBase<Ipn> {
    constructor(client: EmailValidationApi2SDK, entopts: any);
    make(this: IpnEntity): IpnEntity;
    load(this: any, reqmatch?: IpnLoadMatch, ctrl?: Control): Promise<IpnEntity>;
}
export { IpnEntity };
