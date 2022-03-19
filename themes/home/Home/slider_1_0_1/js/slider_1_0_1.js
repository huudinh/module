let img = [];
let link = [];
let alt = [];
img.push("https://benhvienthammykangnam.vn/wp-content/uploads/2021/11/kientaonhansac.jpg");
link.push("https://benhvienthammykangnam.vn/kien-thuc-lam-dep/uu-dai/");
alt.push("kientaonhansac");

img.push("https://benhvienthammykangnam.vn/wp-content/uploads/2021/09/Slide-2-PC.jpg");
link.push("https://benhvienthammykangnam.vn/tin-tuc/lam-dep-kangnam-vung-xanh-an-toan/");
alt.push("Slide 2-PC");

let pic = document.querySelector(".slider_1_0_1_item img");
let lienKet = document.querySelector(".slider_1_0_1_item");
let random;
let runSlide = setInterval(function() {
    for (let i = 0; i < img.length; i++) {
        random = Math.floor(Math.random() * img.length);
    }
    pic.setAttribute("src", img[random]);
    pic.setAttribute("alt", alt[random]);
    lienKet.setAttribute("href", link[random]);
}, 3000);

setTimeout(runSlide, 1000);