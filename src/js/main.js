import * as util from './utils';

const $inputPseudo = document.querySelector("#pseudo");
const $inputMsg = document.querySelector("#message");
const $infoUser = document.querySelector("#infoUser");
const $infoMsg = document.querySelector("#infoMsg");

// Check input's pseudo
$inputPseudo.addEventListener("input", () => {
    
    $infoUser.textContent = "";
    
    if($inputPseudo.value){
        
        if(util.regexPseudo.test($inputPseudo.value)){
            if($infoUser.classList.contains("msg-error")){
                $infoUser.classList.replace("msg-error", "msg-right")
            } 
            //$infoUser.classList.add("msg-right");
            $infoUser.textContent = `Votre pseudo est valide`;
        } else {
            if($infoUser.classList.contains("msg-right")){
                $infoUser.classList.replace("msg-right", "msg-error")
            } 
            //$infoUser.classList.add("msg-error");
            $infoUser.textContent = `Votre pseudo n'est pas valide`;
        }
    }

});

// Check input's message
$inputMsg.addEventListener("input", () => {
    
    $infoMsg.textContent = "";
    
    if($inputMsg.value){
        
        if($inputMsg.value.length > 5 && $inputMsg.value.length < 255){
            if($infoMsg.classList.contains("msg-error")){
                $infoMsg.classList.replace("msg-error", "msg-right")
            }
            $infoMsg.classList.add("msg-right"); 
            $infoMsg.textContent = `Votre message est d'une longueur valide`;
        } else {
            if($infoMsg.classList.contains("msg-right")){
                $infoMsg.classList.replace("msg-right", "msg-error")
            } 
            $infoMsg.classList.add("msg-error");
            $infoMsg.textContent = `Votre message est trop long ou trop court`;
        }
    }

});