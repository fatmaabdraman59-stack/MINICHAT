import * as util from './utils';

const $inputPseudo = document.querySelector("#pseudo");
const $inputMsg = document.querySelector("#message");
const $infoUser = document.querySelector("#infoUser");
const $infoMsg = document.querySelector("#infoMsg");

// Check input's pseudo
util.validInputuser($inputPseudo, $infoUser);

// Check input's message
util.validInputMessage($inputMsg, $infoMsg);