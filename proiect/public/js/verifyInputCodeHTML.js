let checkBtn = document.getElementById("checkCodeBtn");
checkBtn.addEventListener("click", getInputCode);

function getInputCode() {
    var nr = document.getElementById("level").value;
    let code = "code";
    var codeId = code.concat(nr);
    console.log(codeId);
    var code_input = document.getElementById(codeId).value;
    console.log(code_input);
    var response = verifyCode(code_input);
    if (response == 1) {
        document.getElementById("hlevel").value = "1";
        document.getElementById("response").innerHTML = "Raspuns corect!";
    } else {
        document.getElementById("response").innerHTML = "Raspuns gresit....";
        document.getElementById("hlevel").value = "0";
    }
}

function verifyCode(code_input) {

    var correctAnswer = document.getElementById("correctAnswer").value;
    if (code_input == correctAnswer) {


        return 1;
    } else return 0;

}