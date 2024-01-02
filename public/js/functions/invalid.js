
/**
 * 
 * @param {string} name le nom du champ
 * @param {string} nameClass la div qui doit afficher les erreurs
 * @param {string} message le message à afficher si la longueur de l'élément est inférieur à
 * @param {string} type le type du champ soit, input ou textarea
 */
export function invalid(name, nameClass, message, type = 'input'){
    let parent = nameClass.parentElement
    nameClass.style.color = 'red';
    if(name === ''){
        parent.querySelector(type).classList.add('is-invalid')
        nameClass.innerHTML = `Le champ ${name} ne peut etre vide`
    }else if(name.length <= 3){
        parent.querySelector(type).classList.add('is-invalid')
        nameClass.innerHTML = message
    }
 }