<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action={{route('booklist.update', $booklist->id)}} method="POST">
                @method('PUT')
                @csrf
                <div class="grid gap-4 mb-6">
                    <div class="mb-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Name
                        </label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$booklist->name}}">
                    </div>
                    <div class="mb-2">
                        <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Author
                        </label>
                        <input type="text" id="author" name="author" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$booklist->author}}">
                    </div>
                    <div class="mb-2">
                        <label for="genres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Genres
                        </label>
                        <input type="text" id="genres" name="genres" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$booklist->genres}}">
                    </div>
                    <div class="mb-2">
                        <label for="published_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Published_at
                        </label>
                        <input type="text" id="published-at" name="published_at" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$booklist->published_at}}">
                    </div>

                    <button type="sybmit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
