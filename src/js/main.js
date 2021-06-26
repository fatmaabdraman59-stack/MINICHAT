import _ from 'lodash';
import * as util from './utils';

const $inputPseudo = document.querySelector("#pseudo");
const $inputMsg = document.querySelector("#message");
const $infoUser = document.querySelector("#infoUser");
const $infoMsg = document.querySelector("#infoMsg");
const $feed = document.querySelector("#feed");

// Manage body's loading & add a animation for display of last message
window.addEventListener("load", () => document.body.classList.remove("loading"));

for(let i = 0; i < $feed.children.length; i++){
    if($feed.children[i] !== $feed.children[1]){   
        $feed.children[i].classList.remove("last-msg");
    }
}

// Check input's pseudo
util.validInputuser($inputPseudo, $infoUser);

// Check input's message
util.validInputMessage($inputMsg, $infoMsg);
