/**
 * Fetches the entry and variable is defined
*/
var nameField = document.getElementById("name-field");
var activeField = document.getElementById("active-checkbox");
var newCategoryRequest;

/**
 * The POST (create) function for the category
 */
function clickToSuccess(event) {
    //
    event.preventDefault();

    var categoryDate = {
        name: nameField.value,
        active: activeField.value
    };
    
    newCategoryRequest = new XMLHttpRequest();
    newCategoryRequest.open("POST", "/api_frontend/API/V1/Category");
    newCategoryRequest.onreadystatechange = onCategoryCreated;
    newCategoryRequest.send(JSON.stringify(categoryDate));   
}

/**
 * Here is the POST responsed
 */
function onCategoryCreated(event) {
    if (newCategoryRequest.readyState < 4) {
        return;
    }
    console.log(newCategoryRequest.status);
    //alert("Die Kategorie wurde erstellt.");
}

/**
 * Here is the Button created and definted, when the button clicked, will the response responed
 */
var finishButton = document.getElementById("save-cat-button");
finishButton.addEventListener("submit", clickToSuccess);