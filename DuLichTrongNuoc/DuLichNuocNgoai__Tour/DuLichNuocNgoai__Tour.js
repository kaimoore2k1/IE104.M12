const selected = document.querySelectorAll('.tourType button')
        const content_selected = document.querySelectorAll('.aTour')

    function latest_selected() {

        selected[0].setAttribute('id', 'tourType--selected')
        selected[1].removeAttribute('id', 'tourType--selected')
        selected[2].removeAttribute('id', 'tourType--selected')

        content_selected[0].style.display = "block"
        content_selected[1].style.display = "none"
        content_selected[2].style.display = "none"
        
    }

    function goodPrice_selected() {
                
        selected[1].setAttribute('id', 'tourType--selected')
        selected[0].removeAttribute('id', 'tourType--selected')
        selected[2].removeAttribute('id', 'tourType--selected')

        content_selected[1].style.display = "block"
        content_selected[0].style.display = "none"
        content_selected[2].style.display = "none"
    }

    function highRate_selected() {

        selected[2].setAttribute('id', 'tourType--selected')
        selected[1].removeAttribute('id', 'tourType--selected')
        selected[0].removeAttribute('id', 'tourType--selected')

        content_selected[2].style.display = "block"
        content_selected[1].style.display = "none"
        content_selected[0].style.display = "none"
    }