/**
 * Fetches the entry and variable is defined
*/
var nameField = document.getElementById("name-field");
var activeField = document.getElementById("active-field");
var editCategoryRequest;
var editButton

function clickToScuess(event) {
    event.preventDefault();

    var categoryDate = {
        name: nameField.value,
        active: activeField.value
    };
    
    editCategoryRequest = new XMLHttpRequest();
    editCategoryRequest.open("PUT", "API/V1/Category/" + event.currentTarget.getAttribute("edit-category-id"));
    editCategoryRequest.onreadystatechange = onEditResponsed;
    editCategoryRequest.send(JSON.stringify(categoryDate));   
}

function onEditResponsed(event) {
    if (editCategoryRequest.readyState < 4) {
        return;
    }
    alert("The Category was secuessfuly created");
}
var finishButton = document.getElementById("finish-button");
finishButton.addEventListener("click", onEditButtonPressed);