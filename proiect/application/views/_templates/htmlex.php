<!doctype html>
<html lang="en">

<head>
    <title>Learn HTML</title>
    <meta charset="utf-8" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Learn CSS">
    <meta property="og:description" content="A game for learning CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>public/css/paginanou.css" rel="stylesheet">
</head>

<body>

    <header>
        <button id="menuBtn" type="button" class="btn btn-5"> Menu </button>
    </header>

    <input type="hidden" id="correctAnswer" value="<?php echo $level_model->raspuns ?>">
    <input type="hidden" id="level" value="<?php echo $level_model->id ?>">
    <div class="split left">
        <div class="centered">

        <nav id="navPanel">
        <ol>
            <li id="home">
                <a class="btn btn-5" href="<?php echo URL; ?>home/index" >Home</a>
            </li>
            <li>
                 <a class="btn btn-5" href="<?php echo URL; ?>profile">Profile</a>
            </li>
            <li>
            <a class="btn btn-5" href="<?php echo URL; ?>profilesettings">Settings</a>
            </li>
            <li>
            <a class="btn btn-5" href="index.php?logout='1'"> Log out</a>
            </li>
        </ol>
    </nav>
            <script src="<?php echo URL; ?>public/js/meniu.js"></script>

            <div class="header">
                <div>
                    <h1 class="title">Learn HTML</h1>
                </div>
                <div id="level-counter">
                    <a href="<?php echo ($level_model->id) - 1 ?>" id="previous" class="btn btn-5">&laquo;</a>
                    <div class="level-indicator">Level <?php echo ($level_model->id)  ?> of 7</div>
                    <a href="<?php echo ($level_model->id) + 1 ?>" id="nextlevel" class="btn btn-5"> &raquo;</a>
                </div>
            </div>

            <!-- <div class="split right"> -->

        <div id="info">    
            <div class="centered">
            <section class="learn">
                <p id="instructions">
                    <p id="teorie"><?php echo $level_model->teorie ?></p>
                </p>
                    <div class="w3-example">
                        <h3>Exemplu:</h3>
                        <div class="exemplu">
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                            <span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span>
                            
                             <div id="exemplu"> <?php echo $level_model->exemplu ?> </div>

                            <br><br>
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/html

                            <span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span>
                            </span>
                        </div>

                        

                    </div>
            </section>
            </div>
        </div>

        <form method="POST"
              action=""
              enctype="multipart/form-data">
             <p id = "cerinta"> </p>
             <script type="text/javascript">

var xhr = new XMLHttpRequest();
var url = "http://localhost:3000/proiect/API/v1/exercitii/html/";
var nrex =document.getElementById("level").value;
console.log(url);
url.concat(nrex);
console.log(url);
xhr.open('GET',url);
xhr.onload = function() {
    if (xhr.status === 200) {
    
        let text = xhr.responseText; 
        const obj = JSON.parse(text);
          
        document.getElementById("cerinta").innerHTML = obj[nrex-1].cerinta;
        console.log(obj);
    }
    else {
        alert('Request failed.  Returned status of ' + xhr.status);
    }
};

xhr.send();
</script> 
        

            <div class="editor" id="1" style="display:none;">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <br><span><textarea id="code1" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div>
 
         


         <div class="editor" id="2" style="display:none;">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>a 
<span><textarea id="code2" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span>"http://localhost:3000/proiect/home/htmlex"
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div>  

           
            <div class="editor" id="3" style="display:none">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
<!--<h1>Catelus cu parul cret</h1> -->
   <span><textarea id="code3" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span>
              
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div> 
     
     
            <div class="editor" id="4" style="display:none">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
 
                <span><textarea id="code4" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span>
                Studiile au arătat că câinii pot învăța peste 100 de cuvinte și gesturi, ceea ce le pune inteligența și înțelegerea față de noi la egalitate cu un copil de doi ani. Cu toate acestea, câinii sunt mult mai ușor de dresat decât un copil de doi ani!
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>/p<span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <!-- <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span> -->
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div> 


             <div class="editor" id="5" style="display:none;">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>

 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>p style="
<span><textarea id="code5" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span>"<span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>  Un paragraf de culoare rosie
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>/p
<span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
              
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div> 



             <div class="editor" id="6" style="display:none">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
<!-- <bold>Rex</bold>-->
<br>
<span><textarea id="code6" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span>

                
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div>

   


            <div class="editor" id="7" style="display:none;">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body 
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span><br>
<!-- <p> Acesta este un paragraf. </p> --> 
 <span><textarea id="code7" autofocus="" autocapitalize="none" style="height: 24px;"></textarea></span> 
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>p <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span> Acesta este un paragraf comentat. <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:rgb(64, 64, 151)">&lt;</span>/p <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span> -->
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                <span class="tagnamecolor" style="color:brown"></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span></span>/html
                <span class="tagcolor" style="color:rgb(64, 64, 151)">&gt;</span>
                </span>
            </div> 

        


<div >
                    <p id="response">AICI VA FI RASPUNSUL</p>
                    <input type="hidden" id="hlevel" name="hlevel" value="0">
                </div>

            </div>
          
            <button type="submit" id="checkCodeBtn"  name="submit_check" value="Submit" class="btn btn-5">Check!</button>
</form>
            <a href="<?php echo ($level_model->id) + 1 ?>" id="nextlevel1" class="btn btn-5"> Next</a>
           <script src="<?php echo URL; ?>public/js/verifyInputCodeHTML.js">
           </script>
           <script>

           var id = <?php echo ($level_model->id) ?>;
           console.log(id);
           document.getElementById(id).style = "display: block;";
           
           </script>
            <footer>
                <div class="share">
                    •
                    <a href="<?php echo URL; ?>home/index" id="active">Home</a>•
                    <a href="....">GitHub</a> •
                    <a href="<?php echo URL; ?>home/profilesettings" id="active">Settings</a>•
                </div>
                <div id="learnhtml">
                <div id="learnHTML">Want to learn CSS? Play <a href="<?php echo URL; ?>CSSLevels/level/1">Learn CSS</a>.
                    </div>
                </div>
    </footer>
        </div>
       
    </div>
    <div class="split right">
        <div class="centered">
            <section class="learn">
                <p id="instructions">
                 <p id="teorie"><?php echo $level_model->teorie ?></p>
                </p>
                    <div class="w3-example">
                        <h3>Exemplu:</h3>
                        <div class="exemplu">
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br>
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>html<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>body
                            <span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span>
                            
                             <div id="exemplu"> <?php echo $level_model->exemplu ?> </div>

                            <br><br>
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/body<span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color: rgb(64, 64, 151)">&lt;</span>/html

                            <span class="tagcolor" style="color: rgb(64, 64, 151)">&gt;</span>
                            </span>
                        </div>

                        

                    </div>
            </section>
        </div>

    </div>
    
</body>

</html>
