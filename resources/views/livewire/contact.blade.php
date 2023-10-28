<div>
    <div class="container flex flex-col items-center justify-between px-6 py-24 ms-auto space-y-12 md:py-12 md:flex-row md:space-y-0" >
        <form wire:submit ="contactMe">
            <input type="text" wire:model ="email" placeholder="email@xyz.com">
            <input type="text" wire:model ="subject" placeholder="Technical support">
            <input type="text" wire:model ="description" placeholder="I need your support on XYZ">
            <button class="bg-red-500">Send</button>
        </form>
    </div>
</div>
