/* Projekt Webbdesign för CMS - Moa Hjemdahl 2019*/
"use strict";

// Variabel
var toggleNavStatus = false;
var getMenu = document.querySelector(".menu-dropdown");

// Funktion för toggle meny
function toggleNav() {
    if (toggleNavStatus === false) {
        getMenu.style.visibility = "visible";
        getMenu.style.width = "100vw";

        toggleNavStatus = true;
    } else {
        getMenu.style.visibility = "hidden";
        getMenu.style.width = "0";

        toggleNavStatus = false;
    }
}
