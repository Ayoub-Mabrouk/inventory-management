var add_product_popup = document.querySelector(".popup.container.add");
var edit_product_popup = document.querySelector(".popup.container.edit");
var container = document.querySelector("#container");
var delete_pop = document.querySelector(".delete-pop");
var delete_buttons = document.querySelectorAll(".delete");
var delete_ok_button = document.getElementById('confirm-delete');
var image_input = document.getElementById("fileupload");
var close_info_button = document.querySelector(".close-info-button");
var product_pop_up = document.getElementById("product-pop-up");
var data_line = document.querySelectorAll(".data p");
var add_prod_mobile = document.querySelector(".add-prod");
var close_edit_button = document.querySelector("#close-edit");

document.getElementById('add-button2').addEventListener('click',verify_add);

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

close_edit_button.addEventListener('click', close_edit_pop);
close_info_button.addEventListener('click', close_info);
image_input.addEventListener('change', image_name);
add_prod_mobile.addEventListener('click', addproduct);

function verify_add(){
    
}
function edit_product() {
    product = this.parentElement.parentElement;
    fill_edit_pop(product);
    container.style.webkitFilter = "blur(6px)";
    edit_product_popup.style.opacity = "1";
    edit_product_popup.style.visibility = "visible";
    edit_product_popup.style.transform = "scale(1)";
}
function fill_edit_pop(product){
    
    document.querySelector("#editproduct_popup .bc").value=product.children[1].innerHTML;
    document.querySelector("#editproduct_popup .price").value=product.children[5].innerHTML.slice(0, -1);
    document.querySelector("#editproduct_popup .quantity").value=product.children[3].innerHTML;
    document.querySelector("#editproduct_popup .name").value=product.children[2].innerHTML;
    document.querySelector("#editproduct_popup .brand").value=product.children[4].innerHTML;
    document.querySelector("#editproduct_popup .owner").value=product.children[6].innerHTML;
    
}


function addproduct() {

    container.style.webkitFilter = "blur(6px)";
    add_product_popup.style.opacity = "1";
    add_product_popup.style.visibility = "visible";
    add_product_popup.style.transform = "scale(1)";
}


function close_add_pop() {
    container.style.webkitFilter = "blur(0px)";
    add_product_popup.style.opacity = "0";
    add_product_popup.style.visibility = "hidden";
    add_product_popup.style.transform = "scale(0)";

}
function close_edit_pop() {

    container.style.webkitFilter = "blur(0px)";
    edit_product_popup.style.opacity = "0";
    edit_product_popup.style.visibility = "hidden";
    edit_product_popup.style.transform = "scale(0)";

}
function delete_confirmation() {
    product = this;
    container.style.webkitFilter = "blur(6px)";
    delete_pop.style.opacity = "1";
    delete_pop.style.visibility = "visible";
    delete_pop.style.transform = "scale(1)";
    delete_ok_button.addEventListener('click', function () {
        delete_ok(product);
    })
}
function close_delete_pop() {
    container.style.webkitFilter = "blur(0px)";
    delete_pop.style.opacity = "0";
    delete_pop.style.visibility = "hidden";
    delete_pop.style.transform = "scale(0)";
}

function delete_ok(product) {
    product.parentElement.parentElement.remove();
    container.style.webkitFilter = "blur(0px)";
    delete_pop.style.opacity = "0";
    delete_pop.style.visibility = "hidden";
    delete_pop.style.transform = "scale(0)";
}
function image_name(event) {
    // console.log(document.querySelector("#fileupload").files[0]);
    // document.getElementById("product_image").src="/icons/dashboard.svg";
    document.getElementById("product_image").src = URL.createObjectURL(event.target.files[0]);


}
function close_info() {
    container.style.webkitFilter = "blur(0px)";
    product_pop_up.style.opacity = "0";
    product_pop_up.style.visibility = "hidden";
    product_pop_up.style.transform = "scale(0)";
}
function open_info() {
    container.style.webkitFilter = "blur(6px)";
    product_pop_up.style.opacity = "1";
    product_pop_up.style.visibility = "visible";
    product_pop_up.style.transform = "scale(1)";

}