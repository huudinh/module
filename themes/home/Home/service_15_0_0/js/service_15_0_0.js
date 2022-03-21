let img = [];
let title = [];
let des = [];
img.push("images/t2-31.jpg");
title.push("NÂNG MŨI CẤU TRÚC 4D");
des.push("Nâng mũi đẹp tại<br> Bệnh Viện thẩm mỹ Kangnam");
img.push("images/t2-3.jpg");
title.push("CHỈNH HÀM VLINE");
des.push("Chỉnh hàm đẹp tại <br> Bệnh Viện thẩm mỹ Kangnam");
let pic = document.querySelector(".service_15_0_0__box2 img");
let tieude = document.querySelector(".service_15_0_0__title3");
let mota = document.querySelector(".service_15_0_0__text");
let random;
let runSlide = setInterval(function() {
    for (let i = 0; i < img.length; i++) {
        random = Math.floor(Math.random() * img.length);
    }
    pic.setAttribute("src", img[random]);
    tieude.innerHTML = title[random];
    mota.innerHTML = des[random];
}, 1000);
setTimeout(runSlide, 1000);