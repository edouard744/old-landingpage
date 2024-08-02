<!DOCTYPE html>
<html lang="en">
    <x-head
        description="Willems Edouard, jeune développeur web belge fraîchement diplômé."
        title="Willems Edouard Portfolio"
    />
    <x-body>
        <x-main-nav />
        <section class="bg-contact relative flex min-h-screen py-3">
            <div class="mx-auto flex w-full max-w-7xl flex-col items-center justify-center">
                <div class="flex flex-col gap-4 text-center">
                    <h1 class="text-scale font-bold text-blue-900">
                        Parlez moi de
                        <span class="block text-blue-500">votre projet !</span>
                    </h1>
                    <p class="max-w-2xl text-xl font-medium text-blue-700">
                        Vous pouvez m'expliquer votre demande via ce formulaire ou en me contactant via mes coordonnées
                        si dessous.
                    </p>
                </div>
                <div
                    class="my-10 grid w-11/12 grid-cols-1 justify-center rounded-3xl shadow-lg md:w-10/12 xl:w-full xl:grid-cols-6"
                >
                    <div
                        class="col-span-2 flex flex-col gap-4 rounded-t-3xl border-l-2 border-blue-800 bg-blue-800 fill-white p-10 text-white xl:rounded-l-3xl xl:rounded-tr-none"
                    >
                        <span class="mb-4 block text-3xl font-semibold">Contactez moi</span>
                        <div class="flex flex-col gap-8 border-b-2 pb-4">
                            <div class="flex gap-1">
                                <svg
                                    class="h-12 w-12"
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    viewBox="-5.0 -10.0 110.0 135.0"
                                >
                                    <path
                                        d="m83.094 75 5.3125 5.3125c-1.2578 0.60938-2.6328 0.92969-4.0312 0.9375h-68.75c-1.3984-0.007812-2.7734-0.32812-4.0312-0.9375l27.719-27.719 5.1562 4.625c1.5117 1.3789 3.4844 2.1484 5.5312 2.1562 2.0547-0.023438 4.0312-0.78906 5.5625-2.1562l5.125-4.5938zm-34.375-22.469c0.36328 0.375 0.86719 0.58984 1.3906 0.58984s1.0273-0.21484 1.3906-0.58984l30.594-27.531 6.0625-5.4375c-1.1914-0.52734-2.4805-0.80469-3.7812-0.8125h-68.75c-1.3008 0.007812-2.5898 0.28516-3.7812 0.8125l6.0625 5.4375zm-13.969-4.125-22.25-19.844-5.1875-4.6562c-0.69141 1.3008-1.0547 2.7461-1.0625 4.2188v43.75c0.003906 1.3867 0.32422 2.7578 0.9375 4l5.3125-5.3125zm57.938-24.5-5.1875 4.6562-22.156 19.844 22.156 22.188 5.3125 5.3125c0.60938-1.2578 0.92969-2.6328 0.9375-4.0312v-43.75c-0.007812-1.4727-0.37109-2.918-1.0625-4.2188z"
                                    />
                                </svg>
                                <div class="flex flex-col">
                                    <span class="text-xl font-semibold">Email</span>
                                    <span class="font-medium">
                                        contact
                                        @willems-edouard.be
                                    </span>
                                </div>
                            </div>
                            <div class="flex gap-1">
                                <svg
                                    class="h-12 w-12"
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    viewBox="-5.0 -10.0 110.0 135.0"
                                >
                                    <path
                                        d="m89.684 70.414-10.082-10.082c-2.3438-2.3828-6-2.6133-8.668-0.6875l-2.457 1.793s18.168 18.18 20.023 20l1.6875-2.125c2.125-2.6445 1.918-6.4805-0.5-8.8945z"
                                    />
                                    <path
                                        d="m65.078 63.914-1.7695 1.293c0.0625 0.30469-2.957-1.4531-2.9805-1.418-11.273-5.8789-20.457-15.539-25.543-27.105l1.293-1.7695c-4.125-4.125-16.672-16.672-20.793-20.793-9.4922 6.5898-7.7891 12.559-3.418 21.898 11.406 25.449 32.977 45.426 59.168 54.98 4.4883 1.6211 9.6289 0.23828 12.668-3.5625l2.168-2.7305c-1.6211-1.6016-20.793-20.793-20.793-20.793z"
                                    />
                                    <path
                                        d="m38.555 31.496 1.793-2.4375c1.9375-2.6875 1.6445-6.332-0.6875-8.668l-10.082-10.105c-2.418-2.3945-6.25-2.625-8.918-0.48047l-2.1055 1.6875 20 20z"
                                    />
                                </svg>
                                <div class="flex flex-col">
                                    <span class="text-xl font-semibold">Téléphone</span>
                                    <span class="font-medium">+32 498 043 730</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-8 pb-4">
                            <span class="text-xl font-semibold">Réseaux</span>
                            <x-facebooksvg class="h-10 w-10" />
                        </div>
                    </div>
                    <div
                        class="col-span-4 w-full rounded-b-3xl xl:rounded-bl-none xl:rounded-r-3xl border-x-2 border-b-2 border-gray-200 bg-white p-10 xl:border-y-2 xl:border-r-2"
                    >
                        <span class="mb-4 block text-3xl font-semibold text-blue-800">Envoyez moi un message</span>
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
                                <div class="col-span-2 flex flex-col gap-1 md:col-span-1">
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
                                <div class="col-span-2 flex flex-col gap-1 md:col-span-1">
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
                                <div class="col-span-2 flex flex-col gap-1 md:col-span-1">
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
                                <div class="col-span-2 flex flex-col gap-1 md:col-span-1">
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
                                <div class="col-span-2 flex flex-col gap-1">
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
                                <div class="">
                                    <button
                                        type="submit"
                                        class="rounded bg-blue-600 px-8 py-2 font-medium text-white hover:bg-blue-700"
                                    >
                                        Envoyer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <x-footer />
    </x-body>
</html>
