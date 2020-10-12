"use strict"

let random_captcha = generar_captcha_random();
let boton_captcha_random = document.getElementById("boton_generar_captcha");
boton_captcha_random.addEventListener("click", generar_captcha_random);

function generar_captcha_random(){
    let random1 = Math.floor(Math.random() * 49999);
    let random2 = Math.floor(Math.random() * 50000);
    let random_captcha = (random1 + random2);
    document.querySelector("#captcha_random").innerHTML = random_captcha;
}
let boton_verificar = document.getElementById("validar_captcha");
boton_verificar.addEventListener("click", validar);

function validar(){
    let captcha_escrito = document.getElementById("captcha_user").value;
    let random_captcha = document.getElementById("captcha_random").innerHTML;
    if (captcha_escrito === random_captcha){
        document.querySelector("#tick_o_cruz").src = "imagenes/tick.jpg"
        document.querySelector("#captcha_correcto_incorrecto").innerHTML = "captcha correcto";
        document.querySelector("#boton_submit").classList.toggle("show");
    }
    else{
        document.querySelector("#tick_o_cruz").src = "imagenes/cruz.jpg"
        document.querySelector("#captcha_correcto_incorrecto").innerHTML = "captcha incorrecto";
    }
} 
