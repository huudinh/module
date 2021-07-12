const iconMenu = document.getElementById("toggle");
        const menus = document.getElementsByClassName("header_15_0_0_box2");
        const headerMenu = document.getElementById("headerMenu");
        const menuBg = document.getElementsByClassName("header_15_0_0_box3");
        const iconSubMenu = document.getElementsByClassName("menu-icon");
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

        Element.prototype.hasClass = function (className) {
            return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
        };

        iconMenu.addEventListener("click", function () {
            for (const bg of menuBg) {
                if (bg.hasClass("act")) {
                    bg.classList.remove("act");
                }
                else {
                    bg.classList.add("act");
                }
            }
        });

        for (const bg of menuBg) {
            bg.addEventListener("click", function () {
                bg.classList.remove("act");
                headerMenu.classList.toggle("show");
                if (iconMenu.hasClass("on")) {
                    iconMenu.classList.remove("on");
                }
            });
        }

        iconMenu.addEventListener("click", function () {
            iconMenu.classList.toggle("on");
        });

        iconMenu.addEventListener("click", function () {
            for (const menu of menus) {
                menu.classList.toggle("show");
            }
        });