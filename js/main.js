// ---------search---------
const search_icon = document.querySelector('#search_icon');
const form = document.querySelector('.form');

search_icon.addEventListener('click', () => {
    if (!form.classList.contains('form-open')) {
        form.classList.add('form-open');
        search_icon.innerHTML = "<i class='fas fa-times fa-lg'></i>";
    } else {
        form.classList.remove('form-open');
        search_icon.innerHTML = "<i class='fa-solid fa-magnifying-glass'></i>";
        
    }
});