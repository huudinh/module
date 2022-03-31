let item = [{
        img: "https://benhvienthammykangnam.vn/wp-content/uploads/2021/09/Slide-2-PC.jpg",
        link: "https://benhvienthammykangnam.vn/kien-thuc-lam-dep/uu-dai/",
        alt: "kientaonhansac"
    },
    {
        img: "https://benhvienthammykangnam.vn/wp-content/uploads/2021/11/kientaonhansac.jpg",
        link: "https://benhvienthammykangnam.vn/tin-tuc/lam-dep-kangnam-vung-xanh-an-toan/",
        alt: "Slide 2-PC"
    }
]
let pic = document.querySelector(".slider_1_0_1_item img");
let link = document.querySelector(".slider_1_0_1_item");
let random;
let runSlide = setInterval(function() {
    for (let i = 0; i < item.length; i++) {
        random = Math.floor(Math.random() * item.length);
    }
    pic.setAttribute("src", item[random].img);
    pic.setAttribute("alt", item[random].alt);
    link.setAttribute("href", item[random].link);
}, 3000);

setTimeout(runSlide, 1000);