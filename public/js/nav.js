document.querySelector('#nav-main-btn-mobile').addEventListener('click', function(){
    document.querySelector('#nav-main-grp-desktop').classList.toggle('active');
});

function checkMediaAndScroll(){
    const nav = document.querySelector('#nav-main-body');
    const div = document.querySelector('#nav-main-grp-desktop');
    if(window.matchMedia('(min-width: 1024px)').matches){
        if(document.body.scrollTop >= 186 || document.documentElement.scrollTop >= 186){
            nav.classList.add('nav-main-body-scrollY');
            div.classList.add('nav-main-grp-desktop-scrollY');
        } else {
            nav.classList.remove('nav-main-body-scrollY');
            div.classList.remove('nav-main-grp-desktop-scrollY');
        }
    }
}

window.onscroll = checkMediaAndScroll;

var previousWidth = window.innerWidth;
window.addEventListener('resize', function(){
    var currentWidth = window.innerWidth;
    if(Math.abs(previousWidth - currentWidth) >= 1){
        this.location.reload();
        previousWidth = currentWidth;
    }
});