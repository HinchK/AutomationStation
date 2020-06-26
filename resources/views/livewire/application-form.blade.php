<div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
    <form wire:submit.prevent="save">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                Name
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model.lazy="name" id="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
            </div>

            @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6">
            <label for="github" class="block text-sm font-medium text-gray-700 leading-5">
                Github Link
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model.lazy="github" id="github" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('region') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
            </div>

            @error('github')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6">
            <label for="notes" class="block text-sm font-medium text-gray-700 leading-5">
                Notes
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model.lazy="notes" id="notes" type="text-gray-500" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('notes') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
            </div>

            @error('notes')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6">
            <label for="backup_filename" class="block text-sm font-medium text-gray-700 leading-5">
                Spatie/Backup file ...
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model.lazy="backup_filename" id="filename" type="file" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
        </div>

        <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Save
                        </button>
                    </span>
        </div>
    </form>
</div>

