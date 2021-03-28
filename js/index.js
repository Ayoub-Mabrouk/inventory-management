var add_product_popup = document.querySelector(".popup.container.add");
var edit_product_popup = document.querySelector(".popup.container.edit");
var container = document.querySelector("#container");
var delete_pop = document.querySelector(".delete-pop");
var delete_buttons = document.querySelectorAll(".delete");
var delete_ok_button = document.getElementById('confirm-delete');
var image_input = document.getElementById("fileupload_add");
var image_input_edit = document.getElementById("fileupload_edit");
var close_info_button = document.querySelector(".close-info-button");
var product_pop_up = document.getElementById("product-pop-up");
var data_line = document.querySelectorAll(".data ");
var add_prod_mobile = document.querySelector(".add-prod");
var close_edit_button = document.querySelector("#close-edit");

document.getElementById('log-out').addEventListener('click', function () {
    document.getElementById('logout-form').submit();
})

document.getElementById('add-button2').addEventListener('click', verify_add);
document.getElementById('edit-button').addEventListener('click', verify_edit);

var edit_buttons = document.querySelectorAll(".edit_button");
for (i = 0; i < edit_buttons.length; i++) {
    edit_buttons[i].addEventListener("click", edit_product);
}
for (i = 0; i < data_line.length; i++) {
    data_line[i].addEventListener("click", open_info);
}
for (i = 0; i < delete_buttons.length; i++) {
    delete_buttons[i].addEventListener("click", delete_confirmation);
}


close_info_button.addEventListener('click', close_info);
image_input.addEventListener('change', image_name_add);
image_input_edit.addEventListener('change', image_name_edit);
add_prod_mobile.addEventListener('click', addproduct);

function verify_add(event) {
    var str_reg = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
    var p_name = document.querySelector('#addproduct_popup input[name="name"]').value;
    var price = document.querySelector('#addproduct_popup input[name="price"]').value;
    var quantity = document.querySelector('#addproduct_popup input[name="quantity"]').value;
    var bc = document.querySelector('#addproduct_popup input[name="bc"]').value;
    var brand = document.querySelector('#addproduct_popup input[name="brand"]').value;

    if ( (p_name.length > 0)&& (str_reg.test(p_name)) && (price.length > 0) && (!isNaN(price))
      && (quantity.length>0)  && (!isNaN(quantity))  && (bc.length>0)  && (!isNaN(bc)) 
      && (brand.length > 0) && (str_reg.test(brand)) 
    ) {
        console.log('name is right');
        document.getElementById("add_form").submit();
    }
    else {
        event.preventDefault();
    }
}
function verify_edit(event) {
    var str_reg = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
    var p_name = document.querySelector('#editproduct_popup input[name="name"]').value;
    var price = document.querySelector('#editproduct_popup input[name="price"]').value;
    var quantity = document.querySelector('#editproduct_popup input[name="quantity"]').value;
    var bc = document.querySelector('#editproduct_popup input[name="bc"]').value;
    var brand = document.querySelector('#editproduct_popup input[name="brand"]').value;

    if ( (p_name.length > 0)&& (str_reg.test(p_name)) && (price.length > 0) && (!isNaN(price))
      && (quantity.length>0)  && (!isNaN(quantity))  && (bc.length>0)  && (!isNaN(bc)) 
      && (brand.length > 0) && (str_reg.test(brand)) 
    ) {
        console.log('name is right');
        document.getElementById("edit_form").submit();
    }
    else {
        event.preventDefault();
    }
}

