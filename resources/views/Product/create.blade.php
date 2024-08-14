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
            <form action={{route('product.store')}} method="POST">
                @csrf
                <div class="grid gap-4 mb-6">
                    <div class="mb-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Name
                        </label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-2">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Category
                        </label>
                        <input type="text" id="category" name="category" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-2">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Price
                        </label>
                        <input type="number" id="price" name="price" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-2">
                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Stock
                        </label>
                        <input type="number" id="stock" name="stock" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-2">
                        <label for="viewers" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Viewers
                        </label>
                        <input type="number" id="viewers" name="viewers" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Description
                        </label>
                        <textarea type="text" id="description" name="description" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full"></textarea>
                    </div>
                    <button type="sybmit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-green-800">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
