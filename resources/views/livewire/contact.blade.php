<div>
    <div class="container flex flex-col md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        @if ($saved)
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              Your message has been sent.
            </div>
          </div>
        @endif
    </div>
    <x-form wire:submit="save">
        <x-input label="Email" wire:model="email" />
        <x-input label="Subject" wire:model="subject" />
        <x-textarea label="Desccription" wire:model="description" />

        <x-slot:actions>
            <x-button label="Cancel" />
            <x-button label="Send message" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
