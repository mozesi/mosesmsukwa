<div>
    <div class="container flex flex-col items-center justify-between px-6 py-24 ms-auto space-y-12 md:py-12 md:flex-row md:space-y-0" >
        <form wire:submit="contactMe">
            <input class ="form-input px-4 py-3 rounded-full" label="Email" wire:model="email" type="email" placeholder="name@company.com" />
            <input class ="form-input px-4 py-3 rounded-full" label="Subject" wire:model="subject" placeholder="Enter subject."  />
            <textarea class ="form-textarea  rounded-full" label="Subject" wire:model="description"> </textarea>

            <button class="btn-primary" > Send message</button>
        </form>
    </div>
</div>
