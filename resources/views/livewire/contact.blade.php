<div>
    <section id="contact" class="py-20">

        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Get in Touch</h2>
            <form class="max-w-lg mx-auto" wire:submit="contactMe">
                <div class="mb-4">
                    <input type="text" wire:model="subject" placeholder="Subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <input type="email" wire:model="email"  placeholder="Your Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <textarea placeholder="Your Message" wire:model="description"  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 h-32"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-full w-full hover:bg-blue-600 transition duration-300">Send Message</button>
            </form>
        </div>
    </section>
</div>
