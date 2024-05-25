
//banner-slider and dot-slider
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img");
const imgContainer = document.querySelector('.aspect-ratio-169');
const dotItem = document.querySelectorAll(".dot");
let imgNumber = imgPosition.length;
let trangchu = 0;

imgPosition.forEach(function(image, index) {
    image.style.left = index * 100 + "%";
    dotItem[index].addEventListener("click", function() {
        slider(index);
    });
});

function imgSlide() {
    trangchu++;
    console.log(trangchu);
    if (trangchu >= imgNumber) {
        trangchu = 0;
    }
    slider(trangchu);
}

function slider(trangchu) {
    imgContainer.style.left = "-" + trangchu * 100 + "%";
    const dotActive = document.querySelector('.active');
    if (dotActive) {
        dotActive.classList.remove("active");
    }
    dotItem[trangchu].classList.add("active");
}

setInterval(imgSlide, 5000);

//Slidebar-category
const itemsliderbar = document.querySelectorAll(".category-left-li")
itemsliderbar.forEach(function(menu,sanpham){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})