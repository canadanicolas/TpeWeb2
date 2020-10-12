"use strict"

document.querySelector("#menu").addEventListener("click", toggleMenu);

function toggleMenu() {
    document.querySelector("#barranavegacion").classList.toggle("show");
}