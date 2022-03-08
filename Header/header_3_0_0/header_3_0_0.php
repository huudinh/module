<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module_v2/Header/header_4_2_2'; 
    if($check == 0){
        $css_inline .= '
            <style>
              .header_4_2_2 {
                font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
              }
              
              a {
                text-decoration: none;
              }
              
              .header_4_2_2 {
                position: fixed;
                z-index: 9;
                width: 100%;
                top: 0;
                background: #fff;
              }
              .header_4_2_2 .head_tt {
                color: #fff;
                font-size: 15px;
                padding: 5px 0;
                text-transform: uppercase;
                border-bottom: 1px dotted #a2cbff;
                position: relative;
                margin-bottom: 10px;
                margin-top: 0;
              }
              .header_4_2_2 .head_tt::before {
                content: "";
                display: block;
                position: absolute;
                left: 0;
                bottom: -2px;
                width: 70px;
                height: 3px;
                background: #fff;
              }
              .header_4_2_2#header_4_2_2 {
                position: fixed;
                background: #fff;
                top: 0;
                width: 100%;
                z-index: 10;
                transition: all .3s ease;
                box-shadow: 0 1px 25px rgba(0, 0, 0, 0.1);
              }
              .header_4_2_2#header_4_2_2.hide {
                top: -95px;
              }
              .header_4_2_2__task {
                display: flex;
                align-items: center;
                margin-left: 15px;
              }
              .header_4_2_2__box {
                display: flex;
                justify-content: space-between;
                align-items: center;
              }
              .header_4_2_2__box-bg {
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
              .header_4_2_2__box-bg.active {
                display: block;
              }
              .header_4_2_2__box__section {
                display: flex;
                align-items: center;
              }
              .header_4_2_2__box__item {
                padding: 35px 10px;
                display: block;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                color: #000;
                position: relative;
                font-weight: 500;
              }
              .header_4_2_2__box__item.li-mb {
                display: none;
              }
              .header_4_2_2__box__item-logosb {
                display: none;
              }
              .flag-mb {
                display: none;
              }
              .header_4_2_2__box__item-logosb img {
                max-width: 90%;
                margin: 20px 0 0;
              }
              .header_4_2_2__box__item i.menu-icon {
                display: inline-block;
                font-style: initial;
                width: 12px;
                height: 12px;
                margin-left: 5px;
              }
              .header_4_2_2__box__item i.menu-icon.icon-mb {
                display: none;
              }
              .header_4_2_2__box__item + .header_4_2_2__box__item {
                margin-left: 5px;
              }
              .header_4_2_2__boxMain.active {
                display: block;
                animation: animateleft 0.4s;
              }
              .header_4_2_2__boxMain .menu {
                display: flex;
                list-style: none;
                padding: 0;
                margin: 0;
              }
              .header_4_2_2__boxMain .menuSub:hover .arr::before {
                display: block;
              }
              .header_4_2_2__boxMain .menuSub:hover .menuSubBox {
                display: block;
                animation: opac 0.4s;
              }
              .header_4_2_2__boxMain .menuSub:hover > a {
                color: #e3a261;
              }
              .header_4_2_2__boxMain .menuSubBox {
                display: none;
                position: absolute;
                width: 80%;
                right: 16px;
                top: 90px;
                background: #0E4F82;
                color: #000;
                border-radius: 8px;
              }
              .header_4_2_2__boxMain .menuSubBox .row {
                padding: 15px 25px;
              }
              .header_4_2_2__boxMain .menuSubBox .row > .col-xl-3 > p {
                margin: 0;
              }
              .header_4_2_2__boxMain .menuSubBox.padding {
                padding-top: 5px;
              }
              .header_4_2_2__boxMain .menuSubBox.padding .head_tt {
                margin-top: -43px;
              }
              .header_4_2_2__boxMain .menuSubBox ul {
                list-style: none;
                padding: 0;
              }
              .header_4_2_2__boxMain .menuSubBox ul.mnsub {
                padding: 42px 0 0;
              }
              .header_4_2_2__boxMain .menuSubBox ul li {
                border-bottom: 1px dotted rgba(255, 255, 255, 0.2);
                padding: 5px 0;
                font-size: 13px;
              }
              .header_4_2_2__boxMain .menuSubBox a {
                color: #fff;
                transition: 0.1s;
              }
              .header_4_2_2__boxMain .menuSubBox a:hover {
                color: rgba(255, 255, 255, 0.7);
              }
              .header_4_2_2__boxMain .menuSubBox .address {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                background: #07397D;
                padding: 10px;
              }
              .header_4_2_2__boxMain .menuSubBox .address span {
                font-size: 12px;
                color: #fff;
              }
              .header_4_2_2__boxMain .menuSubBox .address i {
                color: #F26649;
              }
              .header_4_2_2__boxMain .menuSubTitle {
                text-transform: uppercase;
                font-size: 16px;
                font-weight: 600;
                position: relative;
                padding-bottom: 15px;
                margin-bottom: 10px;
              }
              .header_4_2_2__boxMain .menuSubTitle:after, .header_4_2_2__boxMain .menuSubTitle::before {
                content: "";
                display: block;
                position: absolute;
              }
              .header_4_2_2__boxMain .menuSubTitle:before {
                width: 80px;
                height: 3px;
                background: #fff;
                left: 0;
                bottom: -1px;
              }
              .header_4_2_2__boxMain .menuSubTitle:after {
                width: 100px;
                width: 100%;
                height: 1px;
                background: rgba(255, 255, 255, 0.2);
                left: 0;
                bottom: 0;
              }
              .header_4_2_2__boxMain .search-2 {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f26649;
                padding: 6px;
                border-radius: 50%;
                color: #fff;
                width: 35px;
                height: 35px;
                margin: 40px auto 0;
              }
              .header_4_2_2__boxMain .search-2 i {
                display: flex;
                justify-content: center;
                align-items: center;
              }
              .header_4_2_2__boxLogo {
                height: 55px;
              }
              .header_4_2_2__boxNav, .header_4_2_2__boxCall {
                position: absolute;
                top: 13px;
                display: none;
              }
              .header_4_2_2__boxNav {
                font-size: 30px;
                width: 40px;
                height: 40px;
                left: -23px;
                z-index:3;
                color: #F26649;
                padding-right: 4px;
                border-right: 1px solid #eee;
              }
              .header_4_2_2__box .search-1 {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f26649;
                padding: 6px;
                border-radius: 50%;
                color: #fff;
                width: 35px;
                height: 35px;
                margin: 40px auto 0;
                display: none;
              }
              .header_4_2_2__box .search-1 i {
                display: flex;
                justify-content: center;
                align-items: center;
              }
              .header_4_2_2__boxCall {
                font-size: 20px;
                width: 40px;
                height: 40px;
                right: -15px;
                line-height: 16px;
                border-radius: 100px;
                background: #F26649;
                color: #fff;
              }
              .header_4_2_2__boxRegist, .header_4_2_2__boxPhone {
                border-radius: 34px;
                color: #fff;
                padding: 5px 20px 5px 5px;
                font-size: 14px;
                font-weight: 600;
                text-transform: uppercase;
              }
              .header_4_2_2__boxRegist {
                background: #F26649;
                font-weight: 500;
                font-size: 13px;
                padding: 5px 13px;
              }
              .header_4_2_2__boxNoti {
                color: #93BDF3;
                position: relative;
                margin: 0 5px 0 15px;
                cursor: pointer;
              }
              .header_4_2_2__boxNoti span {
                position: absolute;
                width: 20px;
                height: 20px;
                background: #f00;
                border-radius: 100%;
                top: -10px;
                left: 10px;
                font-size: 12px;
                color: #fff;
              }
              .header_4_2_2__boxNoti2 {
                display: none;
              }
              .header_4_2_2__boxLocal {
                color: #93BDF3;
                margin: 0 5px;
              }
              .header_4_2_2__boxPhone {
                background: #EB461D;
                color: #ffffff;
                padding-left: 32px;
                padding-right: 15px;
                position: relative;
                border-radius: 5px;
              }
              .header_4_2_2__boxPhone::before {
                content: "";
                background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzREODI2RTEzMDYwMTFFQjlDN0Q4NUVFNTJGQzRFMDEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzREODI2RTAzMDYwMTFFQjlDN0Q4NUVFNTJGQzRFMDEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkVBNkJGOTI1QTlGMjExRUFBOUM4RjE4OEJDNzEwMTREIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkVBNkJGOTI2QTlGMjExRUFBOUM4RjE4OEJDNzEwMTREIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+IO1YKgAAATtJREFUeNpi/P//PwMBwAjEfUD8EogXAPELrKpABhGBj/9HgJVAzIeuBpmzDogfArEdDsN4gLgCyUBrbAZt+Y8KkA1jAmJpJD47EJ+AqrNCNqj8P3bgAFXED+V/AmJfJANhhrHDDNqKw6BtUA1sQBwCxGeg4pVIhoHAHphB3VgM+QjEGljCqRYq7wLl50D54iCOKZohb4FYEE8M3oSqY0Ry1QomYAo4DcT3kFIEKxB/wpOusoD4ARDzQ/nTgfgMzBYPNFedIyJtMeJKRwfQDJtPZGLFMIgXiH+hGTYbTYMEEPchpx9sBoGwOZYYPAyKFWh6eo0j0WLNaz5YDAO59AMWcTt8BjFAU/WX/8QBZnwGMUC9s42AIXuheZGoYiQUmhzQwT5kdYxEFGww4AjETkAsC8S3gbgVWRIgwAA3GqPEac2mywAAAABJRU5ErkJggg==") center 0 no-repeat;
                display: block;
                width: 20px;
                height: 20px;
                position: absolute;
                left: 8px;
                top: 5px;
              }
              .header_4_2_2 .modal .modal-title {
                font-size: 20px;
                text-align: center;
                color: #F26649;
              }
              .header_4_2_2 .modal .search {
                width: 90%;
                margin: 20px auto;
                position: relative;
              }
              .header_4_2_2 .modal .search input {
                width: 100%;
                padding: 5px 40px 5px 10px;
                border-radius: 4px;
                border: 1px solid #248de8;
                background: #f2f8fd;
              }
              .header_4_2_2 .modal .search button {
                position: absolute;
                top: 0;
                right: 0;
                height: 100%;
                background: #248de8;
                border: none;
                width: 38px;
                border-radius: 0 4px 4px 0;
                color: #fff;
                cursor: pointer;
              }
              .header_4_2_2.menufix {
                animation: animatetop 0.4s;
                background: #fff;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
              }
              .header_4_2_2.menufix .header_4_2_2__box__item {
                padding: 34px 10px;
              }
              .header_4_2_2.menufix .header_4_2_2__boxLogo img {
                transition: 0.3s;
              }
              .header_4_2_2.menufix .header_4_2_2__boxMain .menuSubBox {
                top: 85px;
              }
              .header_4_2_2.menufix .header_4_2_2__boxMain .search-2 {
                margin: 30px auto 0;
              }
              
              @media (max-width: 1024px) {
                body {
                  padding-top: 65px;
                }
                .header_4_2_2__box__item.li-mb {
                  display: block;
                }
                .header_4_2_2__box__item i.menu-icon.icon-mb {
                  display: block;
                }
                .header_4_2_2__box__item i.menu-icon.icon-pc {
                  display: none;
                }
                .header_4_2_2 {
                  background-color: #fff;
                  height: 65px;
                }
                .flag-mb {
                  display: block;
                  text-align: center;
                }
                .header_4_2_2 .head_tt {
                  margin-bottom: 3px;
                  margin-top: 3px;
                  font-size: 14px;
                  color: #f69679;
                }
                .header_4_2_2 .head_tt::before {
                  display: none;
                }
                .header_4_2_2__task {
                  margin-right: 15px;
                }
                .header_4_2_2__box {
                  display: block;
                }
                .header_4_2_2__box__section {
                  display: block;
                  width: 100%;
                }
                .header_4_2_2__box__item {
                  padding: 9px 15px;
                  font-weight: 600;
                  border-top: 1px dotted #d4d4d4;
                  text-align: left;
                  color: #333;
                }
                .header_4_2_2__box__item.active .icon-mb {
                  display: none !important;
                }
                .header_4_2_2__box__item.active .upd {
                  display: block !important;
                }
                .header_4_2_2__box__item br {
                  display: none;
                }
                .header_4_2_2__box__item-menuHome {
                  display: none;
                }
                .header_4_2_2__box__item-logosb {
                  display: block;
                  padding-left: 10px;
                  text-align: center;
                }
                .header_4_2_2__boxMain {
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
              
                .header_4_2_2__boxMain .menu {
                  display: block;
                  padding-top: 70px;
                }
                .header_4_2_2__boxMain .menuSub {
                  position: relative;
                }
                .header_4_2_2__boxMain .menuSub .menu-icon {
                  display: block;
                  font-size: 28px;
                  line-height: 0.2;
                  color: #f26649;
                  width: 100%;
                  position: absolute;
                  right: 10px;
                  top:11px;
                  text-align: right;
                }
                .header_4_2_2__boxMain .menuSub .arr::before {
                  display: none;
                }
                .header_4_2_2__boxMain .menuSub:hover .arr::before {
                  display: none;
                }
                .header_4_2_2__boxMain .menuSub:hover .menuSubBox {
                  display: none;
                }
                .header_4_2_2__boxMain .menuSub:hover > a {
                  color: #062d63;
                }
                .header_4_2_2__boxMain .menuSubBox {
                  position: inherit;
                  top: 0;
                  right: 0;
                  border-radius: 0;
                  width: 100%;
                  padding: 10px 15px;
                  background: #f3f3f3;
                }
                .header_4_2_2__boxMain .menuSubBox ul {
                  padding-left: 10px;
                }
                .header_4_2_2__boxMain .menuSubBox a {
                  color: #01597d;
                }
                .header_4_2_2__boxMain .menuSubBox ul li {
                  border-bottom: 1px dotted rgba(0,89,125,0.5);
                }
                .header_4_2_2__boxMain .menuSubBox .row {
                  padding: 0;
                }
                .header_4_2_2__boxMain .menuSubBox a:hover {
                  color: rgba(0, 0, 0, 0.7);
                }
                .header_4_2_2__boxMain .menuSubBox ul.mnsub {
                  padding: 0;
                }
                .header_4_2_2__boxMain .menuSubBox .address {
                  display: none;
                }
                .header_4_2_2__boxMain .menuSubBox.padding {
                  padding-top: 0;
                }
                .header_4_2_2__boxMain .menuSubBox.padding .head_tt {
                  margin-top: 0;
                }
                .header_4_2_2__boxMain .menuSubTitle {
                  margin-top: 10px;
                }
                .header_4_2_2__boxMain .search-2 {
                  display: none;
                }
                .header_4_2_2__boxLogo {
                  text-align: center;
                  width: 100px;
                  margin: 0 auto;
                  position: relative;
                  display: block;
                }
                .header_4_2_2__boxLogo img {
                  position: absolute;
                  top: 2px;
                  left: -30px;
                }
                .header_4_2_2__boxNav, .header_4_2_2__boxCall {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                }
                .header_4_2_2__box .search-1 {
                  display: flex;
                  position: absolute;
                  right: 45px;
                  top: -23px;
                }
                .header_4_2_2__boxRegist, .header_4_2_2__boxPhone {
                  margin: 0 5px;
                  display: block;
                  text-align: center;
                  border-radius: 6px;
                  padding: 8px;
                }
                .header_4_2_2__boxNoti2 {
                  position: absolute;
                  right: 0px;
                  top: 105px;
                  width: 100%;
                  height: 40px;
                  border-radius: 100%;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  color: #fff;
                  font-size: 14px;
                }
                .header_4_2_2__boxNoti2 form{
                  width: 100%;
                }
                .header_4_2_2__boxNoti2 span {
                  position: absolute;
                  width: 20px;
                  height: 20px;
                  background: #f00;
                  border-radius: 100%;
                  top: -5px;
                  left: 20px;
                  font-size: 12px;
                  color: #fff;
                }
                .header_4_2_2__boxPhone {
                  margin: 20px 0 0;
                  background: #EB461D;
                  color: #fff;
                  width: 100%;
                }
                .header_4_2_2__boxPhone::before {
                  left: 60px;
                  top: 10px;
                }
                .header_4_2_2__boxRegist {
                  margin: 0 10px;
                }
                .header_4_2_2__boxNoti, .header_4_2_2__boxLocal {
                  display: none;
                }
                .header_4_2_2.menufix {
                  animation: none;
                }
                .header_4_2_2.menufix .header_4_2_2__boxPhone {
                  margin-top: 15px;
                }
                .header_4_2_2.menufix .header_4_2_2__box__item {
                  padding: 9px 15px;
                }
                .header_4_2_2.menufix .header_4_2_2__boxLogo {
                  margin-top: 0;
                }
                .header_4_2_2.menufix .header_4_2_2__boxLogo img {
                  height: 45px;
                }
                .header_4_2_2.menufix .header_4_2_2__boxMain .menuSubBox {
                  top: 0;
                }
              }
              @media (max-width: 812px) {
                .header_4_2_2__boxNav {
                  left: -3px;
                }
                .header_4_2_2__boxCall {
                  right: 0;
                }
                .header_4_2_2__box .search-1 {
                  right: 60px;
                  top: -25px;
                  width: 40px;
                  height: 40px;
                }
              }
              @media (max-width: 414px) {
                .header_4_2_2#header_4_2_2.hide {
                  top:-105px;
                }
                .header_4_2_2__boxLogo {
                  width: 125px;
                }
                .popupSearch_1_0_0__search{
                  width: 100%;
                }
                .header_4_2_2__boxNav {
                  padding-right: 20px;
                }
                .header_4_2_2__box__item-logosb img {
                    max-width: 70%;
                    width: 60%;
                    margin: 20px 0 0;
                    height: auto;
                }
                .header_4_2_2__box .search-1 {
                  width: 35px;
                  height: 35px;
                  right: 10px;
                }
                .header_4_2_2__boxCall {
                  top: 20px;
                  right: 10px;
                  width: 30px;
                  height: 30px;
                  font-size: 14px;
                }
                .header_4_2_2__boxNoti2 {
                  left: 0;
                  top: 110px;
                  width: 100%;
                  height: 30px;
                  font-size: 14px;
                  background: none;
                }
              }
              @media (max-width: 375px) {
                .header_4_2_2__boxNoti2 {
                  right: 50px;
                }
              }
              @media (max-width: 320px) {
                .header_4_2_2__boxNoti2 {
                  right: 45px;
                }
                .header_4_2_2__boxNoti2 span {
                  font-size: 10px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  top: -10px;
                  left: 10px;
                }
                .header_4_2_2__boxLogo {
                  width: 145px;
                 }
              }
            </style>
        ';

        $js_inline .= '
          <script>
              const iconMenu = document.getElementById("icon-menu");
              const menuShow = document.getElementById("menu-show");
              const bgShow = document.getElementById("bg-menu");
              const iconSubMenu = document.getElementsByClassName("header_4_2_2__box__item");
              const iconRight = document.getElementsByClassName("menu-icon");
            
              var i;
                for (i = 0; i < iconSubMenu.length; i++) {
                    iconSubMenu[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
            
             
            
              iconMenu.addEventListener("click", function(){
                menuShow.classList.add("active");
                bgShow.classList.add("active");
              });
            
              bgShow.addEventListener("click", function(){
                menuShow.classList.remove("active");
                bgShow.classList.remove("active");
              });
          </script>
      ';
    }
  //   if (window.screen.width < 1050) {
  //     for ( const iconR of iconRight ){
  //         iconR.addEventListener("click", function(){
  //             if(iconR.hasClass("icon-angle-down")){
  //                 iconR.classList.add("icon-angle-up");
  //                 iconR.classList.remove("icon-angle-down");
  //             }
  //             else{
  //                 iconR.classList.remove("icon-angle-up");
  //                 iconR.classList.add("icon-angle-down");
  //             }
  //         });
  //     }
  // }
?> 

<?php get_template_part('Module/Popup/popup_search_1_0_0/popup_search_1_0_0'); ?>

<header class="header_4_2_2" id="header_4_2_2">
    <div class="container">
        <div class="header_4_2_2__box">
            <div class="header_4_2_2__box__section">
                <?php 
                  $postid = get_the_ID();
                  if ($postid == '140612'):
                    echo '
                      <h1 class="header_4_2_2__boxLogo">
                          <a href="/">
                              <img width="196" height="59" src="'.$path.'/images/logo.png" alt="Bệnh Viện Thẩm Mỹ Kangnam">
                          </a>
                      </h1>
                    ';
                  else:
                    echo '
                      <div class="header_4_2_2__boxLogo">
                          <a href="/">
                              <img width="196" height="59" src="'.$path.'/images/logo.png" alt="Bệnh Viện Thẩm Mỹ Kangnam">
                          </a>
                      </div>
                    ';                      
                  endif;
                ?>
                <div class="iconMid header_4_2_2__boxNav" id="icon-menu">☰</div>
                <!-- <a class="header_4_2_2__boxNoti2 bvkn_noti">
                    <i class="icon-bell-alt"></i>
                    <span>10+</span>
                </a> -->
               
                <a class="iconMid header_4_2_2__boxCall btnnkhotline popup_map_1_0_0__click"><i class="icon-location-2"><img width="15" height="15" src="<?php echo $path; ?>/images/location.svg" alt="location"></i></a>
            </div>
            <div class="header_4_2_2__box__section header_4_2_2__boxMain" id="menu-show">
                <a href="#page1" class="header_4_2_2__box__item-logosb"><img width="180" height="51" src="<?php echo $path; ?>/images/logo.png" alt="Bệnh Viện Thẩm Mỹ Kangnam"></a>

                <div class="flag-mb">
                    <a>
                        <i class="icon-search-2">
                            <img width="20" height="20" src="<?php echo $path; ?>/images/flag-vn.jpg" alt="vietnam">
                        </i>
                    </a>
                    <a>
                      <i class="icon-location-2">
                            <img width="20" height="20" src="<?php echo $path; ?>/images/flag-ko.jpg" alt="korean">
                        </i>
                    </a>
                    <a class="header_4_2_2__boxNoti2">
                      <form action="/" id="searchform" name="searchform" method="get">	
                        <div class="popupSearch_1_0_0__search">
                          <input id="s" name="s" type="text" placeholder="Nhập từ khóa tìm kiếm">
                          <button type="submit"><i class="icon-search-2"> <img width="20" height="20" src="https://benhvienthammykangnam.vn/wp-content/themes/KNBrandNew_ver3/Module_v2/Header/header_4_2_0/images/search.svg" alt="search"> </i></button>
                        </div>
                      </form>
                    </a>
                </div>

                <ul class="menu">

                    <?php
                        foreach( $field as $key2 => $value): 
                            $j=1;
                            foreach( $value as $key3 => $list):
                                $main_tt = explode("\n",  $list["title"]);
                                if( $list['acf_fc_layout'] == 'menu_don' ):
                                    echo '
                                        <li class="menuSub">
                                            <a href="'.$main_tt[1].'" class="header_4_2_2__box__item arr">'.$main_tt[0].'</a> 
                                        </li>
                                    ';
                                elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                                    echo '
                                        <li class="menuSub"><a href="'.$main_tt[1].'">'.$main_tt[0].'<i class="menu-icon icon-angle-down icon-pc">⌵</i><i class="menu-icon icon-angle-down icon-mb">₊</i><i class="menu-icon icon-angle-down icon-mb upd">₋</i></a>
                                            <div class="dropdown-menu dropdown-menu-7">
                                                <article class="dd dd-7">
                                                    <div class="ddnav ddnav-7">
                                                        '.$list["col1"].'
                                                    </div>
                                                </article>
                                            </div>
                                        </li>
                                    ';
                                elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                                    $main_tt = explode("\n",  $list["title"]);
                                    $x = substr("$main_tt[3]", 0,-1);

                                    if($x == 'yes'):
                                        $padding = 'padding';
                                    elseif($x == 'no'):
                                        $padding = '';
                                    endif;

                                    echo '
                                        <li class="menuSub">
                                            <a href="'.$main_tt[1].'" class="header_4_2_2__box__item arr">'.$main_tt[0].'<i class="menu-icon icon-angle-down icon-pc">⌵</i><i class="menu-icon icon-angle-down icon-mb">₊</i><i class="menu-icon icon-angle-down icon-mb upd">₋</i></a> 
                                                <div class="menuSubBox '.$padding.'">
                                                    <div class="row">
                                    ';
                                    
                                    $so_cot = $main_tt[2];
                                    if ($so_cot == ''):
                                        $so_cot = '1';
                                    endif;
                                    
                                    $main_ct = explode("&nbsp;",  $list["col1"]);
                                    if($so_cot == 1):
                                        $i = 12;
                                        for($j = 0; $j < 1; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                    elseif($so_cot == 2):
                                        $i = 6;
                                        for($j = 0; $j < 2; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }

                                    elseif($so_cot == 3):
                                        $i = 4;
                                        for($j = 0; $j < 3; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                    elseif($so_cot == 4):
                                        $i = 3;
                                        for($j = 0; $j < 4; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                        
                                    elseif($so_cot == 'auto'):
                                        echo'
                                            '.$list["col1"].'                                                
                                        ';

                                    endif;
                                    echo'
                                            </div>
                                            <div class="address">
                                                <span> <i class="icon-location-2"><img width="15" height="15" src="'.$path.'/images/location.svg" alt="địa chỉ"></i> '.$main_tt[4].' </span>
                                                <span> <i class="icon-location-2"><img width="15" height="15" src="'.$path.'/images/location.svg" alt="địa chỉ"></i> TP.HCM: 666 Cách mạng Tháng Tám, P.5, Q.Tân Bình </span>
                                            </div>
                                        </div>
                                    </li>
                                    ';
                                endif;
                                $j++;
                            endforeach;
                        endforeach;
                    ?>

                    <li class="menuSub">
                        <a href="/ket-qua-khach-hang-dich-vu/" rel="nofollow" class="header_4_2_2__box__item arr li-mb">Hình ảnh trước sau khách hàng</a> 
                    </li>
                    <li class="menuSub">
                        <a href="/video-dich-vu/" rel="nofollow" class="header_4_2_2__box__item arr li-mb">Video dịch vụ</a> 
                    </li>
                    
                </ul>

                <!-- <a href="tel:<?php echo $field['image']; ?>" class="header_4_2_2__boxPhone btnnkhotline btncallnow"><?php echo $field['hotline']; ?></a>
                <a href="#pageReg" class ="header_4_2_2__boxRegist btn">Tư vấn miễn phí</a> -->
                
                <div class="header_4_2_2__task">
                        <a class="header_4_2_2__boxPhone btnnkhotline btncallnow btnkn1call">1900.6466</a>
                        <a class="header_4_2_2__boxNoti">
							              <i class="icon-search-2">
                                <img width="20" height="20" src="<?php echo $path; ?>/images/flag-vn.jpg" alt="vietnam">
                            </i>
						            </a>
                    	  <a href="#" class="header_4_2_2__boxLocal">
                    		  <i class="icon-location-2">
                                <img width="20" height="20" src="<?php echo $path; ?>/images/flag-ko.jpg" alt="korean">
                            </i>
                    	  </a>
                    </div>
            </div>
            <div class="header_4_2_2__box-bg" id="bg-menu"></div>
        </div>
    </div>
    <?php get_template_part('Module_v2/module_subMenu'); ?>
</header>


<?php
  echo $js_inline;
?>