package core

type EmailValidationApi2Error struct {
	IsEmailValidationApi2Error bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewEmailValidationApi2Error(code string, msg string, ctx *Context) *EmailValidationApi2Error {
	return &EmailValidationApi2Error{
		IsEmailValidationApi2Error: true,
		Sdk:              "EmailValidationApi2",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *EmailValidationApi2Error) Error() string {
	return e.Msg
}
