const dropdown = document.querySelector('.dropdown');
const sous_menu = document.querySelector('.sous-menu');
const menu_btn_lien_a = document.querySelector('.menu-btn-lien-a');
const sous_menu_a = document.querySelectorAll('.sous-menu a');

let toogleIndex;

function toggleDropDown(){
    if(!toogleIndex){
        sous_menu.style.height = `${sous_menu.scrollHeight}px`;
        toogleIndex = true;
        return;
    }

    sous_menu.style.height = 0;
    toogleIndex = false;
}

menu_btn_lien_a.addEventListener('click', toggleDropDown);
sous_menu_a.forEach(lien => lien.addEventListener('click', toggleDropDown));