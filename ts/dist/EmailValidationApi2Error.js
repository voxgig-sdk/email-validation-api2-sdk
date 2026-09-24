"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.EmailValidationApi2Error = void 0;
class EmailValidationApi2Error extends Error {
    isEmailValidationApi2Error = true;
    sdk = 'EmailValidationApi2';
    code;
    ctx;
    status = -1;
    // `err.notFound` rather than a magic number at every call site.
    get notFound() { return 404 === this.status; }
    constructor(code, msg, ctx) {
        super(msg);
        this.code = code;
        this.ctx = ctx;
    }
}
exports.EmailValidationApi2Error = EmailValidationApi2Error;
//# sourceMappingURL=EmailValidationApi2Error.js.map