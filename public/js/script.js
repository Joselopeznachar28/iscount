//REPEAT FIELDS IN FORM THE FAMILIES
let familiar = document.getElementById("addFamiliar");
familiar?.addEventListener("click", addForm);

let index = 0;

function addForm(){
    index++;
    let html = getCamposFamiliarHtml();
    let wrapper = document.querySelector('.wrapper');
    wrapper.insertAdjacentHTML('beforeend', html);
}

function getCamposFamiliarHtml(){
    let htmlOpen = '<div class="camposFamiliar"><div class="row"><div class="col-sm-6">';
        htmlOpen += '<label for="name" class="form-label">Nombre</label>';
        htmlOpen += '<input type="text" name="familyMembers['+index+'][name]" id="memberName" placeholder="Ingrese el Nombre" class="form-control"></div>';   
        htmlOpen += '<div class="col-sm-6"><label for="lastname" class="form-label">Apellido</label>';  
        htmlOpen += '<input type="text" name="familyMembers['+index+'][lastname]" id="memberLastName" placeholder="Ingrese el Apellido" class="form-control"></div></div><br>';
        htmlOpen += '<div class="row"><div class="col-sm-2">';
        htmlOpen += '<label for="tipo_identification" class="form-label">Nacionalidad</label>';
        htmlOpen += '<select name="familyMembers['+index+'][tipo_identification]" id="memberTypeIdentification" class="form-control">';
        htmlOpen += '<option value="Venezolana" selected="selected">V-</option>';
        htmlOpen += '<option value="Extranjero" selected="selected">E-</option>';
        htmlOpen += '<option value="Seleccionar" selected="selected" disabled>--Seleccionar--</option></select></div>';
        htmlOpen += '<div class="col-sm-4"><label for="identification" class="form-label">Identificacion</label>';
        htmlOpen += '<input type="text" name="familyMembers['+index+'][identification]" id="memberIdentification" placeholder="Ingrese la Cedula" class="form-control"></div>';
        htmlOpen += '<div class="col-sm-6"><label for="type" class="form-label">Familiar</label><br>';
        htmlOpen += '<select name="familyMembers['+index+'][type]" id="typeFamily" class="form-control">';
        htmlOpen += '<option value="Padre">Padre</option><option value="Madre">Madre</option>';
        htmlOpen += '<option value="Hijo">Hijo</option><option value="Hija">Hija</option>';
        htmlOpen += '<option value="Seleccionar" selected="selected" disabled>--Seleccionar--</option></select><br></div></div><hr></div>';

        return htmlOpen;
}

//ADD OPTIONS IN FIELD RIF AND ID 
function documentOptions(){

    let getTypeRif = ['Juridico','Persona Natural'];
    let getTypeId = ['Extranjero', 'Venezolano'];

    let getValueSelect = document.getElementById('getTypeDocument'); 
    
    let getSelectOptions = document.getElementById('type_document');

    function removeAll(){
        while(getSelectOptions.options.length > 0) { 
            getSelectOptions.remove(0)
        }
    }

    if(getValueSelect.value == "RIF"){
        removeAll();
        getTypeRif.forEach(type => {
            let createOptions = document.createElement('option');
            createOptions.value = type;
            createOptions.text  = type;
            getSelectOptions.appendChild(createOptions);
        });
        
    } else {
        removeAll();
        getTypeId.forEach(type => {
            let createOptions = document.createElement('option');
            createOptions.value = type;
            createOptions.text  = type;
            getSelectOptions.appendChild(createOptions);
        });
      }     
}

//ADD MORE PRODUCTS IN ACQUISITIONS.
let addProduct = document.getElementById("addMoreProduct");
//THE INTERROGATION SIGNE IS USE FOR VALIDATE IF EXIST OR NOT THE VARIABLE
addProduct?.addEventListener("click", otherProduct);

/*let providers = [];
let saveProviders = documentOptions.getElementById('saveProviders');
saveProviders?.addEventListener('click', getProviderValues);

function getProviderValues(){

    let getProviders = document.querySelector('.containerProvider');
    console.log(getProviders.value);
}*/

function otherProduct(){
    index++;
    let htmlbudgetProducts = repeatBudgetProductsHTML();
    let containerBudgetProducts = document.querySelector('.containerBudgetProducts');
    containerBudgetProducts.insertAdjacentHTML('beforeend', htmlbudgetProducts)
    console.log(containerBudgetProducts.value);
}

function repeatBudgetProductsHTML(){
    let htmlRepeat = '<div class="row">';
    htmlRepeat += '</div></div><div class="row"><div class="col-sm-2">';
    htmlRepeat += '<label for="name" class="form-label">Producto</label>';
    htmlRepeat += '<input type="text" name="products['+index+'][name]" id="name" placeholder="Nombre del Producto" class="form-control"></div>';
    htmlRepeat += '<div class="col-sm-2"><label for="description" class="form-label">DESCRIPCION</label>';
    htmlRepeat += '<input name="products['+index+'][description]" id="description" class="form-control" placeholder="Descripcion"></input></div>';
    htmlRepeat += '<div class="col-sm-2"><label for="quantity" class="form-label">CANTIDAD</label>';
    htmlRepeat += '<input type="number" name="products['+index+'][quantity]" id="quantity" placeholder="Cantidad" class="form-control"></div>';
    htmlRepeat += '<div class="col-sm-2"><label for="unitPriceBs" class="form-label">VEF/U</label>';
    htmlRepeat += '<input type="number" name="products['+index+'][unitPriceBs]" id="unitPriceBs" class="form-control"></div>';
    htmlRepeat += '<div class="col-sm-2"><label for="unitPriceDollar" class="form-label">$/U</label>';
    htmlRepeat += '<input type="number" name="products['+index+'][unitPriceDollar]" id="unitPriceDollar" class="form-control"></div><br>';
    
    return htmlRepeat;
}

