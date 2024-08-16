<div {{ $attributes->merge(['class' => '']) }}>
    <span class="js-contact-down mb-4 block text-3xl font-semibold text-blue-800">Envoyez moi un message</span>
    <form class="block" action="/contact" method="POST">
        @csrf
        @if (session()->has('succes'))
            <div
                class="mb-5 rounded-b border-t-4 border-green-500 bg-green-100 px-4 py-3 text-green-900 shadow-md"
                role="alert"
            >
                <div class="flex">
                    <div class="py-1">
                        <svg
                            class="mr-4 h-6 w-6 fill-current text-teal-500"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"
                            />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Merci de votre message</p>
                        <p class="text-sm">je vous contacterai au plus vite.</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-2 gap-4">
            <div class="js-contact-down col-span-2 flex flex-col gap-1 md:col-span-1">
                <label for="name" class="text-lg font-medium text-blue-900">Nom*</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    id="name"
                    placeholder="Votre nom"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />

                @error('name')
                    <span class="text-sm text-red-500">* Ce champ est obligatoires</span>
                @enderror
            </div>
            <div class="js-contact-down col-span-2 flex flex-col gap-1 md:col-span-1">
                <label for="tel" class="text-lg font-medium text-blue-900">Téléphone</label>
                <input
                    type="tel"
                    name="tel"
                    value="{{ old('tel') }}"
                    id="tel"
                    placeholder="Votre numéro"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />
            </div>
            <div class="js-contact-down col-span-2 flex flex-col gap-1 md:col-span-1">
                <label for="email" class="text-lg font-medium text-blue-900">Email*</label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    id="email"
                    placeholder="votre@email.com"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />
                @error('email')
                    <span class="text-sm text-red-500">* Ce champ est obligatoires</span>
                @enderror
            </div>
            <div class="js-contact-down col-span-2 flex flex-col gap-1 md:col-span-1">
                <label for="about" class="text-lg font-medium text-blue-900">Sujet*</label>
                <input
                    type="text"
                    name="about"
                    value="{{ old('about') }}"
                    id="about"
                    placeholder="Quel est votre sujet ?"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />
                @error('about')
                    <span class="text-sm text-red-500">* Ce champ est obligatoires</span>
                @enderror
            </div>
            <div class="js-contact-down col-span-2 flex flex-col gap-1">
                <label for="message" class="text-lg font-medium text-blue-900">Message*</label>
                <textarea
                    name="message"
                    value="{{ old('message') }}"
                    id="message"
                    placeholder="Votre message"
                    class="min-h-40 w-full resize-none rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                ></textarea>
                @error('message')
                    <span class="text-sm text-red-500">* Ce champ est obligatoires</span>
                @enderror
            </div>

            <div class="buttons js-contact-down my-4 w-max">
                <div class="blob-btn group flex justify-center gap-4 font-medium">
                    <button
                        type="submit"
                        class="blob-btn-color blob peer relative left-5 text-xl z-20 focus:left-0 focus:underline group-hover:left-0 group-hover:underline"
                    >
                        Envoyer
                    </button>
                    <x-arrow-svg
                        class="blob-btn-color invisible relative top-5 fill-white opacity-0 group-hover:visible group-hover:top-1 group-hover:opacity-100 peer-focus-visible:visible peer-focus-visible:top-1 peer-focus-visible:opacity-100"
                    />
                    <div class="blob-btn__inner">
                        <div class="blob-btn__blobs">
                            <div class="blob-btn__blob"></div>
                            <div class="blob-btn__blob"></div>
                            <div class="blob-btn__blob"></div>
                            <div class="blob-btn__blob"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
