<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto mt-10">
        <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action={{ route('item.update', $item->id) }} method="POST">
                @method('PUT')
                @csrf
                <div class="grid gap-4 mb-6">
                    <div class="mb-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Name
                        </label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full"
                            value="{{ $item->name }}">
                    </div>
                    <div class="mb-2">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Price
                        </label>
                        <input type="text" id="price" name="price"
                            class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full"
                            value="{{ $item->price }}">
                    </div>
                    <div class="mb-2">
                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Stock
                        </label>
                        <input type="text" id="stock" name="stock"
                            class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full"
                            value="{{ $item->stock }}">
                    </div>
                    <div class="mb-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Description
                        </label>
                        <textarea type="text" id="description" rows="3" name="description"
                            class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full">
                        {{ $item->description }}
                        </textarea>
                    </div>
                    <button type="sybmit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
