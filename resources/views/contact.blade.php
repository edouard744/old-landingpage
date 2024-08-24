<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <x-head
        description="Willems Edouard, jeune développeur web belge fraîchement diplômé."
        title="Willems Edouard Portfolio"
    />
    <x-body>
        <x-main-nav />
        <main id="main">
            <section class="bg-secondary relative flex min-h-screen py-20">
                <div class="mx-auto flex w-full max-w-7xl flex-col items-center justify-center">
                    <div class="flex flex-col gap-4 text-center">
                        <h1
                            class="text-scale {{ empty($errors->all()) ? 'js-contact-up' : '' }} font-bold text-blue-900"
                        >
                            {{ __('message.contact.title') }}
                            <span class="block text-blue-500">{{ __('message.contact.titlelast') }}</span>
                        </h1>
                        <p
                            class="{{ empty($errors->all()) ? 'js-contact-up' : '' }} max-w-2xl text-xl font-medium text-blue-700"
                        >
                            {{ __('message.contact.textone') }}
                        </p>
                    </div>
                    <div
                        class="{{ empty($errors->all()) ? 'js-contact-left' : '' }} js-contact-box my-10 grid w-11/12 grid-cols-1 justify-center rounded-3xl shadow-lg md:w-10/12 xl:w-full xl:grid-cols-6"
                    >
                        <x-infocontact
                            class="col-span-2 row-start-2 flex flex-col gap-4 rounded-b-3xl border-l-2 border-blue-800 bg-blue-800 fill-white p-10 text-white xl:row-start-1 xl:rounded-l-3xl xl:rounded-br-none"
                        />
                        <x-formcontact
                            class="col-span-4 row-start-1 w-full rounded-t-3xl border-x-2 border-t-2 border-gray-200 bg-white p-10 xl:rounded-r-3xl xl:rounded-tl-none xl:border-y-2 xl:border-r-2"
                        />
                    </div>
                </div>
            </section>
        </main>
        <x-footer />
    </x-body>
</html>
