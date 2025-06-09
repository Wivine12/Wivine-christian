<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-color: black;
        }
     
       
     .contain {
        display: flex;
        justify-content: center;
        
     }
     p{
          font-style: oblique;
            color:aliceblue ;
            font-size: 60px;
     }
     h1{
         font-style: oblique;
            color:aliceblue ;
            font-size: 60px;
     }
 .imag{
    width: 50%;
 }
 .imag img{
    width: 50%;
 }

        .header{
        text-align:center;
        margin-top:20px;
       
        text-transform: uppercase;
        font-size: 15px;
      
        }
        .header a{
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-size: 20px;
        }
        .title{
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="contant">
        <div class="header">
        <a href="{{Route('index')}}">home</a>
        <a href="{{Route('skills')}}">skills</a>
        <a href="{{Route('services')}}">services</a>
        <a href="{{Route('portfolio')}}">portfolio</a>
        <a href="{{route('contact')}}">Contact</a>
        </div>
        <div class="contain">
            <div class="title">
                
                <h1>walcome to my portfolio</h1>
                <p>a'm Uwikirezi Wivine a'm web developer</p>
            </div>
            <div class="imag">
                <img src="{{asset('img/kirezi.png')}}" class="chr" alt="here me">
            </div>
        </div>
        
    </div>
   
</body>
</html>