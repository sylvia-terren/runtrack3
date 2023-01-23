$(document).ready(function() {

let button = document.getElementById("button");
let paragraphe = document.createElement("p");
let body = document.querySelector("body");

$('#button').click(function () {
    console.log("OK");
    fetch("expression.txt")
        .then((response) => response.text())
        .then((response) => {
            console.log(response)
            paragraphe.textContext = response;
            body.append(paragraphe);
    })
    .catch((error) => console.log(error));
})

});
