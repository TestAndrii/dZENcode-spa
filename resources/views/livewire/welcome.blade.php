<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex text-center ">
        <a href="/" style="color: black;">
            <h5 class="pb-0 mb-0"><strong>Live Chat with</strong></h5>
            <h2 class="pt-0 mt-0"><strong>Laravel + LiveWire</strong></h2>
        </a>
    </div>

    <div class="mx-3 my-3">

        <div class="row">
            <div class="col-md-6">
                <livewire:chat-form />
            </div>
            <div class="col-md-6">
                <livewire:chat-list />
            </div>
        </div>

    </div>

    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4">
<!--  -->
            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-800 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) Livewire v3.2.1
        </div>
    </div>
</div>