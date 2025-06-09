<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($portfolio) ? 'Edit' : 'Create' }} Portfolio</title>
    <style>
        :root {
            --main-color: green;
            --white-color: #ffffff;
            --bg-color: white;
            --black-color: black;
        }

        body {
            background-color: var(--bg-color);
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .admin {
            text-align: center;
            margin-top: 20px;
            color: var(--black-color);
        }

        .admin h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid var(--main-color);
            background-color: var(--bg-color);
            color: var(--black-color);
        }

        textarea {
            height: 50px;
        }

        img.preview {
            max-width: 300px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="admin">
        <h1>{{ isset($portfolio) ? 'Edit' : 'Create' }} Portfolio</h1>
        <form action="{{ isset($portfolio) ? route('portfolioform.update', $portfolio->id) : route('admin.portfolioform.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($portfolio))
                @method('PUT')
            @endif

            {{-- Show existing image if editing --}}
            @if(isset($portfolio) && $portfolio->image)
                <img src="{{ asset('images/' . $portfolio->image) }}" alt="Portfolio Image" class="preview">
            @endif

            <input type="file" name="image" id="image">

            <input type="text" placeholder="Enter Name of Project" name="name" id="name" value="{{ old('name', $portfolio->name ?? '') }}">

            <textarea name="description" placeholder="Enter Project Description">{{ old('description', $portfolio->description ?? '') }}</textarea>

            <input type="submit" value="{{ isset($portfolio) ? 'Update' : 'Submit' }}">
        </form>
    </div>
</body>
</html>
