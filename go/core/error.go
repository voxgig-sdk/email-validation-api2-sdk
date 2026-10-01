package core

import "encoding/json"

type EmailValidationApi2Error struct {
	IsEmailValidationApi2Error bool
	Sdk                string
	Code               string
	Msg                string
	// Reachable for a debugger, invisible to a serialiser: the context holds
	// the live spec and options, and an error is what gets logged.
	Ctx    *Context `json:"-"`
	Result any
	Spec   any
}

func NewEmailValidationApi2Error(code string, msg string, ctx *Context) *EmailValidationApi2Error {
	return &EmailValidationApi2Error{
		IsEmailValidationApi2Error: true,
		Sdk:                "EmailValidationApi2",
		Code:               code,
		Msg:                msg,
		Ctx:                ctx,
	}
}

func (e *EmailValidationApi2Error) Error() string {
	return e.Msg
}

// What makeError attached is already cleaned; the context is not part of
// the record.
func (e *EmailValidationApi2Error) Record() map[string]any {
	return map[string]any{
		"sdk":     e.Sdk,
		"code":    e.Code,
		"message": e.Msg,
		"result":  e.Result,
		"spec":    e.Spec,
	}
}

func (e *EmailValidationApi2Error) MarshalJSON() ([]byte, error) {
	return json.Marshal(e.Record())
}
