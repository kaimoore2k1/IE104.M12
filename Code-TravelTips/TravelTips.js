const decor_dulich = document.querySelector('#decor--traveltips')

decor_dulich.classList.add('itemSelected')
document.querySelector('#decor--trangchu').classList.remove('itemSelected')
var list = [
    'Ẩm thực',
    'Cảnh đẹp',
    'Khám phá',
    'Du lịch biển',
    'Di sản văn hóa',
    'Mẹo du lịch',
    'Du lịch tâm linh',
    'Vui chơi - Giải trí',
    'Thế giới đó đây'
];
var content = list.map(function(item){
    return `<li class="categories-li"><a href="#"> ${item} </a></li>`;
});
document.getElementById('categories-ul').innerHTML = content.join('');

var listMostView = [
    {
        title: '5 Điểm Đến ở Việt Nam Không Thể Bỏ Lỡ Trong Nằm 2016',
        src: '../Code-TravelTips/Image1.jpg',
        alt: 'Đà lạt'
    },
    {
        title: 'Núi ở Đồng Nai phát hiện hang dung nham dài nhất Đông Nam Á',
        src: '../Code-TravelTips/Image2.jpg',
        alt: 'Hang dung nham'
    },
    {
        title: '11 quốc gia mà ai cũng có thể du lịch vì ví tiền sinh viên',
        src: '../Code-TravelTips/Image3.jpg',
        alt: 'Sri lanka'
    },
    {
        title: 'Hướng dẫn phượt Phan Thiết bằng cung đường ven biển',
        src: '../Code-TravelTips/Image4.jpg',
        alt: 'Phan Thiết'
    },
];

var newListMostView = listMostView.map(function(item){
    return `<div class="mostviewed">
                <div class="mostviewed-img">
                    <a href="#"><img src="${item.src}"alt= "${item.alt}"></a>
                </div>
                <div class="mostviewed-discription">
                    <a href="#">${item.title}</a>
                </div>
            </div>`;
});
document.getElementById('mostviewed-content').innerHTML = newListMostView.join('');
// ------------------------
var input = document.getElementsByClassName('search-content__input');
var btn = document.getElementsByClassName('search-content__button');
var p = document.getElementById('warning');

function Sreach(){
    p.style.display = "none";
    if(input[0].value == ''){
        p.style.display="block";
    }
    
}

var responsive = document.querySelector(".main-sidebar");
var overlay_hidden = document.querySelector(".overlay_hidden");
function clickblock(){
    responsive.style.display = "block";
    overlay_hidden.style.display = "block"
}
function clickhidden(){
    responsive.style.display = "none";
    overlay_hidden.style.display = "none"
}
