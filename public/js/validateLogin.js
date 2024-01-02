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

function validateLogin(e) {
    let formData = new FormData(e.target);
    let password = formData.get('password');
    let email = formData.get('email');

    invalid(e, password, document.querySelector('.is_invalid_js_password'), 'Doit être supérieur à 8', 'input', 'password', 'mot de passe');
    invalid(e, email, document.querySelector('.is_invalid_js_email'), 'Adresse e-mail invalide', 'input', 'email', 'email');
}
// donc à par ça il nya pas de corrections à faire ?
// ChatGPT
// Le code que tu as fourni semble globalement correct, mais il y a quelques points que tu pourrais améliorer ou ajuster en fonction de tes besoins spécifiques :

// 1. **Sélection des éléments du DOM :** Assure-toi que les sélecteurs CSS utilisés dans 'document.querySelector' ciblent correctement les éléments du DOM que tu veux manipuler. Par exemple, dans la fonction 'validateLogin', tu utilises '.is_invalid_js_password' et '.is_invalid_js_email' pour sélectionner les éléments, donc assure-toi que ces classes existent dans ton HTML.

// 2. **Gestion des messages d’erreur :** Les messages d’erreur actuels dans la fonction 'invalid' semblent être des chaînes statiques. Si tu veux rendre ces messages plus dynamiques ou personnalisés, tu pourrais passer le message en paramètre plutôt que de le définir directement dans la fonction.

// 3. **Ajout d’une classe 'is-valid' :** Il peut être utile d’ajouter une classe 'is-valid' en plus de 'is-invalid' pour indiquer visuellement que les champs ont été validés avec succès.

// 4. **Gestion des espaces dans les champs :** Actuellement, la fonction 'isValidEmail' utilise une expression régulière pour valider les adresses e-mail. Elle n’accepte pas les espaces dans l’adresse e-mail. Si tu veux autoriser les espaces avant ou après l’adresse e-mail, tu pourrais ajuster l’expression régulière en conséquence.

// 5. **Mots-clés réservés :** Évite d’utiliser des mots-clés réservés tels que 'class' comme nom de variable. Dans ton code, tu utilises 'nameClass', ce qui peut prêter à confusion. Utilise plutôt un nom plus spécifique.

// En fonction de tes besoins spécifiques et du contexte dans lequel tu utilises ce code, tu pourrais avoir d’autres modifications à apporter.