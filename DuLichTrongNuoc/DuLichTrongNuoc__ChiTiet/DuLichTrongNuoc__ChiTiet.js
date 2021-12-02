const decor_dulich = document.querySelector('#decor--dulich')

decor_dulich.classList.add('itemSelected')
const selected = document.querySelectorAll('.wapper__content__nav button')
        const content_selected = document.querySelectorAll('.wapper__content--content')

        function chuongtrinh_selected() {

            selected[0].setAttribute('id', 'wapper__content__nav--selected')
            selected[1].removeAttribute('id', 'wapper__content__nav--selected')
            selected[2].removeAttribute('id', 'wapper__content__nav--selected')

            content_selected[0].style.display = "block"
            content_selected[1].style.display = "none"
            content_selected[2].style.display = "none"
            
        }

        function chinhsach_selected() {
            
            selected[1].setAttribute('id', 'wapper__content__nav--selected')
            selected[0].removeAttribute('id', 'wapper__content__nav--selected')
            selected[2].removeAttribute('id', 'wapper__content__nav--selected')

            content_selected[1].style.display = "block"
            content_selected[0].style.display = "none"
            content_selected[2].style.display = "none"
        }

        function thacmac_selected() {

            selected[2].setAttribute('id', 'wapper__content__nav--selected')
            selected[1].removeAttribute('id', 'wapper__content__nav--selected')
            selected[0].removeAttribute('id', 'wapper__content__nav--selected')

            content_selected[2].style.display = "block"
            content_selected[1].style.display = "none"
            content_selected[0].style.display = "none"
        }