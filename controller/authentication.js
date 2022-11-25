/**
 * Fetches the entry and variable is defined
*/
var usernameField = document.getElementById("username-field");
var passwordField = document.getElementById("password-field");
var sendRequest;

function clickToSucess(event) {
    event.preventDefault();

    data = {
        username: usernameField.value,
		password: passwordField.value
    };
        sendRequest = new XMLHttpRequest();
        sendRequest.open("POST", "API/V1/Authenticate");
        sendRequest.onreadystatechange = onLoginResponsed;
        sendRequest.send(JSON.stringify(data));

}

function onLoginResponsed(event) {
    if (sendRequest.readyState === 4) {
        return;
    }
    //console.log(exampleRequest.responseText);
    console.log(sendRequest.status);
    console.log(sendRequest.statusText);
}

var button = document.getElementById("login-button");
button.addEventListener("submit", clickToSucess);