
document.querySelector('.burger').addEventListener('click', function (e){
    e.preventDefault();
    if (this.classList.contains('is-active')){
        this.classList.remove('is-active');
        document.querySelector('#menu').classList.remove('nav-active');
        document.querySelector.classList.remove('menu_wrapper-active');
    } else {
        this.classList.add('is-active');
        document.querySelector('#menu').classList.add('nav-active');
        document.querySelector.add('menu_wrapper-active');
    }
})
