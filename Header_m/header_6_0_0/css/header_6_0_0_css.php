<style>
.header_6_0_0 {
    font-family: 'Roboto Condensed', Roboto, sans-serif;
}

a {
    text-decoration: none;
}

.header_6_0_0_box_2__menu__menuSub .arr::before,
.header_6_0_0_box_2__menu__menuSubBox ul li a::after {
    font-family: "fontello";
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    width: 1em;
    margin-right: .2em;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    line-height: 1em;
    margin-left: .2em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.header_6_0_0.hide {
    top: -180px;
}
.header_6_0_0 {
    position: fixed;
    z-index: 9;
    width: 100%;
    top: 0;
}

.header_6_0_0_box_top {
    background: url(<?php echo $path ?>/images/boxtop-bg.jpg) center bottom no-repeat;
    position: relative;
    z-index: 2;
    width: 100%;
    min-height: 30px;
}

.header_6_0_0_box_top__new {
    text-align: center;
    padding-top: 4px;
}

.header_6_0_0_box_top__newlabel {
    font-weight: 400;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
}

.header_6_0_0_box_top__newlabel.lb1 {
    display: none;
}

.header_6_0_0_box_1 {
    background-color: #fff;
}

.header_6_0_0_box_1 .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header_6_0_0_box_1_left,
.header_6_0_0_box_1_right {
    display: flex;
    align-items: center;
    height: 50px;
}

.header_6_0_0_box_1__logo {
    height: 60px;
    margin-right: 50px;
    position: relative;
    padding-top: 10px;
}
.header_6_0_0_box_1__logo img{
    height: 42px;
}

.header_6_0_0_box_1__title {
    color: #00ABE5;
}

.header_6_0_0_box_1__title h2 {
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 600;
    margin: 5px 0 0;
}

.header_6_0_0_box_1__title p {
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 600;
}

.header_6_0_0_box_1__address {
    position: relative;
}

.header_6_0_0_box_1__address ul {
    list-style: none;
}

.header_6_0_0_box_1__address ul::before {
    background: url(<?php echo $path ?>/images/icon1.png) 0 center no-repeat;
    content: "";
    position: absolute;
    top: 20px;
    left: 0px;
    width: 35px;
    height: 35px;
    background-size: 100%;
}

.header_6_0_0_box_1__address ul li {
    color: #000;
    font-size: 13px;
}

.header_6_0_0_box_1__address ul li b {
    font-size: 15px;
}

.header_6_0_0_box_1__call {
    margin-left: 25px;
    text-align: center;
    position: relative;
}

.header_6_0_0_box_1__call ul {
    list-style: none;
}

.header_6_0_0_box_1__call ul::before {
    background: url(<?php echo $path ?>/images/icon2.png) 0 center no-repeat;
    content: "";
    position: absolute;
    top: 20px;
    left: 5px;
    width: 30px;
    height: 30px;
    background-size: 100%;
}

.header_6_0_0_box_1__call ul li {
    color: #000;
    font-size: 13px;
}

.header_6_0_0_box_1__call ul li a {
    color: #000;
    font-weight: bold;
    font-size: 18px;
}

.header_6_0_0_box_1__regtv {
    font-size: 13px;
    display: block;
    color: #fff;
    background: #0056A4;
    text-align: center;
    padding: 3px 20px;
    border-radius: 50px;
    margin: 0 15px;
}

.header_6_0_0_box_1__button {
    background: #6DCFF6;
    outline: none;
    color: #fff;
    cursor: pointer;
    border-radius: 100%;
    padding: 15px;
    border: none;
    /* width: 30px;
    height: 30px; */
    display: flex;
    align-items: center;
    justify-content: center;
    /* transform: rotate(92deg); */
}

.header_6_0_0_box_1__button span {
    font-size: 30px;
    line-height: 0;
}

.header_6_0_0_box_1 .iconMid {
    display: none;
}

.header_6_0_0_box_2 {
    background-color: #EBECF0;
    padding: 0;
}

.header_6_0_0_box_2 .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header_6_0_0_box_2__logosb {
    display: none;
}

.header_6_0_0_box_2__logosb img {
    max-width: 90%;
    margin: 20px 0 0;
}

.header_6_0_0_box_2__menu {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.header_6_0_0_box_2__menu__menuSub {
    display: flex;
    align-items: center;
    border-top: 3px solid #EBECF0;
    padding: 8px 12px;
}

.header_6_0_0_box_2__menu__menuSub .menu-icon {
    display: none;
    position: absolute;
    right: 0;
    top: 0;
    padding: 10px;
    width: 100%;
    height: 100%;
    text-align: right;
}

.header_6_0_0_box_2__menu__menuSub .arr::before {
    content: "\e88f";
    display: none;
    position: absolute;
    bottom: 5px;
    left: 40px;
    text-align: center;
    color: #f16749;
}

.header_6_0_0_box_2__menu__menuSub.icon-homes {
    border-top: none;
}

.header_6_0_0_box_2__menu__menuSub.icon-homes .icon-home,
.icon-callmb {
    background: url(<?php echo $path ?>/images/icon_social.png) no-repeat;
    content: "";
    display: inline-block;
    height: 40px;
    width: 25%;
}

.header_6_0_0_box_2__menu__menuSub.icon-homes .icon-home1 {
    background-position: 1px 0;
    padding: 0 15px;
}

.header_6_0_0_box_2__menu__menuSub.icon-homes .icon-home2 {
    background-position: -30px 0;
    padding: 0px 20px;
}

.header_6_0_0_box_2__menu__menuSub.icon-homes:hover {
    border-top: none;
}

.header_6_0_0_box_2__menu__menuSub:hover {
    border-top: 3px solid #0056A2;
}

.header_6_0_0_box_2__menu__menuSub:hover .header_6_0_0_box_2__menu__menuSubBox {
    display: block;
    animation: opac 0.4s;
}

.header_6_0_0_box_2__menu__menuSub:hover>a {
    color: #0056A2;
}

.header_6_0_0_box_2__menu__menuSubBox {
    display: none;
    position: absolute;
    width: 100%;
    right: 0px;
    top: 60px;
    padding: 15px 25px;
    font-size: 1rem;
    color: #000;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
}

.header_6_0_0_box_2__menu__menuSubBox ul {
    list-style: none;
    padding-left: 0;
}

.header_6_0_0_box_2__menu__menuSubBox ul li {
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 5px;
    margin-bottom: 5px;
    position: relative;
}

.header_6_0_0_box_2__menu__menuSubBox ul li a {
    color: #000;
    transition: 0.1s;
    border: none;
    font-size: 15px;
}

.header_6_0_0_box_2__menu__menuSubBox ul li a:hover {
    color: #0056A4;
    font-weight: 600;
}

.header_6_0_0_box_2__menu__menuSubBox ul li a::after {
    content: "»";
    display: block;
    position: absolute;
    right: 0;
    top: 5px;
}

.header_6_0_0_box_2__menu__menuSubBox p {
    color: #307DAD;
    text-transform: uppercase;
    font-size: 16px;
    margin-top: 10px;
}

.header_6_0_0_box_2__menu__title {
    padding: 5px 5px;
    display: block;
    font-size: 14px;
    cursor: pointer;
    text-align: center;
    position: relative;
    font-weight: 600;
    text-transform: uppercase;
}

.header_6_0_0_box_2__menu .mntt {
    color: #fff;
    font-size: 15px;
    padding: 5px 0;
    text-transform: uppercase;
    border-bottom: 1px dotted #355b7d;
    position: relative;
    margin-bottom: 10px;
}

.header_6_0_0_box_2__menu .mntt::before {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 70px;
    height: 3px;
    background: #fff;
}

.header_6_0_0_box_2__social {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 15%;
}

.header_6_0_0_box_2__social a {
    background: url(<?php echo $path ?>/images/icon_social.png) no-repeat;
    content: "";
    display: inline-block;
    height: 40px;
    width: 25%;
}

.header_6_0_0_box_2__social .face {
    background-position: -74px 0;
}

.header_6_0_0_box_2__social .youtu {
    background-position: -129px 0;
}

.header_6_0_0_box_2__social .zalo {
    background-position: -186px 0;
}

.header_6_0_0_box_2__social .insta {
    background-position: -240px 0;
}


.header_6_0_0_box_2.active {
    display: block;
    animation: animateleft 0.4s;
}

.header_6_0_0_box_3 {
    background: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    content: "";
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2;
    animation: opac 0.4s;
}

.header_6_0_0_box_3.active {
    display: block;
}

.header_6_0_0.menufix {
    background: #fff;
    background: rgba(255,255,255,.9);
}

.header_6_0_0.menufix .header_6_0_0_box_1 {
    display: none;
}
.header_6_0_0.menufix .header_6_0_0_box_top{
    display: none;
}

.header_6_0_0.menufix .header_6_0_0_box_2__menu {
    margin: 10px 0;
}

.header_6_0_0.menufix .header_6_0_0_box_2__menu__menuSub {
    border: none;
}
.header_6_0_0.menufix .header_6_0_0_box_2{
    background: none;
}

.header_6_0_0.menufix .header_6_0_0_box_2__menu__menuSub:hover {
    border: none;
}

.header_6_0_0.menufix .header_6_0_0_box_2__menu__title {
    color: #000;
}

@media (max-width: 1366px) {
    .header_6_0_0_box_top__newlabel {
        font-size: 13px;
    }
}

@media (max-width: 1280px) {
    .header_6_0_0_box_top {
        min-height: 30px;
        background-size: 100%;
    }

    .header_6_0_0_box_top__new {
        padding-top: 6px;
    }
}

@media (max-width: 1024px) {
    .header_6_0_0_box_top__newlabel {
        line-height: 8px;
        font-size: 11px;
    }
    .header_6_0_0.menufix .header_6_0_0_box_2{
        background: #fff;
    }
    .header_6_0_0.menufix .header_6_0_0_box_2__menu__menuSub{
        padding: 5px 0;
        border-bottom: 1px dashed #ccc;
    }
    .header_6_0_0.menufix .header_6_0_0_box_2__logosb img{
        margin: 20px 0 0;
    }

    .header_6_0_0 {
        background: #fff;
        height: 65px;
    }
    .header_6_0_0.menufix{
        background: #fff;
    }
    .header_6_0_0 .container {
        padding: 0;
    }

    .header_6_0_0_box_top__new {
        padding-top: 10px;
    }

    .header_6_0_0_box_1 .container {
        justify-content: center;
        position: relative;
    }

    .header_6_0_0_box_1__title {
        display: none;
    }

    .header_6_0_0_box_1_right {
        display: none;
    }

    .header_6_0_0_box_1__logo {
        text-align: center;
        width: 100px;
        margin: 0 auto;
        position: relative;
        display: block;
    }

    .header_6_0_0_box_1__logo img {
        position: absolute;
        top: 10px;
        left: -40px;
        height: 40px;
    }

    .header_6_0_0_box_1__logo::after {
        display: none;
    }

    .header_6_0_0_box_1__search__icon {
        display: none;
    }

    .header_6_0_0_box_1 .iconMid {
        display: block;
    }

    .header_6_0_0_box_1 .siteHeaderNav {
        position: absolute;
        left: 0;
        color: #0056a2;
        font-size: 35px;
    }

    .icon-callmb {
        width: 35%;
        background-position-x: -40px;
        background-position-y: -3px;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall {
        position: absolute;
        right: 0;
        color: #fff;
        font-size: 18px;
        width: 80px;
        height: 60px;
        text-align: center;
        line-height: 0px;
        border-radius: 5px;
        top: 18px;
    }

    /* .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall img {
        width: 100%;
    } */
    .header_6_0_0_box_1__button img{
        width: 10px;
        height: 10px;
    }
    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall button {
        border: 2px solid #0056A2;
        padding: 5px;
        border-radius: 100%;
        outline: none;
        background: none;
        /* width: 25px; */
        /* height: 25px; */
        margin: 0 auto;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall button span {
        font-size: 25px;
        color: #095998;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall button svg {
        width: 16px;
        fill: #0056A2;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall button i {
        color: #0056A2;
    }

    .header_6_0_0_box_2 {
        display: none;
        width: 270px;
        background: #fff;
        position: fixed;
        height: 100%;
        left: 0;
        top: 0;
        z-index: 3;
        overflow: auto;
        padding-bottom: 20px;
    }

    .header_6_0_0_box_2 .container {
        display: block;
        width: 270px;
    }

    .header_6_0_0_box_2__logosb {
        text-align: center;
    }

    .header_6_0_0_box_2__menu {
        display: block;
        margin: 30px 0;
    }

    .header_6_0_0_box_2__menu__menuSub {
        position: relative;
        padding: 7px 0;
        border-bottom: 1px dashed #ccc;
        border-top: none;
        display: block;
    }

    .header_6_0_0_box_2__menu__menuSub:nth-child(1) {
        display: none;
    }

    .header_6_0_0_box_2__menu__menuSub:last-child {
        border: none;
    }

    .header_6_0_0_box_2__menu__menuSub .menu-icon {
        display: block;
        font-size: 11px;
        color: #000;
        font-style: initial;
        font-weight: 600;
    }

    .header_6_0_0_box_2__menu__menuSub .icon-minus::before {
        content: "─";

    }

    .header_6_0_0_box_2__menu__menuSub .arr::before {
        display: none;
    }

    .header_6_0_0_box_2__menu__menuSub a {
        border-top: none;
    }

    .header_6_0_0_box_2__menu__menuSub:hover {
        border-top: none;
        display: block;
        animation: opac 0.4s;
        transition: 0.4s;
    }

    .header_6_0_0_box_2__menu__menuSub:hover>a {
        color: #0056A2;
        border-top: none;
    }

    .header_6_0_0_box_2__menu__menuSubBox {
        position: inherit;
        top: 0;
        right: 0;
        border-radius: 0;
        width: 100%;
        padding: 10px;
        background-color: #0055A4;
        border: none;
    }

    .header_6_0_0_box_2__menu__menuSubBox .col-lg-4,
    .header_6_0_0_box_2__menu__menuSubBox .col-lg-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .header_6_0_0_box_2__menu__menuSubBox ul li {
        border-bottom: 1px dashed #ccc;
    }

    .header_6_0_0_box_2__menu__menuSubBox ul li a {
        color: #fff;
        padding: 0;
        border-top: none !important;
        font-size: 14px;
    }

    .header_6_0_0_box_2__menu__menuSubBox p {
        font-size: 14px;
        color: #fff;
    }

    .header_6_0_0_box_2__menu__menuSubBox p::after {
        content: "";
        border-bottom: 2px solid #307DAD;
        display: block;
        width: 70px;
        padding-top: 5px;
    }

    .header_6_0_0_box_2__menu__title {
        text-align: left;
        padding: 5px 10px;
    }

    .header_6_0_0_box_2__menu__title br {
        display: none;
    }

    .header_6_0_0_box_2__menu .mntt {
        margin-bottom: 3px;
        margin-top: 3px;
        font-size: 14px;
        color: #f69679;
    }

    .header_6_0_0_box_2__menu .mntt::before {
        display: none;
    }

    .header_6_0_0_box_2__menu__menuSubBox ul li a:hover {
        color: #ffff;
    }

    .header_6_0_0_box_2__social {
        margin-left: 0;
        justify-content: center;
        width: 100%;
    }

    .header_6_0_0_box_2__social a {
        width: 15%;
    }

    .header_6_0_0_box_2__social .face {
        background-position: -73px 0;
    }

    .header_6_0_0_box_2__social .youtu {
        background-position: -130px 0;
    }

    .header_6_0_0_box_2__social .zalo {
        background-position: -185px 0;
    }

    .header_6_0_0_box_2__logosb {
        display: block;
    }

    .header_6_0_0.menufix .header_6_0_0_box_1 {
        display: block;
    }
}

@media (max-width: 812px) {
    .header_6_0_0_box_top {
        min-height: 23px;
    }

    .header_6_0_0_box_top__newlabel {
        display: none;
    }

    .header_6_0_0_box_top__newlabel.lb1 {
        display: block;
    }
}

@media (max-width: 480px) {
    .header_6_0_0{
        height: 52px;
    }
    .header_6_0_0_box_2__menu__menuSubBox .box .row {
        margin-right: 0;
        margin-left: 0;
    }
    .header_6_0_0_box_top{
        display: none;
    }
    .header_6_0_0.menufix{
        background: #fff;
    }
    .header_6_0_0.menufix .header_6_0_0_box_2{
        background: #fff;
    }
    .header_6_0_0.menufix .header_6_0_0_box_2{
        background: #fff;
    }
    .header_6_0_0.menufix .header_6_0_0_box_2__menu__menuSub{
        padding: 5px 0;
        border-bottom: 1px dashed #ccc;
    }

    .header_6_0_0_box_top {
        background: #012c5f;
        min-height: 24px;
        border-radius: 0px 0px 50px 50px;
        border-left: 6px solid #e23d3a;
        border-right: 6px solid #e23d3a;
    }

    .header_6_0_0_box_top__new {
        padding-top: 8px;
    }

    .header_6_0_0_box_top__newlabel {
        font-size: 12px;
    }

    .header_6_0_0_box_1__logo img {
        top: 10px;
        left: -10px;
        height: 40px;
    }

    .header_6_0_0_box_1__title {
        color: #62D4FF;
        position: absolute;
        top: 90px;
        display: flex;
        left: 0;
        width: 100%;
        justify-content: center;
        align-items: center;
        background-color: #131439;
        padding: 5px 0;
    }

    .header_6_0_0_box_1__title h2 {
        font-size: 13px;
        margin-top: 0;
        padding-right: 10px;
        margin-right: 10px;
        border-right: 1px solid #62D4FF;
    }

    .header_6_0_0_box_1__title p {
        margin-bottom: 0;
    }

    .icon-callmb {
        width: 40%;
        background-position-x: -36px;
    }

    .header_6_0_0_box_1 .siteHeaderNav {
        left: 10px;
        font-size: 30px;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall {
        right: 0px;
        height: 40px;
        top: 12px;
    }

    .header_6_0_0_box_1__button img{
        width: 13px;
        height: 13px;
    }
    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall i {
        color: #0056A2;
        border: 2px solid #0056A2;
        padding: 5px 7px;
        border-radius: 100%;
        font-size: 14px;
        line-height: 30px;
    }

    .header_6_0_0_box_2__menu__menuSubBox ul li {
        font-size: 13px;
    }

    .header_6_0_0_box_2__social a .header_6_0_0_box_2__social_pic {
        display: none;
    }

    .header_6_0_0_box_2__social a .header_6_0_0_box_2__social_pic2 {
        display: block;
    }
}

@media (max-width: 375px) {
    .header_6_0_0_box_1 .siteHeaderNav {
        left: 10px;
        font-size: 28px;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall {
        right: 0px;
        height: 30px;
        font-size: 16px;
    }

    /* .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall img {
        width: 100%;
    } */

}

@media (max-width: 320px) {
    .header_6_0_0_box_top {
        min-height: 21px;
        background-size: 100%;
    }

    .header_6_0_0_box_top__new {
        padding-top: 6px;
    }

    .header_6_0_0_box_top__newlabel {
        font-size: 11px;
    }

    .header_6_0_0_box_1 .header_6_0_0_box_1__siteHeaderCall {
        right: -6px;
    }
}
</style>