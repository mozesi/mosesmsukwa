<div>
    <div class="container flex flex-col items-center justify-between px-6 py-24 ms-auto space-y-12 md:py-12 md:flex-row md:space-y-0" >
        <x-form wire:submit="contactMe">
            <x-input label="Email" wire:model="email" type="email" placeholder="name@company.com" />
            <x-input label="Subject" wire:model="subject" placeholder="Technical support on XYZ"  />
            <x-input label="Subject" wire:model="description" placeholder="I need your support on XYZ" />
            <x-slot:actions>
                <x-button label="Send message" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-form>
    </div>
</div>
