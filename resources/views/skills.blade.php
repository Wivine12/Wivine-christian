<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
         background-color:black;
      }
      .mean{
        
       
       /* background-color: black;  
           width: 100%;
           height: 100vh;
           justfiy-iterm:center;
           flex-direction:column;  */
      }
           
           
      .header{
         text-align:center;
        margin-top:20px;
        text-transform: uppercase;
        font-size: 25px;
        color: white; 
        margin-bottom:70px;

        
      }
      .name{
         background-color:blue;
         width: 510px;
         height: 8px;
          border-radius:30px; 
         
      }
      .mena{
 background-color:blue;
  width: 490px;
         height: 8px;
          border-radius:30px;
      }
      .class{
 background-color:blue;
 width: 470px;
   height: 8px;
   display:flex;
  justify-content:center;
  border-radius:30px;
      }
     .btn {
       display: inline-block;
            text-decoration: none;
            padding: 12px 30px;
            /* color: #240101;  */
            background-image: linear-gradient(185,154,154);
            font-size: 15px;
            border-radius: 30px;
            border-top-right-radius: 0;
     }
          .mean{
              display: flex;
        justify-content: center;
         color:white;
         margin-top: 20px; 
          } 
       
          .head{
            width: 50%;

           
        padding:30px      
          }
             .pic{
            width: 50%; 
              
          }
          img{
            width: 50%;
            box-shadow: 0 6px 8px white;
          }
          .header a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 20px;
            
          }

    </style>
</head>
<body>
        <div class="header">
        <a href="{{Route('index')}} ">home</a>
        <a href="{{Route('skills')}}">skills</a>
        <a href="{{Route('services')}}">services</a>
        <a href="{{Route('portfolio')}}">portfolio</a>
        <a href="{{route('contact')}}">Contact</a>
        </div>



        <div class="mean">
          <div class="head">
              <h1 style="text-align:center;margin-top:20px;">my skills</h1>
              html<div class="name"> </div>
           css <div class="mena"> </div>
           javascript <div class="class" ></div> 
           </div>
          <div class="pic">
            <img src="{{asset('img/kirezi.png')}}" class="chr" alt="hereme">
          </div>
        </div>
           
       
</body>
</html>