const addBtn= document.querySelector(".add");
const input= document.querySelector(".in-group");
const addBtn2= document.querySelector(".add2");
const input2= document.querySelector(".in-group2");
const addBtn3= document.querySelector(".add3");
const input3= document.querySelector(".in-group3");
const addBtn4= document.querySelector(".add4");
const input4= document.querySelector(".in-group4");

function removeInput(){
    this.parentElement.remove();

}
function addInput(){
    const cantidadexp=document.createElement("input");
    cantidadexp.type = "text";
    cantidadexp.placeholder= "Ingresa tu experiencia"
    cantidadexp.name="cantidadexp[]";

    const btn=document.createElement("a");
    btn.className="delete";
    btn.innerHTML="&times";

    btn.addEventListener("click",removeInput);
    const flex=document.createElement("div");
    flex.className="flex";

    input.appendChild(flex);
    flex.appendChild(cantidadexp);
    flex.appendChild(btn);

}


//formacion
function addInput2(){
    const cantidadfor=document.createElement("input");
    cantidadfor.type = "text";
    cantidadfor.placeholder= "Ingresa tu formacion"
    cantidadfor.name="cantidadfor[]";

    const btn=document.createElement("a");
    btn.className="delete";
    btn.innerHTML="&times";

    btn.addEventListener("click",removeInput);
    const flex=document.createElement("div");
    flex.className="flex";

    input2.appendChild(flex);
    flex.appendChild(cantidadfor);
    flex.appendChild(btn);

}

//idiomas
function addInput3(){
    const cantidadidi=document.createElement("input");
    cantidadidi.type = "text";
    cantidadidi.placeholder= "Ingresa tu idioma"
    cantidadidi.name="cantidadidi[]";

    const btn=document.createElement("a");
    btn.className="delete";
    btn.innerHTML="&times";

    btn.addEventListener("click",removeInput);
    const flex=document.createElement("div");
    flex.className="flex";

    input3.appendChild(flex);
    flex.appendChild(cantidadidi);
    flex.appendChild(btn);

}
//Apitudes
function addInput4(){
    const cantidadapt=document.createElement("input");
    cantidadapt.type = "text";
    cantidadapt.placeholder= "Ingresa tu idioma"
    cantidadapt.name="cantidadidi[]";

    const btn=document.createElement("a");
    btn.className="delete";
    btn.innerHTML="&times";

    btn.addEventListener("click",removeInput);
    const flex=document.createElement("div");
    flex.className="flex";

    input4.appendChild(flex);
    flex.appendChild(cantidadapt);
    flex.appendChild(btn);

}
//adbotom
addBtn.addEventListener("click", addInput);
addBtn2.addEventListener("click", addInput2);
addBtn3.addEventListener("click", addInput3);
addBtn4.addEventListener("click", addInput4);