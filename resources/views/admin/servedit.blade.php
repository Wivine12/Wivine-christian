<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($services) ? 'Edit' : 'Create' }} Portfolio</title>
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
            background-color: var(--white-color);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid var(--main-color);
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: var(--main-color);
            color: var(--white-color);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        input[type="submit"]:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <div class="admin">
        <h1>{{ isset($services) ? 'Edit' : 'Create' }} Portfolio</h1>
        <form action="{{ isset($services) ? route('formservices.update', $services->id) : route('formservices.store') }}" method="POST">
            @csrf
            @if(isset($services))
                @method('PUT')
            @endif

            <label for="name">Project Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Name of Project" value="{{ old('name', $services->name ?? '') }}" required>

            <label for="description">Project Description</label>
            <textarea id="description" name="description" placeholder="Enter Project Description" required>{{ old('description', $services->description ?? '') }}</textarea>

            <input type="submit" value="{{ isset($services) ? 'Update' : 'Submit' }}">
        </form>
    </div>
</body>
</html>
