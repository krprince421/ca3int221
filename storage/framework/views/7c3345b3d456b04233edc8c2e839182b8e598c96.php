
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Html Quiz</title>
    <link rel="stylesheet" href="htmlpage.css" > 

    <style>
            .btn-submit{
                cursor:pointer ;
                margin-left:30% ;
                width:40% ;
                left:auto ;
                right :auto ;
                padding:10px ;
                border:1px solid green ;
                background-color: green ;
                text-transform:uppercase ;
                color:#fff ;
            }

            *{
            padding: 0 ;
            margin: 0 ;
            }
            .header{
            background-color: #3D5AFE ;
            padding: 15px ;
            }
            p{
            font-size: 1.5rem ;
            }
            a{
                text-decoration : none ;
                padding: 0% ;
                margin: 0% ;

            }
            ul li{
                display: inline ;
                font-size: 1.5rem ;
                color: #fff ;
                padding: 10px ; 
   
            }
            .text-center{
            text-align: center ;
    
            }
            .question-container{
            margin-left: 20px ;
            margin-right: 20px ;
            }

            .radio-label{

            display:block ;
            padding:10px ;
            border-radius: 10px  ;
            border:1px solid black ;
            cursor: pointer;
            }

    </style>
</head>
<body>

    <header class = " header text-center">
        <ul>
            <a href="#"><li>Home</li></a>
            <a href="htmlpage.php"><li>HTML</li></a>
            <a href="#"><li>CSS</li></a>
            <a href="#"><li>PHP</li></a>
        </ul>

    </header>
    <?php
            
        ?>
    
    <body class = "main-content">
        <h2 style="font-weight:lighter; padding:10px ; background-color:red ;text-align:center; color:#fff ; ">Questions On HTML</h2>
    <section class = "question-container">
    <form action = "/htmlresult" method = "post">
        <?php echo csrf_field(); ?>
        <div class = "question">
        <p>Q1 . Full form of HTML is ?</p>
        <input style="display : none ; " type = "radio" name = "question1" value = "-1" checked = "checked">
        <input type = "radio" id ="q1o1" name = "question1" value = "1">
        <label id = "11" class = "radio-label" for = "q1o1" >Hypertext Markup Language </label></br>

    
        <input  type = "radio" id ="q1o2" name = "question1" value = "2">
        <label id="12" class = "radio-label" for = "q1o2" onClick = "changeColorOnClick(12,11,13,14)">Hyptertext Makeup Language</label></br>    

   
        <input type = "radio" id ="q1o3" name = "question1" value = "3">
        <label id="13" class = "radio-label" for = "q1o3" onClick = "changeColorOnClick(13,11,12,14)">None of The above</label></br>

    
        <input type = "radio" id ="q1o4" name = "question1" value = "4">
        <label id="14" class = "radio-label" for = "q1o4" onClick = "changeColorOnClick(14,11,12,13)">Both </label></br>

    </div>
    
    <div class = "question">
        <p> Q2 . HTML is programming Language ?</p>
        <input style="display:none;" type = "radio" name = "question2" value = "-1" checked = "checked">
        <input type = "radio" id ="q2o1" name = "question2" value = "1">
        <label id="21" class = "radio-label" for = "q2o1" onClick = "changeColorOnClick(21,22,23,24)">True </label></br>

    
        <input type = "radio" id ="q2o2" name = "question2" value = "2">
        <label id="22" class = "radio-label" for = "q2o2" onClick = "changeColorOnClick(22,21,23,24)">False</label></br>    

   
        <input type = "radio" id ="q2o3" name = "question2" value = "3">
        <label id="23" class = "radio-label" for = "q2o3" onClick = "changeColorOnClick(23,21,22,24)">None</label></br>

    
        <input type = "radio" id ="q2o4" name = "question2" value = "4">
        <label id="24" class = "radio-label" for = "q2o4" onClick = "changeColorOnClick(24,21,22,23)">None </label></br>

        

    </div>

    <div class = "question">
        <p> Q3 . What is use of DOCTYPE HTML in HTML</p>
        <input style="display:none;" type = "radio" name = "question3" value = "-1" checked = "checked">
        <input type = "radio" id ="q3o1" name = "question3" value = "1">
        <label id="31" class = "radio-label" for = "q3o1" onClick = "changeColorOnClick(31,32,33,34)">It is not required in html page . </label></br>

    
        <input type = "radio" id ="q3o2" name = "question3" value = "2">
        <label id="32" class = "radio-label" for = "q3o2" onClick = "changeColorOnClick(32,31,33,34)">To identify the version of HTML page</label></br>    

   
        <input  type = "radio" id ="q3o3" name = "question3" value = "3">
        <label id="33" class = "radio-label" for = "q3o3" onClick = "changeColorOnClick(33,31,32,34)"> Both are correct</label></br>

    
        <input type = "radio" id ="q3o4" name = "question3" value = "4">
        <label id="34" class = "radio-label" for = "q3o4" onClick = "changeColorOnClick(34,31,32,33)">None of the above  </label></br>
        

    </div>

    <div class = "question" >
        <p> Q4 . Correct sequential order of HTML page is :</p>
        <input style="display:none;" type = "radio" name = "question4" value = "-1" checked = "checked">
        <input type = "radio" id ="q4o1" name = "question4" value = "1">
        <label id="41" class = "radio-label" for = "q4o1" onClick = "changeColorOnClick(41,42,43,44)">html body head  </label></br>

    
        <input type = "radio" id ="q4o2" name = "question4" value = "2">
        <label id="42" class = "radio-label" for = "q4o2" onClick = "changeColorOnClick(42,41,43,44)">head html body</label></br>    

   
        <input type = "radio" id ="q4o3" name = "question4" value = "3">
        <label id="43" class = "radio-label" for = "q4o3" onClick = "changeColorOnClick(43,41,42,44)"> body head html</label></br>

    
        <input type = "radio" id ="q4o4" name = "question4" value = "4">
        <label id="44" class = "radio-label" for = "q4o4" onClick = "changeColorOnClick(44,41,42,43 )">html head body </label></br>
        

    </div>
    <div class = "question">
    <input style="display:none;" type = "radio" name = "question5" value = "-1" checked = "checked">
        <p>Q5 . Tag used for writing paragraph is :</p>
        <input type = "radio" id ="q5o1" name = "question5" value = "1">
        <label id="51" class = "radio-label" for = "q5o1" onClick = "changeColorOnClick(51,52,53,54)">p </label></br>

    
        <input type = "radio" id ="q5o2" name = "question5" value = "2">
        <label id="52" class = "radio-label" for = "q5o2" onClick = "changeColorOnClick(52,51,53,54)">h1</label></br>    

   
        <input type = "radio" id ="q5o3" name = "question5" value = "3">
        <label id="53" class = "radio-label" for = "q5o3" onClick = "changeColorOnClick(53,51,52,54)">h2</label></br>

    
        <input type = "radio" id ="q5o4" name = "question5" value = "4">
        <label id="54" class = "radio-label" for = "q5o4" onClick = "changeColorOnClick(54,51,52,53 )">h3 </label></br>
        

    </div>
    <div class = "question">
        <p> Q6 . ________ is used to set title of a web page</p>
        <input style="display:none;" type = "radio" name = "question6" value = "-1" checked = "checked">
        <input type = "radio" id ="q6o1" name = "question6" value = "1">
        <label id="61" class = "radio-label" for = "q6o1" onClick = "changeColorOnClick(61,62,63,64)">setTitle  </label></br>

    
        <input type = "radio" id ="q6o2" name = "question6" value = "2">
        <label id="62" class = "radio-label" for = "q6o2" onClick = "changeColorOnClick(62,61,63,64)"> title </label></br>    

   
        <input type = "radio" id ="q6o3" name = "question6" value = "3">
        <label id="63" class = "radio-label" for = "q6o3" onClick = "changeColorOnClick(63,61,62,64)">settitle</label></br>

    
        <input type = "radio" id ="q6o4" name = "question6" value = "4">
        <label id="64" class = "radio-label" for = "q6o4" onClick = "changeColorOnClick(64,61,62,63 )"> All of the above </label></br>
        

    </div>
    <div class = "question" >
        <p> Q7 . Tag used for heading is / are </p>
        <input style="display:none;" type = "radio" name = "question7" value = "-1" checked = "checked">
        <input type = "radio" id ="q7o1" name = "question7" value = "1">
        <label id="71" class = "radio-label" for = "q7o1" onClick = "changeColorOnClick(71,72,73,74)">h1 </label></br>

    
        <input  type = "radio" id ="q7o2" name = "question7" value = "2">
        <label id="72" class = "radio-label" for = "q7o2" onClick = "changeColorOnClick(72,71,73,74)">h2</label></br>    

   
        <input type = "radio" id ="q7o3" name = "question7" value = "3">
        <label id="73" class = "radio-label" for = "q7o3" onClick = "changeColorOnClick(73,71,72,74)">h3</label></br>

    
        <input type = "radio" id ="q7o4" name = "question7" value = "4">
        <label id="74" class = "radio-label" for = "q7o4" onClick = "changeColorOnClick(74,71,72,73 )">All of the above </label></br>
        

    </div>
    <div class = "question" id = "question8">
    <input style="display:none;" type = "radio" name = "question8" value = "-1" checked = "checked">
        <p> Q8 . Which language can be used to describe how HTM elements are to be displayed on screen ?</p>
        <input type = "radio" id ="q8o1" name = "question8" value = "1">
        <label id="81" class = "radio-label" for = "q8o1" onClick = "changeColorOnClick(81,82,83,84 )">C++ </label></br>

    
        <input  type = "radio" id ="q8o2" name = "question8" value = "2">
        <label id="82" class = "radio-label" for = "q8o2" onClick = "changeColorOnClick(82,81,83, 84 )">C#</label></br>    

   
        <input  type = "radio" id ="q8o3" name = "question8" value = "3">
        <label id="83" class = "radio-label" for = "q8o3" onClick = "changeColorOnClick(83,81,82,84 )">XML</label></br>

    
        <input type = "radio" id ="q8o4" name = "question8" value = "4">
        <label id="84" class = "radio-label" for = "q8o4"onClick = "changeColorOnClick(84,81,82,83)" >CSS </label></br>
        

    </div>
    <div class = "question" id = "question9">
        <p> Q9 . Syntax for saving HTML file is / are</p>
        <input style="display:none;" type = "radio" name = "question9" value = "-1" checked = "checked">
        <input type = "radio" id ="q9o1" name = "question9" value = "1">
        <label id="91" class = "radio-label" for = "q9o1"onClick = "changeColorOnClick(91,92,93,94 )">.html </label></br>

    
        <input  type = "radio" id ="q9o2" name = "question9" value = "2">
        <label id="92" class = "radio-label" for = "q9o2" onClick = "changeColorOnClick(92,91,93,94 )">.ht</label></br>    

   
        <input  type = "radio" id ="q9o3" name = "question9" value = "3">
        <label id="93" class = "radio-label" for = "q9o3" onClick = "changeColorOnClick( 93,91,92,94 )">.xml</label></br>

    
        <input  type = "radio" id ="q9o4" name = "question9" value = "4">
        <label id="94" class = "radio-label" for = "q9o4" onClick = "changeColorOnClick(94,91,92,93 )">All of the above </label></br>
        

    </div>
    <div class = "question" id = "question10">
        <p>Q10 . Tag used for HTML Link is / are</p>
        <input style="display:none;" type = "radio" name = "question10" value = "-1" checked = "checked">
        <input type = "radio" id ="q10o1" name = "question10" value = "1">
        <label id="101" class = "radio-label" for = "q10o1" onClick = "changeColorOnClick(101,102,103 ,104 )">c </label></br>

    
        <input  type = "radio" id ="q10o2" name = "question10" value = "2">
        <label id="102" class = "radio-label" for = "q10o2" onClick = "changeColorOnClick(102,101,103, 104 )">b</label></br>    

   
        <input type = "radio" id ="q10o3" name = "question10" value = "3">
        <label id="103" class = "radio-label" for = "q10o3" onClick = "changeColorOnClick(103,101,102,104 )">a</label></br>

    
        <input  type = "radio" id ="q10o4" name = "question10" value = "4">
        <label id="104" class = "radio-label" for = "q10o4" onClick = "changeColorOnClick(104,101,102,103 )">All of the above </label></br>
        
        <input class = "btn-submit" type = "submit">


    </div>
    </form>


    </section>
    </body>


        <footer>
        </footer>



    </body>



    
</body>
</html><?php /**PATH C:\xampp\int221ca3\resources\views/htmlpage.blade.php ENDPATH**/ ?>