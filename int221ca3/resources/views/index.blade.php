<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Html Quiz</title>
    <link rel="stylesheet" href="styles.css" > 

    <style>

        
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
a{
    text-decoration: none ;
    
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

.flex-container{
    display: flex ;
    height: 70vh ;
    justify-content: center ;
    flex-wrap: wrap ;
    cursor: pointer;
    

}
.html-flex{
    
    margin: 10px ;
    width: 20% ;
    background-color: red ;
    border:1px  solid  red ;
    border-radius: 10px ;

}
.css-flex{
    background-color: rgba(31, 38, 224, 0.333)  ;
    margin: 10px ;
    width: 20% ;
    border:1px  solid  rgba(31, 38, 224, 0.333) ;
    border-radius: 10px ;

}
.js-flex{
    
    background-color: orange ;
    margin: 10px ;
    width: 20% ;
    border:1px  solid  orange ;
    border-radius: 10px ;

}
.php-flex{
    background-color: green ;
    margin: 10px ;
    width: 20% ;
    border:1px  solid  green ;
    border-radius: 10px ;

}
footer{
   
    bottom: 0px ;
    padding:  30px 0px ;
    background-color:#3D5AFE ;
}

    </style>
</head>
<body>



    <header class = " header text-center">
        <ul>
            <a href="#"><li>Home</li></a>
            <a href="{{ '/htmlpage' }}"><li>HTML</li></a>
            <a href="#"><li>CSS</li></a>
            <a href="#"><li>PHP</li></a>
        </ul>

    </header>
    
    <body class = "main-content">
   
        <div class = "flex-container">
            
            <div class = "html-flex text-center">
                    <h1>HTML</h1>
                    
            </div>
            
            <div class = "css-flex text-center">
                    <h1>CSS</h1>
                   
            </div>
            <div class = "js-flex text-center">
                    <h1>JAVASCRIPT</h1>
                    
            </div>
            <div class = "php-flex text-center">
            
                    <h1>PHP</h1>
                    
            </div>
           
        </div>


    </body>
        <footer>
        </footer>
    </body>

</html>