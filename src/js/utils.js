const regexPseudo = /^[a-zA-Z\d\S]{3,15}$/;

/**
 * Validate input's user for his pseudo
 * @param {HTMLInputElement} input 
 * @param {HTMLParagraphElement} message 
 */
export const validInputuser = (input, message) => {
    
    input.addEventListener("input", () => {
    
        message.textContent = "";
        
        if(input.value){
            
            if(regexPseudo.test(input.value)){
                if(message.classList.contains("msg-error")){
                    message.classList.replace("msg-error", "msg-right")
                } 
                message.classList.add("msg-right");
                message.textContent = `Votre pseudo est valide`;
            } else {
                if(message.classList.contains("msg-right")){
                    message.classList.replace("msg-right", "msg-error")
                } 
                message.classList.add("msg-error");
                message.textContent = `Votre pseudo n'est pas valide`;
            }
        }
    
    });
    
}

/**
 * Validate input's user for his message
 * @param {HTMLInputElement} input 
 * @param {HTMLParagraphElement} message 
 */
export const validInputMessage = (input, message) => {
    
    input.addEventListener("input", () => {
    
        message.textContent = "";
        
        if(input.value){
            
            if(input.value.length > 5 && input.value.length < 255){
                if(message.classList.contains("msg-error")){
                    message.classList.replace("msg-error", "msg-right")
                }
                message.classList.add("msg-right"); 
                message.textContent = `Votre message est d'une longueur valide`;
            } else {
                if(message.classList.contains("msg-right")){
                    message.classList.replace("msg-right", "msg-error")
                } 
                message.classList.add("msg-error");
                message.textContent = `Votre message est trop long ou trop court`;
            }
        }
    
    });

}
