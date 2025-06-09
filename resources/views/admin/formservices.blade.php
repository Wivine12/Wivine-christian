<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mean {
            /* Your styles */
        }
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: none;
        }
        form input, textarea {
            width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid var(--main-color);
        }
        .error-message {
            color: red;
            font-size: 0.875em;
            display: none;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="mean">

    <h1 style="text-align:center;margin-top:20px">Bland</h1>
    <form action="{{ route('admin.formservices.store') }}" method="POST">
            @csrf

          
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
           

                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
          

            <button type="submit" class="btn btn-primary">Create Service</button>
        </form>
</div>
</body>
</html>
