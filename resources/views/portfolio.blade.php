<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Boxicons CDN for icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        :root {
            --main-color: green;
            --white-color: #ffffff;
            --bg-color: black;
        }

        body {
            background-color: black;
            margin: 0;
            font-family: Arial, sans-serif;
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

        .heading {
            text-align: center;
            color: white;
            font-size: 2.5rem;
            margin: 3rem 0;
        }

        .portfolio {
            padding: 2rem;
            background: var(--bg-color);
        }

        .portfolio-container {
            text-align: center;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
        }
.portfolio-box {
    position: relative;
    width: 470px;
    height: 300px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(255, 255, 255, 0.2); 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.portfolio-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(255, 255, 255, 0.3);
}

.portfolio-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.portfolio-box:hover img {
    transform: scale(1.1);
}

.portfolio-layer {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    padding: 20px;
    text-align: center;
    transition: opacity 0.3s ease;
}

.portfolio-box:hover .portfolio-layer {
    opacity: 1;
}

.portfolio-layer h4 {
    font-size: 20px;
    margin-bottom: 10px;
    font-weight: 600;
}

.portfolio-layer p {
    font-size: 14px;
    margin-bottom: 15px;
}

.portfolio-layer a {
    color: #fff;
    font-size: 24px;
    text-decoration: none;
    border: 2px solid #fff;
    padding: 6px;
    border-radius: 50%;
    transition: background 0.3s, transform 0.3s;
}

.portfolio-layer a:hover {
    background: #fff;
    color: #000;
    transform: scale(1.1);
}


        .portfolio-layer a {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            transition: background 0.3s ease;
        }

        .portfolio-layer a:hover {
            background: var(--main-color);
        }

        .portfolio-layer a i {
            font-size: 20px;
            color: black;
        }

    </style>
</head>
<body>

    <div class="header">
        <a href="{{ Route('index') }}">Home</a>
        <a href="{{ Route('skills') }}">Skills</a>
        <a href="{{ Route('services') }}">Services</a>
        <a href="{{ Route('portfolio') }}">Portfolio</a>
        <a href="{{route('contact')}}">Contact</a>
    </div>

    <section id="portfolio" class="portfolio">
        <h2 class="heading">Latest Projects</h2>

        <div class="portfolio-container">
            
        @foreach($show as $data)
            <div class="portfolio-box">
                <img src="{{ asset('images/'.$data->image )}}" alt="{{$data->name}}">
                <div class="portfolio-layer">
                    <h4>{{$data->name}}</h4>
                    <p>{{$data->description}}</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        @endforeach

            

            
        </div>
    </section>

</body>
</html>
