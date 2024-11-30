<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Post</title>
</head>
<body>
    <h1>Buat Post Baru</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Konten:</label>
        <textarea name="content" id="content" required></textarea>

        <button type="submit">Buat Post</button>
    </form>
</body>
</html>
