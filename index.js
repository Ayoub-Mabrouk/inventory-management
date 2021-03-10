var add_product_popup = document.querySelector(".popup.container.add");
var edit_product_popup = document.querySelector(".popup.container.edit");
var edit = document.querySelector(".edit");
var container=document.querySelector("#container");
var delete_pop = document.querySelector(".delete-pop");
var delete_button= document.querySelector(".delete");
var image_input = document.getElementById("fileupload");
var close_info_button = document.querySelector(".close-info-button");
var product_pop_up =document.getElementById("product-pop-up");
var data_line =document.querySelectorAll(".data p");
var add_prod_mobile = document.querySelector(".add-prod");

for(i=0;i<data_line.length;i++){
    data_line[i].addEventListener("click", open_info);
}

close_info_button.addEventListener('click', close_info);
image_input.addEventListener('change',image_name);
add_prod_mobile.addEventListener('click',addproduct);
edit.addEventListener("click", editproduct);
delete_button.addEventListener("click", delete_confirmation);
function  editproduct() {
    container.style.webkitFilter = "blur(6px)";
    edit_product_popup.style.opacity="1";
    edit_product_popup.style.visibility="visible";
    edit_product_popup.style.transform="scale(1)";   
    
}
function  addproduct() {
    container.style.webkitFilter = "blur(6px)";
    add_product_popup.style.opacity="1";
    add_product_popup.style.visibility="visible";
    add_product_popup.style.transform="scale(1)";   
}
function close_add_pop() {
    container.style.webkitFilter = "blur(0px)";
    add_product_popup.style.opacity="0";
    add_product_popup.style.visibility="hidden";
    add_product_popup.style.transform="scale(0)";   
    
}
function close_edit_pop() {
    container.style.webkitFilter = "blur(0px)";
    edit_product_popup.style.opacity="0";
    edit_product_popup.style.visibility="hidden";
    edit_product_popup.style.transform="scale(0)";   
    
}
function delete_confirmation() {
    container.style.webkitFilter = "blur(6px)";
    delete_pop.style.opacity="1";
    delete_pop.style.visibility="visible";
    delete_pop.style.transform="scale(1)";   
}
function close_delete_pop() {
    container.style.webkitFilter = "blur(0px)";
    delete_pop.style.opacity="0";
    delete_pop.style.visibility="hidden";
    delete_pop.style.transform="scale(0)";   
}
function image_name() {
    console.log(document.querySelector("#fileupload").files[0]);
    document.getElementById("product_image").src="/icons/dashboard.svg";

}
function close_info() { 
    container.style.webkitFilter = "blur(0px)";
    product_pop_up.style.opacity="0";
    product_pop_up.style.visibility="hidden";
    product_pop_up.style.transform="scale(0)";   
}
function open_info() { 
    container.style.webkitFilter = "blur(6px)";
    product_pop_up.style.opacity="1";
    product_pop_up.style.visibility="visible";
    product_pop_up.style.transform="scale(1)"; 
      
}