function edit_product(event) {

    product = this.parentElement.parentElement;
    fill_edit_pop(product);
    container.style.webkitFilter = "blur(6px)";
    edit_product_popup.style.opacity = "1";
    edit_product_popup.style.visibility = "visible";
    edit_product_popup.style.transform = "scale(1)";
    event.stopPropagation();
}
function fill_edit_pop(product) {
    document.getElementById("product_image_edit").src = "product_images/" + product.children[7].innerHTML;
    document.querySelector("#editproduct_popup .id.edit").value = product.children[0].innerHTML;
    document.querySelector("#editproduct_popup .bc").value = product.children[1].innerHTML;
    document.querySelector("#editproduct_popup .price").value = product.children[5].innerHTML.slice(0, -1);
    document.querySelector("#editproduct_popup .quantity").value = product.children[3].innerHTML;
    document.querySelector("#editproduct_popup .name").value = product.children[2].innerHTML;
    document.querySelector("#editproduct_popup .brand").value = product.children[4].innerHTML;
    document.querySelector("#editproduct_popup .owner").value = product.children[6].innerHTML;

}


function addproduct() {

    container.style.webkitFilter = "blur(6px)";
    add_product_popup.style.opacity = "1";
    add_product_popup.style.visibility = "visible";
    add_product_popup.style.transform = "scale(1)";
}


function close_add_pop(event) {
    container.style.webkitFilter = "blur(0px)";
    add_product_popup.style.opacity = "0";
    add_product_popup.style.visibility = "hidden";
    add_product_popup.style.transform = "scale(0)";
    event.preventDefault();

}
function close_edit_pop(event) {

    container.style.webkitFilter = "blur(0px)";
    edit_product_popup.style.opacity = "0";
    edit_product_popup.style.visibility = "hidden";
    edit_product_popup.style.transform = "scale(0)";
    event.preventDefault();

}
function delete_confirmation(event) {

    // product = this;
    var id = this.parentElement.parentElement.children[0].innerHTML;
    document.getElementById('delete_hidden_input').value = id;
    container.style.webkitFilter = "blur(6px)";
    delete_pop.style.opacity = "1";
    delete_pop.style.visibility = "visible";
    delete_pop.style.transform = "scale(1)";
    event.stopPropagation();
    delete_ok_button.addEventListener('click', function () {
        delete_ok();
    })
}

// document.getElementById("close-delete").addEventListener('click',close_delete_pop);

function close_delete_pop(event) {
    event.preventDefault();
    container.style.webkitFilter = "blur(0px)";
    delete_pop.style.opacity = "0";
    delete_pop.style.visibility = "hidden";
    delete_pop.style.transform = "scale(0)";

}

function delete_ok() {
    // product.parentElement.parentElement.remove();
    container.style.webkitFilter = "blur(0px)";
    delete_pop.style.opacity = "0";
    delete_pop.style.visibility = "hidden";
    delete_pop.style.transform = "scale(0)";
}
function image_name_add(event) {

    document.getElementById("product_image_add").src = URL.createObjectURL(event.target.files[0]);
}
function image_name_edit(event) {

    document.getElementById("product_image_edit").src = URL.createObjectURL(event.target.files[0]);
}
function close_info() {
    container.style.webkitFilter = "blur(0px)";
    product_pop_up.style.opacity = "0";
    product_pop_up.style.visibility = "hidden";
    product_pop_up.style.transform = "scale(0)";
}
function open_info() {

    var product = this;
    document.querySelector("#product-pop-up .price").innerHTML = product.children[5].innerHTML;
    document.querySelector("#product-pop-up .quantity").innerHTML = product.children[3].innerHTML;
    document.querySelector("#product-pop-up .name").innerHTML = product.children[2].innerHTML;
    document.querySelector("#product-pop-up .brand").innerHTML = product.children[4].innerHTML;
    document.querySelector("#product-pop-up .owner").innerHTML = product.children[6].innerHTML;
    document.querySelector('#image_popup').src = "product_images/" + product.children[7].innerHTML;
    // document.querySelector('#image_popup').src="/product_images/"+product.children[7].innerHTML;
    container.style.webkitFilter = "blur(6px)";
    product_pop_up.style.opacity = "1";
    product_pop_up.style.visibility = "visible";
    product_pop_up.style.transform = "scale(1)";

}
