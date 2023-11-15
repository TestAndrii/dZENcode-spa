<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
        <h1>Welcome to Chat!</h1>
    </div>

    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

            <div class="w-full max-w-xs">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input type="text" wire:model="title" id="username">
                        <div>
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input type="text" wire:model="content" id="password" class="bg-gray-800">
                        <div>
                            @error('content') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4">



            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-800 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</div>