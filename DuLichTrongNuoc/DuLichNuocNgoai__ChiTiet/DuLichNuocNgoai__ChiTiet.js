const gal = document.querySelector('.wapper__gallery')

for (let i = 1; i <= 6; i++) {
    const newImg = document.createElement('img')
    newImg.setAttribute('src', 'Taiwan'+ i + '.png')
    newImg.setAttribute('class', 'now_img')
    gal.appendChild(newImg)
}

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