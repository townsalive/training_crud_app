<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

       <form method="POST" action="/posts">
           @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:ouline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content" ></textarea>
            </div>   

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Post</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white py-2 px-6 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>

        </form>
    </div>


    
    
</body>
</html>