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
        .mean{
           padding: 20px;
           width: 23%;
           height: 50vh;
           box-shadow: 0 2px 8px white;
              margin: 20px auto;  
              background-color: black; 
             border-radius:30px;
        }
        .contain{
           padding: 20px;
           width: 23%;
           height:50vh;
           box-shadow: 0 6px 8px white;
              margin: 20px auto;  
              background-color: black;
              overflow: hidden;
              transition: transform 0.2s;
                border-radius:30px;
              

        }
        .contant{
              padding: 20px;
           width: 23%;
           height: 50vh;
           box-shadow: 0 6px 8px white;
              margin: 20px auto;  
              background-color:black;
              overflow: hidden;
              transition: transform 0.2s;
                border-radius:30px;
        }
         .header{
        text-align:center;
        margin-top:20px;
        text-transform: uppercase;
        font-size: 20px;
        
      }
        .header a{
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-size: 20px;
        }
        .div{
              background-color: black;
            justify-content: center;
            align-items: center;
            display: flex;

        }
        .btn{
              display: inline-block;           
            padding: 13px 30px;
            background-image: linear-gradient(#022fb36f,#e0d2e4);
            font-size: 15px;
            border-radius: 30px;
            text-decoration: none;
        }
        .btn-cont{
             display: inline-block;           
            padding: 13px 30px;
            background-image: linear-gradient(#022fb36f,#e0d2e4);
            font-size: 15px;
            border-radius: 30px;
            text-decoration: none;
        }
        .btn-mean{
            display: inline-block;           
            padding: 13px 30px;
            background-image: linear-gradient(#022fb36f,#e0d2e4);
            font-size: 15px;
            border-radius: 30px;
            text-decoration: none;
        }
        .mean h1{
            color: white;
            text-align: center;
        }
        .mean p{
            color: white;
            text-align: center;
        }
        .contain h1,p{
            text-align: center;
            color: white;
        }
        .contant h1,p{
            text-align: center;
            color: white;
        }
        .header h1{
            color: white;
          
           
        }
        
    </style>
</head>
<body>
     
      <div class="header">
        <a href="{{Route('index')}}">home</a>
        <a href="{{Route('skills')}}">skills</a>
        <a href="{{Route('services')}}">services</a>
        <a href="{{Route('portfolio')}}">portfolio</a>
        <a href="{{route('contact')}}">Contact</a>
        <h1 style= "text-align:center;margin-top:20px;">my services</h1>
        </div>
        <div class="div">
            @foreach($services as $service)
             <div class="mean">
                 <h1>{{$service->name}}</h1>
                    <p>{{$service->description}}</p>
                <a href=""class="btn-mean">learn more</a>
              </div>
            @endforeach
      
        </div>
       
</body>
</html>