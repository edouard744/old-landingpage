<div {{ $attributes->merge(['class' => '']) }}>
    <span class="{{ empty($errors->all()) ? 'js-contact-down' : '' }} mb-4 block text-3xl font-semibold text-blue-800">
        {{ __('message.contact.form.title') }}
    </span>
    <form class="block" action="/mail" method="POST">
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
                        <p class="font-bold">{{ __('message.contact.form.success') }}</p>
                        <p class="text-sm">{{ __('message.contact.form.success_value') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-2 gap-4">
            <div
                class="{{ empty($errors->all()) ? 'js-contact-down' : '' }} col-span-2 flex flex-col gap-1 md:col-span-1"
            >
                <label for="name" class="text-lg font-medium text-blue-900">
                    {{ __('message.contact.form.name') }}*
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    id="name"
                    placeholder="{{ __('message.contact.form.name_value') }}"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />

                @error('name')
                    <span class="text-sm text-red-500">
                        {{ trans('validation.required', ['attribute' => __('message.contact.form.name')]) }}
                    </span>
                @enderror
            </div>
            <div
                class="{{ empty($errors->all()) ? 'js-contact-down' : '' }} col-span-2 flex flex-col gap-1 md:col-span-1"
            >
                <label for="tel" class="text-lg font-medium text-blue-900">
                    {{ __('message.contact.form.phone') }}
                </label>
                <input
                    type="tel"
                    name="tel"
                    value="{{ old('tel') }}"
                    id="tel"
                    placeholder="{{ __('message.contact.form.phone_value') }}"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />
            </div>
            <div
                class="{{ empty($errors->all()) ? 'js-contact-down' : '' }} col-span-2 flex flex-col gap-1 md:col-span-1"
            >
                <label for="email" class="text-lg font-medium text-blue-900">
                    {{ __('message.contact.form.email') }}*
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    id="email"
                    placeholder="{{ __('message.contact.form.email_value') }}"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />
                @error('email')
                    <span class="text-sm text-red-500">
                        {{ trans('validation.required', ['attribute' => __('message.contact.form.email')]) }}
                    </span>
                @enderror
            </div>
            <div
                class="{{ empty($errors->all()) ? 'js-contact-down' : '' }} col-span-2 flex flex-col gap-1 md:col-span-1"
            >
                <label for="about" class="text-lg font-medium text-blue-900">
                    {{ __('message.contact.form.about') }}*
                </label>
                <input
                    type="text"
                    name="about"
                    value="{{ old('about') }}"
                    id="about"
                    placeholder="{{ __('message.contact.form.about_value') }}"
                    class="w-full rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                />
                @error('about')
                    <span class="text-sm text-red-500">
                        {{ trans('validation.required', ['attribute' => __('message.contact.form.about')]) }}
                    </span>
                @enderror
            </div>
            <div class="{{ empty($errors->all()) ? 'js-contact-down' : '' }} col-span-2 flex flex-col gap-1">
                <label for="message" class="text-lg font-medium text-blue-900">
                    {{ __('message.contact.form.message') }}*
                </label>
                <textarea
                    name="message"
                    value="{{ old('message') }}"
                    id="message"
                    placeholder="{{ __('message.contact.form.message_value') }}"
                    class="min-h-40 w-full resize-none rounded-md border border-grey-500 bg-[#FCFCFC] px-4 py-2 focus:border-blue-500 focus:outline-none"
                ></textarea>
                @error('message')
                    <span class="text-sm text-red-500">
                        {{ trans('validation.required', ['attribute' => __('message.contact.form.message')]) }}
                    </span>
                @enderror
            </div>

            <div class="buttons {{ empty($errors->all()) ? 'js-contact-down' : '' }} my-4 w-max">
                <div class="blob-btn group font-medium">
                    <button
                        type="submit"
                        class="blob-btn-color blob peer relative left-0 z-20 text-xl focus:-left-3 focus:underline group-hover:-left-3 group-hover:underline"
                    >
                        {{ __('buttons.send') }}
                    </button>
                    <x-arrow-svg
                        class="blob-btn-color invisible absolute right-5 top-10 fill-white opacity-0 group-hover:visible group-hover:top-4 group-hover:opacity-100 peer-focus-visible:visible peer-focus-visible:top-4 peer-focus-visible:opacity-100"
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
