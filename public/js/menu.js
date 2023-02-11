const buttons = document.querySelectorAll('.menu-main button');
buttons.forEach(button => {
    button.addEventListener('click', () => {
        const caretDown = button.querySelector('.fa-caret-down');
        caretDown.classList.toggle('rotate');
        buttons.forEach(otherButton => {
            if(otherButton !== button){
                const otherCaretDown = otherButton.querySelector('.fa-caret-down');
                const contentShow = otherButton.nextElementSibling;
                if(contentShow.classList.contains('show')){
                    contentShow.classList.remove('show');
                    otherCaretDown.classList.remove('rotate');
                }
            }
        });
        button.nextElementSibling.classList.toggle('show');
    });
});