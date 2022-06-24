let familiar = document.getElementById("addFamiliar");
familiar.addEventListener("click", agregarForm);

function agregarForm(){
    let camposFamiliar = document.getElementById('camposFamiliar');
    let nuevo = camposFamiliar.cloneNode(true);
    
    let otroFamiliar = document.getElementById('otroFamiliar');
    otroFamiliar.appendChild(nuevo);
}
