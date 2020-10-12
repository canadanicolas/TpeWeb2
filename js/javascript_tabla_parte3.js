/*"use strict"

document.addEventListener("DOMContentLoaded", precargar);
document.querySelector("#boton_agregar_tabla").addEventListener("click",agregar);
document.querySelector("#boton_agregar_tabla_x3").addEventListener("click",agregar_x3);
document.querySelector("#boton_vaciar_tabla").addEventListener("click",vaciar_todo);
document.querySelector("#boton_filtro").addEventListener("click",filtrar);
document.addEventListener("DOMContentLoaded", manterner_cargada);

let url = "http://web-unicen.herokuapp.com/api/groups/135canadanicolas/tpe/";

async function precargar(){
    try{
    let respuesta = await fetch(url);
    let json = await respuesta.json();
    document.querySelector("#tbody_tabla_ruedas").innerHTML = "";
    for (let i = 0; i < json.tpe.length;  i++){
        if (json.tpe[i].thing[0].precios <= 30){ 
            document.querySelector("#tbody_tabla_ruedas").innerHTML += 
            `<tr class="tabla_oferta">
            <td>${json.tpe[i].thing[0].marcas}</td>
            <td>${json.tpe[i].thing[0].modelos}</td>
            <td>${json.tpe[i].thing[0].medidas}</td>
            <td>${json.tpe[i].thing[0].durezas}</td>
            <td>${json.tpe[i].thing[0].precios}</td>
            <td><button class="borrar_fila">Borrar</button></td>
            <td><button class="editar_fila">Editar</button></td>
            <tr/>`;
        }
        else { document.querySelector("#tbody_tabla_ruedas").innerHTML += 
        `<tr>
        <td>${json.tpe[i].thing[0].marcas}</td>
        <td>${json.tpe[i].thing[0].modelos}</td>
        <td>${json.tpe[i].thing[0].medidas}</td>
        <td>${json.tpe[i].thing[0].durezas}</td>
        <td>${json.tpe[i].thing[0].precios}</td>
        <td><button class="borrar_fila">Borrar</button></td>
        <td><button class="editar_fila">Editar</button></td>
        <tr/>`;
        }
    }
    let botones_borrar_filas = document.querySelectorAll(".borrar_fila");
    let botones_editar_filas = document.querySelectorAll(".editar_fila");
    for (let i = 0; i < botones_borrar_filas.length; i++) {
        botones_borrar_filas[i].addEventListener("click", ()=>{ borrar_fila(i)}); 
        botones_editar_filas[i].addEventListener("click", ()=>{ editar_fila(i)}); 
    }
}
    catch(e){
        console.log("error");
      }
}

async function borrar_fila(i) {
    let respuesta = await fetch(url);
    let json = await respuesta.json();
    await fetch(url+json.tpe[i]._id,{
        "method":"DELETE",
    });
    filtrar();
}

async function editar_fila(i) {
    let marcaed = document.querySelector("#agregar_marca").value;
    let modeloed = document.querySelector("#agregar_modelo").value;
    let medidaed = document.querySelector("#agregar_medida").value;
    let durezaed = document.querySelector("#agregar_dureza").value;
    let precioed = document.querySelector("#agregar_precio").value;

    let edicion = {
        "thing": [{
            "marcas": marcaed,
            "modelos": modeloed,
            "medidas": medidaed,
            "durezas": durezaed,
            "precios": precioed,
            }]
    };
    try{
    let respuesta = await fetch(url);
    let json = await respuesta.json();
    await fetch(url+json.tpe[i]._id,{
        "method":"PUT",
        "mode": 'cors',
        "headers": { "Content-Type": "application/json" },
        "body": JSON.stringify(edicion)
    });
    filtrar();
}
catch(e){
    console.log("error");
  }
}

async function filtrar(){
    let valor_filtro = parseInt(document.querySelector("#filtro").value);
    try{
    let respuesta = await fetch(url);
    let json = await respuesta.json();
    document.querySelector("#tbody_tabla_ruedas").innerHTML = "";
    for (let i = 0; i < json.tpe.length;  i++){
        if (json.tpe[i].thing[0].medidas < valor_filtro){
            document.querySelector("#tbody_tabla_ruedas").innerHTML += 
            `<tr class="tabla_ocultar">
            <td>${json.tpe[i].thing[0].marcas}</td>
            <td>${json.tpe[i].thing[0].modelos}</td>
            <td>${json.tpe[i].thing[0].medidas}</td>
            <td>${json.tpe[i].thing[0].durezas}</td>
            <td>${json.tpe[i].thing[0].precios}</td>
            <td><button class="borrar_fila">Borrar</button></td>
            <td><button class="editar_fila">Editar</button></td>
            <tr/>`;
        }
        else if (json.tpe[i].thing[0].precios <= 30){ 
            document.querySelector("#tbody_tabla_ruedas").innerHTML += 
            `<tr class="tabla_oferta">
            <td>${json.tpe[i].thing[0].marcas}</td>
            <td>${json.tpe[i].thing[0].modelos}</td>
            <td>${json.tpe[i].thing[0].medidas}</td>
            <td>${json.tpe[i].thing[0].durezas}</td>
            <td>${json.tpe[i].thing[0].precios}</td>
            <td><button class="borrar_fila">Borrar</button></td>
            <td><button class="editar_fila">Editar</button></td>
            <tr/>`;
        }
        else { document.querySelector("#tbody_tabla_ruedas").innerHTML += 
        `<tr>
        <td>${json.tpe[i].thing[0].marcas}</td>
        <td>${json.tpe[i].thing[0].modelos}</td>
        <td>${json.tpe[i].thing[0].medidas}</td>
        <td>${json.tpe[i].thing[0].durezas}</td>
        <td>${json.tpe[i].thing[0].precios}</td>
        <td><button class="borrar_fila">Borrar</button></td>
        <td><button class="editar_fila">Editar</button></td>
        <tr/>`;
        }
    }
    let botones_borrar_filas = document.querySelectorAll(".borrar_fila");
    let botones_editar_filas = document.querySelectorAll(".editar_fila");
    for (let i = 0; i < botones_borrar_filas.length; i++) {
        botones_borrar_filas[i].addEventListener("click", ()=>{ borrar_fila(i)}); 
        botones_editar_filas[i].addEventListener("click", ()=>{ editar_fila(i)}); 
    }
    console.log(json);
}
catch(e){
    console.log("error");
  }
}

async function agregar() {
    let marca = document.querySelector("#agregar_marca").value;
    let modelo = document.querySelector("#agregar_modelo").value;
    let medida = document.querySelector("#agregar_medida").value;
    let dureza = document.querySelector("#agregar_dureza").value;
    let precio = document.querySelector("#agregar_precio").value;

    let nuevacarga = {
      "thing": [{
        "marcas": marca,
        "modelos": modelo,
        "medidas": medida,
        "durezas": dureza,
        "precios": precio,
        }]
    };
    try{
    await fetch(url, {
      "method": "POST",
      "headers":{"Content-Type": "application/json"},
      "body": JSON.stringify(nuevacarga)
    })
    filtrar();
}
catch(e){
    console.log("error");
  }
}

function agregar_x3(){
    for (let i = 1; i <= 3; i++) agregar();
}

async function vaciar_todo(){
    try{
    let respuesta = await fetch(url);
    let json = await respuesta.json();
    for (let i = 0; i < json.tpe.length; i++) {
        let url2 = "http://web-unicen.herokuapp.com/api/groups/135canadanicolas/tpe/"+ json.tpe[i]._id;
        await fetch(url2, {
            "method" : "DELETE",
        });
    }
    precargar();
    console.log(json.tpe); 
}
catch(e){
    console.log("error");
  }
}
function manterner_cargada(){
    setTimeout(manterner_cargada, 5000);{
        filtrar();
    }
}*/