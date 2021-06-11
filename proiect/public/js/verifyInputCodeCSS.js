

  let checkBtn = document.getElementById("checkCodeBtn");
  checkBtn.addEventListener("click", getInputCode);


  session_start();
    function getInputCode() {
       var code_input = document.getElementById("code").value;
       var response = verifyCode(code_input);
       if(response == 1) {
        document.getElementById("clevel").value= "1";
           document.getElementById("response").innerHTML = "Raspuns corect!";
          document.getElementById("shelter").style.justifyContent = document.getElementById("shelter_style_justifyContent").value;
          document.getElementById("shelter").style.flexDirection = document.getElementById("shelter_style_flexDirection").value;
          document.getElementById("shelter").style.alignItems = document.getElementById("shelter_style_alignItems").value;

       }
       else {document.getElementById("response").innerHTML = "Raspuns gresit....";
       document.getElementById("clevel").value= "0";
      }
     } 

     function verifyCode(code_input){

        var correctAnswer =   document.getElementById("correctAnswer").value;
        if(code_input == correctAnswer) return 1;
       else return 0;

     }

