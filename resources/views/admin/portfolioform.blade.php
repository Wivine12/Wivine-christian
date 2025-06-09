<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
        :root {
            --main-color: green;
            --white-color: #ffffff;
            --bg-color: while;
        }

        body {
            background-color: --bg-color;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .admin,.mean {
            text-align: center;
            margin-top: 20px;
            color:black;
        }

        .admin h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;

        }

        form,form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right:none;
        }

        input[type="text"], textarea {
            width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid var(--main-color);
            background-color: var(--bg-color);
            color: var(--black-color);
        }

        textarea,textarea {
            height: 50px;
        }
        input[type="file"],input [type="text"] {
             width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid var(--main-color);
            background-color: var(--bg-color);
            color: var(--black-color);
        }
        /* .mean{
             text-align: center;
            margin-top: 20px;
            color:black;
        } */
 </style>
   

</head>
<body>
    <div class="admin">
        <h1>Admin Dashboard</h1>
       <form action="{{route('admin.portfolioform.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="">
        <input type="text" placeholder="Enter Name of Project" name="name" id="">
        <textarea name="description" ></textarea>
        <input type="submit" value="Submit">

       
       </form>
        </div>
</body>
</html>