window.onload = initalise;

function validateForm() {
    var product = document.getElementById("product").value;
    sessionStorage.product = product;

    return result;
}

function storeProduct(productName) {
    var options = ["Ford Focus", "Fiat Panda", "Fiat 500", "Proton Iriz","Toyota Corolla", "Hyundai Elantra", "Proton Persona", "Proton Saga","Mercedes-Benz E-Class", "BMW 6 Series Gran Turismo", "Audi A8", "Porsche Panamera","Toyota RAV4", "Jeep Grand Cherokee", "Mazda CX-8", "Toyota Land Cruiser Prado"];

    options.forEach(array);

    function array(value) {
        if (value == productName) {
            sessionStorage.productIndex = options.indexOf(value);
        }
    }
}

function storeSub() {
    document.getElementById("product").selectedIndex = sessionStorage.productIndex;

    var product = document.getElementById("product").value;

    sessionStorage.subject = product;
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.subject;
}

function productlist1() {
    var select = document.getElementById("product");

    var options = ["Ford Focus", "Fiat Panda", "Fiat 500", "Proton Iriz"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function productlist2() {
    var select = document.getElementById("product");

    var options = ["Toyota Corolla", "Hyundai Elantra", "Proton Persona", "Proton Saga"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function productlist3() {
    var select = document.getElementById("product");

    var options = ["Mercedes-Benz E-Class", "BMW 6 Series Gran Turismo", "Audi A8", "Porsche Panamera"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function productlist4() {
    var select = document.getElementById("product");

    var options = ["Toyota RAV4", "Jeep Grand Cherokee", "Mazda CX-8", "Toyota Land Cruiser Prado"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function change() {
    var product = document.getElementById("product").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.product;
}
function storeitem(product_id) {
    sessionStorage.setItem("product_id", product_id);
    window.location.replace("enquiry.html");
}
function displayitem() {
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.getItem("product_id");
    document.getElementById("product").value =  sessionStorage.getItem("product_id");
}



window.onload = initalise;

var getErrorMsg = "";

function validate(){
    "use strict";
        var everythingOkay = false;
        getErrorMsg = "";
        var fnameOkay = fnameCheck();
		var lnameOkay = lnameCheck();
        var emailOkay = emailCheck();
        var numOkay = numCheck();
		var streetOkay = streetCheck();
		var cityOkay = cityCheck();
        var stateOkay = stateSelect();
		var pcodeOkay = pcodeCheck();
        var productOkay = productSelect();
        var descriptionOkay = descriptionCheck();
        if (fnameOkay && lnameOkay && emailOkay && numOkay && streetOkay && cityOkay && stateOkay && pcodeOkay  && productOkay && descriptionOkay) {
        everythingOkay = true;
        alert ("Your First Name is " + document.getElementById("fname").value + '\n' +
        "Your Last Name is " + document.getElementById("lname").value + '\n' +
        "Your Email ID is " + document.getElementById("email").value + '\n' +
        "Your Phone Number is " + document.getElementById("number").value + '\n' +
        "Your Street Address is " + document.getElementById("street").value + '\n' +
        "Your City Address is " + document.getElementById("city").value + '\n' +
        "Your State Address is " + document.getElementById("state").value + '\n' +
        "Your PostCode is " + document.getElementById("postcode").value + '\n' +
        "Your selected Product is " + document.getElementById("product").value + '\n' +
        "Your Comment is " + document.getElementById("comment").value);
    }
    else{
    alert(getErrorMsg);
    getErrorMsg = "";
    everythingOkay = false;
    }
    return everythingOkay;
}

function fnameCheck(){
    var name = document.getElementById("fname").value;
    var pattern = /^[a-zA-Z ]+$/
    var fnameOkay = true;
    if ((name.length == 0)){
    getErrorMsg = getErrorMsg + "Your First Name cannot be blank\n"
    
    fnameOkay = false;
    }
    else{
        if (!pattern.test(name)){
        getErrorMsg = getErrorMsg + "Your First name should only contain characters\n"
        fnameOkay = false;
        }
    }
    return fnameOkay;
}

function lnameCheck(){
    var name = document.getElementById("lname").value;
    var pattern = /^[a-zA-Z ]+$/
    var lnameOkay = true;
    if ((name.length == 0)){
    getErrorMsg = getErrorMsg + "Your Last Name cannot be blank\n"
    lnameOkay = false;
    }
    else{
        if (!pattern.test(name)){
        getErrorMsg = getErrorMsg + "Your Last name should only contain characters\n"
        lnameOkay = false;
        }
    }
    return lnameOkay;
}

function emailCheck(){
    var email = document.getElementById("email").value;
    var result = true;
    var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
    if ((email.length == 0)){
        getErrorMsg = getErrorMsg + "Your Email cannot be blank\n"
        result = false;
    }
    else{
        if (!pattern.test(email)){
            getErrorMsg = getErrorMsg + "Enter a Valid Email Address\n"
            result = false;
        }
    }
    return result;
}

function numCheck() {
    var name = document.getElementById("number").value;
    var pattern = /^[#.0-9,-]+$/
    var numOkay = true;
    if ((name.length == 0)){
    getErrorMsg = getErrorMsg + "Phone Number cannot be blank\n"
    numOkay = false;
    }
    else{
        if (!pattern.test(name)){
        getErrorMsg = getErrorMsg + "Enter a valid Phone Number\n"
        numOkay = false;
        }
    }
    return numOkay;
}

function streetCheck(){
    var name = document.getElementById("street").value;
    var pattern = /^[#.0-9a-zA-Z\s,-]+$/
    var streetOkay = true;
    if ((name.length == 0)){
    getErrorMsg = getErrorMsg + "Street Address cannot be blank\n"
    streetOkay = false;
    }
    else{
        if (!pattern.test(name)){
        getErrorMsg = getErrorMsg + " Enter a vlid Street Address\n"
        streetOkay = false;
        }
    }
    return streetOkay;
}

function cityCheck(){
    var name = document.getElementById("city").value;
    var pattern = /^[#.0-9a-zA-Z\s,-]+$/
    var cityOkay = true;
    if ((name.length == 0)){
    getErrorMsg = getErrorMsg + "City cannot be blank\n"
    cityOkay = false;
    }
    else{
        if (!pattern.test(name)){
        getErrorMsg = getErrorMsg + "Enter a valid City name\n"
        cityOkay = false;
        }
    }
    return cityOkay;
}

function stateSelect(){
    var selected = false;
    var state = document.getElementById("state").value;
    if (state!="none"){
    selected = true;
    }
    else{
    selected = false;
    getErrorMsg = getErrorMsg + "You must select a State\n"
    }
    return selected;
}

function pcodeCheck() {
    var name = document.getElementById("postcode").value;
    var pattern = /^[#.0-9,-]+$/
    var pcodeOkay = true;
    if ((name.length == 0)){
    getErrorMsg = getErrorMsg + "Postcode cannot be blank\n"
    pcodeOkay = false;
    }
    else{
        if (!pattern.test(name)){
        getErrorMsg = getErrorMsg + "Enter a valid Postal Code\n"
        pcodeOkay = false;
        }
    }
    return pcodeOkay;
}

function productSelect(){
    var selected = false;
    var product = document.getElementById("product").value;
    if (product!="none"){
    selected = true;
    }
    else{
    selected = false;
    getErrorMsg = getErrorMsg + "You must select a Product\n"
    }
    return selected;
}

function descriptionCheck() {
    var description = document.getElementById("comment").value;
    var descriptionOk = true;
    if ((description.length == 0)){
    getErrorMsg = getErrorMsg + "Please enter your comments in the Comment box\n"
    descriptionOk = false;
    }
    return descriptionOk;
}


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function drop() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
	if (!e.target.matches('.dropbtn')) {
		var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}






























