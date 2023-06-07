<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Edit User</title>
      
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>


    </head>
<body>


<div class="flex items-center space-x-2">
        <div x-data="{ openModal: true }">
            <div x-show="openModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded shadow-lg p-8 w-2/3 h-4/5">
                    <button x-on:click="openModal = false" class="absolute top-0 right-0 m-4 text-gray-500 hover:text-gray-700">
                        Close
                    </button>
                    <form action="{{ url('/users/' . $usercreated->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">User Name:</label>
                            <input type="text" value="{{$usercreated->name}}" id="name" name="usercreated->" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter name">
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">User Email</label>
                            <input type="text" value="{{$usercreated->email}}" id="price" name="productprice" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter price">
                        </div>

                        <div class="mb-4">
                        
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Change User Password</label>
                            <input type="text" id="price" name="password" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter price">
                            @if ($errors->has('password'))
                        <p class="text-red-500 text-sm">{{ $errors->first('password') }}</p>
                         @endif
                        </div>
                    
                        <div class="flex justify-center">
                            <button type="submit" value="Update Product"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
      

</body>
</html>