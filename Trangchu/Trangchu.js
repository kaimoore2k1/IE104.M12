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
    signInOverlay.setAttribute('src','../sign-in/sign-in.php')
    signUpOverlay.setAttribute('src','../sign-up/sign-up.php')
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