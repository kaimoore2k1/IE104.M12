const inputSearch = document.querySelector('#location__input')
const autoBox = document.querySelector('.autobox')

inputSearch.onkeyup = (e) => {
    let checkData = e.target.value;
    let dataArray = []
    if (checkData) {
        dataArray = recomentlist.filter((data)=>{
           return data.toLocaleLowerCase().startsWith(checkData.toLocaleLowerCase())
        })
        dataArray = dataArray.map((data)=>{
            return data = '<li>'+data+'</li>'
        })
        autoBox.classList.add('active')
        showadress (dataArray)
        let liItem = autoBox.querySelectorAll('li')
        for (let i=0;i<liItem.length;i++){
              liItem[i].addEventListener('click',function(){
           inputSearch.value = liItem[i].innerHTML
           autoBox.classList.remove('active')
         })
        }
        }
    else {
        autoBox.classList.remove('active')
    }
  
   
}
function showadress (list){
    let listData
    if(!list.length) {
        listData = '<li>'+inputSearch.value+'</li>'
    }
    else {
        listData = list.join('')
    }
    autoBox.innerHTML = listData
}

let recomentlist =[
    'Hà Nội',
    'Hải Phòng',
    'Hà Giang',
    'Hải Dương',
    'Hà Tĩnh',
    'Hà Nam',
    'Hồ Chí Minh',
    'Nghệ An',
    'Phú Quốc',
    'Phú Thọ',
    'Nha Trang',
    'Quảng Bình',
    'Quảng Trị',
    'Quảng Nam',
    'Đà Nẵng',
    'Đà Lạt',
]


const inputNumber = document.querySelector('#tour__input')
const numberBox = document.querySelector('.number-box')
const buttonClose = document.querySelector('.fa-times')

inputNumber.addEventListener ('click', function(){
    numberBox.classList.add('active')
})

const numberPlus = document.querySelector('.treemPlus')
const numberMinus = document.querySelector('.treemMinus')
let personal = document.querySelector('#searbar-person')
let people = document.querySelector('#searbar-people')
let decor = document.querySelector('.number_box-decor')
let number_people = document.querySelector('.number_box-decor span')
let i=0

personal.addEventListener('click', function() {
    inputNumber.value = 'Cá nhân'
    i = 0
    numberBox.classList.remove('active')
    decor.classList.remove('active')
})

people.addEventListener('click', function() {
    decor.classList.add('active')
    inputNumber.value = '0 người'
    numberBox.classList.remove('active')
})

numberPlus.addEventListener('click',function(){
    i = i+1
    totalNumber () 
})
numberMinus.addEventListener('click',function(){
    if(i<=0){
        i = 0
    } 
    else {
        i = i-1
        totalNumber () 
    }

})

function totalNumber () {
    inputNumber.value = i + ' ' + 'Người'
}