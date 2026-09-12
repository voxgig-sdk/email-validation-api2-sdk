import { Context } from './Context';
declare class EmailValidationApi2Error extends Error {
    isEmailValidationApi2Error: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { EmailValidationApi2Error };
