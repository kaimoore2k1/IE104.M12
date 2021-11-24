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
const overlayBackground = document.getElementById('overlay-background')
const signInOverlay = document.getElementById('sign-in__overlay')
const signUpOverlay = document.getElementById('sign-up__overlay')

//Event when click overlay background 
overlayBackground.addEventListener('click',()=>{
    // hidden overlay windows
    overlayBackground.style.display = 'none'
    signInOverlay.style.display = 'none'
    signUpOverlay.style.display = 'none'
    
    //reload iframe
    signInOverlay.setAttribute('src','../sign-in/sign-in.html')
    signUpOverlay.setAttribute('src','../sign-up/sign-up.html')
})

//sign in button clicking evt
function openSignInOvp(){
    overlayBackground.style.display = 'block'
    signInOverlay.style.display = 'block'
}
//sign un button clicking evt
function openSignUpOvp(){
    overlayBackground.style.display = 'block'
    signUpOverlay.style.display = 'block'
}