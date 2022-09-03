<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Find Gamer
            </h2>
            <p class="mb-4">Find your gamer buddy</p>
        </header>

        <form action="">
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Gamer Tag Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"/>
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Game Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: EU/ Valorant Diamong Player"/>
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Game Platform</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Riot/Epic Games/Steam"/>
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Gamer</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" placeholder="Example: Steam Profile Link"/>
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Highlight of your skill URL</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"/>
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Looking Skills (Comma Separated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: TryHard, Casual, Fun"/>
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Gamer Logo</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Gamer Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="What kind of gamer buddy do you want"></textarea>
            </div>
        </x-card>
</x-layout>