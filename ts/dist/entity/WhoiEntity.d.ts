import { EmailValidationApi2EntityBase } from '../EmailValidationApi2EntityBase';
import type { EmailValidationApi2SDK } from '../EmailValidationApi2SDK';
import type { Control } from '../types';
import type { Whoi, WhoiListMatch } from '../EmailValidationApi2Types';
declare class WhoiEntity extends EmailValidationApi2EntityBase<Whoi> {
    constructor(client: EmailValidationApi2SDK, entopts: any);
    make(this: WhoiEntity): WhoiEntity;
    list(this: any, reqmatch?: WhoiListMatch, ctrl?: Control): Promise<WhoiEntity[]>;
}
export { WhoiEntity };
