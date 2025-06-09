<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <style>
            body {
                background-color: black;
            }
            .header {
                text-align: center;
                margin-top: 20px;
                text-transform: uppercase;
                font-size: 25px;
            }
            .header a {
                text-decoration: none;
                color: white;
                margin: 0 15px;
                font-size: 20px;
            }
            .contact-form {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 50px;
                color:white;
                
              
            }
            .contact-form input, .contact-form textarea {
                width: 300px;
                padding: 10px;
                margin-bottom: 15px;
                border-radius: 5px;
                border: none;
                display: flex;
                flex-direction: column;
                align-items: center;

            }
            .contact-form button {
                padding: 10px 20px;
                background-color:while;
                color: black;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
</head>
<body>
    <div class="contact">
        <div class="title">
            <h1>Contact Us</h1>
            <p>We would love to hear from you!</p>
        <div class="header">
            <a href="{{Route('index')}}">home</a>
            <a href="{{Route('skills')}}">skills</a>
            <a href="{{Route('services')}}">services</a>
            <a href="{{Route('portfolio')}}">portfolio</a>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
              <input type="number" name="number" placeholder="tel">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>