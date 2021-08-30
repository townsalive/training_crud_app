<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Blog-Home</title>
</head>
<body>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

        <h1 class="text-4xl font-bold mb-4">My Blog</h1>

        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white py-2 px-6 inline-block mb-6 shadow-lg rounded hover:shadow">Add Post</a>

        @foreach ($posts as $post ) 

        <article class="mb-2">
            <a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold text-blue-500">{{ $post->title }}</a>
            <p class="text-md text-gray-600">{{ $post->content }}</p>
        </article>
            <hr class="mt-2">
        @endforeach
    </div>


    
    
</body>
</html>