const label_username = document.querySelector('#username label');
const fieldusername = document.querySelector('#fieldusername');
const champsFormulairesInputAll = document.querySelectorAll('.champs-formulaire .form-control');
const champsFormulairesInputLabel = document.querySelector('.champs-formulaire label');


champsFormulairesInputAll.forEach(champsFormulairesInput => {
    champsFormulairesInput.addEventListener('focus', () => {
        const parentElementChampsInput = champsFormulairesInput.parentElement;
        const labelChamps = parentElementChampsInput.querySelector('label');
        labelChamps.style.fontSize = '14px';
        labelChamps.style.transform = 'translateY(-10px)';
        labelChamps.style.transition = 'all 0.5s ease';
    });

    champsFormulairesInput.addEventListener('blur', () => {
        const parentElementChampsInput = champsFormulairesInput.parentElement;
        const labelChamps = parentElementChampsInput.querySelector('label');
        
        if (champsFormulairesInput.value === '') {
            labelChamps.style.fontSize = '';
            labelChamps.style.transform = '';
            labelChamps.style.transition = 'all 0.5s ease';
        }
    });
});
