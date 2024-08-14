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
            <form action={{route('employer.update', $employer->id)}} method="POST">
                @method('PUT')
                @csrf
                <div class="grid gap-4 mb-6">
                    <div class="mb-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Name
                        </label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$employer->name}}">
                    </div>
                    <div class="mb-2">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Age
                        </label>
                        <input type="text" id="age" name="age" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$employer->age}}">
                    </div>
                    <div class="mb-2">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Gender
                        </label>
                        <input type="text" id="gender" name="gender" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$employer->gender}}">
                    </div>
                    <div class="mb-2">
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Position
                        </label>
                        <input type="text" id="position" name="position" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$employer->position}}">
                    </div>
                    <div class="mb-2">
                        <label for="year_of_experience" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Year_of_experience
                        </label>
                        <input type="text" id="year_of_experience" name="year_of_experience" class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg w-full" value="{{$employer->year_of_experience}}">
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
