<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Find Gamer
            </h2>
            <p class="mb-4">Find your gamer buddy</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Gamer Title</label>
                <input value="{{old('company')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="company"  placeholder="Example: EU/ Valorant Diamong Player"/>
                @error('company')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Gamer Tag Name</label>
                <input value="{{old('title')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="title"/>
                @error('title')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Game Platform</label>
                <input value="{{old('location')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Riot/Epic Games/Steam"/>
                @error('location')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Gamer</label>
                <input value="{{old('email')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="email" placeholder="Example: Steam Profile Link"/>
                @error('email')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Highlight of your skill URL</label>
                <input value="{{old('website')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="website" placeholder="A small clip of your gameplay"/>
                @error('website')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Looking Skills (Comma Separated)</label>
                <input value="{{old('tags')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: TryHard, Casual, Fun"/>
                @error('tags')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Gamer Logo</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
                @error('logo')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Gamer Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="What kind of gamer buddy do you want">
                    {{old('description')}}
                </textarea>
                @error('description')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-gray-500 text-white rounded py-2 px-4 hover:bg-black">Create</button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
        </x-card>
</x-layout>