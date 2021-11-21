
const selected = document.querySelectorAll('.button_content button')
const content_selected = document.querySelectorAll('.wrapper_content')

function moinhat_selected() {
    selected[0].setAttribute('id', 'button_content__selected')
    selected[1].removeAttribute('id', 'button_content__selected')
    selected[2].removeAttribute('id', 'button_content__selected')

    content_selected[0].style.display = "block"
    content_selected[1].style.display = "none"
    content_selected[2].style.display = "none"
}

function giathapnhat_selected() {
    selected[1].setAttribute('id', 'button_content__selected')
    selected[0].removeAttribute('id', 'button_content__selected')
    selected[2].removeAttribute('id', 'button_content__selected')

    content_selected[1].style.display = "block"
    content_selected[0].style.display = "none"
    content_selected[2].style.display = "none"
}

function danhgiacaonhat_selected() {
    selected[2].setAttribute('id', 'button_content__selected')
    selected[1].removeAttribute('id', 'button_content__selected')
    selected[0].removeAttribute('id', 'button_content__selected')

    content_selected[2].style.display = "block"
    content_selected[1].style.display = "none"
    content_selected[0].style.display = "none"
}