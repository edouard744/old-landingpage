<!DOCTYPE html>
<html lang="fr">
    <x-head description="Willems Edouard, jeune développeur web belge fraîchement diplômé." title="Willems Edouard" />
    <x-body>
        <x-main-nav />
        <main id="main">
            <div class="bg-secondary flex h-screen w-full flex-col items-center justify-center gap-8 text-center">
                <h1 class="text-9xl font-bold text-blue-600">{{ __('message.404.title') }}</h1>
                <p class="text-2xl font-medium text-blue-900 md:text-4xl">
                    {{ __('message.404.subtitle') }}
                    <a class="text-blue-500 underline" href="/">{{ __('message.404.subtitlelast') }}</a>
                </p>
            </div>
        </main>
    </x-body>
</html>
