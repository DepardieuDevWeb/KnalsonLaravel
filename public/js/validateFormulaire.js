//  })658 53 73

/**
 * 
 * @param {string} name le nom du champ
 * @param {string} nameClass la div qui doit afficher les erreurs
 * @param {string} message le message à afficher si la longueur de l'élément est inférieur à
 * @param {string} type le type du champ soit, input ou textarea
 */
function invalid(event, value, element, message, typeElement = 'input', type, name) {
    let parent = element.parentElement;
    element.style.color = 'red';

    if (value === '') {
        event.preventDefault();
        if(!parent.querySelector(typeElement).classList.contains('is-invalid')){
            parent.querySelector(typeElement).classList.add('is-invalid');
        }else{
            return
        }
        if(type === 'email'){
            element.innerHTML = `L\'${name} ne peut être vide`;
        }else{
            element.innerHTML = `Le ${name} ne peut être vide`;
        }   
    } else if (type === 'email' && !isValidEmail(value)) {
        event.preventDefault();
        if(!parent.querySelector(typeElement).classList.contains('is-invalid')){
            parent.querySelector(typeElement).classList.add('is-invalid');
        }else{
            return
        }
        element.innerHTML = 'L\'adresse e-mail n\'est pas valide';
    } else if (type === 'password' && value.length <= 7) {
        event.preventDefault();
        if(!parent.querySelector(typeElement).classList.contains('is-invalid')){
            parent.querySelector(typeElement).classList.add('is-invalid');
        }else{
            return
        }        
        element.innerHTML = message;
    } else if (type === 'text' && value.length <= 3) {
        event.preventDefault();
        if(!parent.querySelector(typeElement).classList.contains('is-invalid')){
            parent.querySelector(typeElement).classList.add('is-invalid');
        }else{
            return
        }        
        element.innerHTML = message;
    }
}

function isValidEmail(email) {
    // Utilise une expression régulière pour vérifier le format de l'e-mail
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validateForm(e) {
    e.preventDefault();
    let formData = new FormData(e.target);
    let username = formData.get('username')
    let number_phone = formData.get('number_phone')
    let message = formData.get('message')
    let password = formData.get('password')

    invalid(username, document.querySelector('.is_invalid_js_username'), 'Doit etre superieur à 3')
    invalid(e, username, document.querySelector('.is_invalid_js_username'), 'Doit etre superieur à 3', 'input', 'text', 'titre de l\'album');

    invalid(number_phone, document.querySelector('.is_invalid_js_number_phone'), 'Doit etre superieur à 3')
    invalid(message, document.querySelector('.is_invalid_js_message'), 'Doit etre superieur à 10', 'textarea')
    invalid(password, document.querySelector('.is_invalid_js_password'), 'Doit etre superieur à 8')
    
    // if(username === ''){
    //     let children = document.querySelector('#username')
    //     let parent = children.parentElement
        
    //         let div = document.createElement('div')
    //         div.style.color = 'red';
    //         div.innerHTML = 'Ne peut etre vide';
    //         parent.append(div)
    //         children.classList.add('is-invalid')
    // }
}