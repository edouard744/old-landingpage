<div {{ $attributes->merge(['class' => '']) }}>
    <span class="js-contact-up mb-4 block text-3xl font-semibold">{{ __('message.contact.info.title') }}</span>
    <div class="js-contact-up flex flex-col gap-8 border-b-2 pb-4">
        <div class="js-contact-down flex gap-1">
            <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
                <path
                    d="m83.094 75 5.3125 5.3125c-1.2578 0.60938-2.6328 0.92969-4.0312 0.9375h-68.75c-1.3984-0.007812-2.7734-0.32812-4.0312-0.9375l27.719-27.719 5.1562 4.625c1.5117 1.3789 3.4844 2.1484 5.5312 2.1562 2.0547-0.023438 4.0312-0.78906 5.5625-2.1562l5.125-4.5938zm-34.375-22.469c0.36328 0.375 0.86719 0.58984 1.3906 0.58984s1.0273-0.21484 1.3906-0.58984l30.594-27.531 6.0625-5.4375c-1.1914-0.52734-2.4805-0.80469-3.7812-0.8125h-68.75c-1.3008 0.007812-2.5898 0.28516-3.7812 0.8125l6.0625 5.4375zm-13.969-4.125-22.25-19.844-5.1875-4.6562c-0.69141 1.3008-1.0547 2.7461-1.0625 4.2188v43.75c0.003906 1.3867 0.32422 2.7578 0.9375 4l5.3125-5.3125zm57.938-24.5-5.1875 4.6562-22.156 19.844 22.156 22.188 5.3125 5.3125c0.60938-1.2578 0.92969-2.6328 0.9375-4.0312v-43.75c-0.007812-1.4727-0.37109-2.918-1.0625-4.2188z"
                />
            </svg>
            <div class="flex flex-col">
                <span class="text-xl font-semibold">{{ __('message.contact.info.email') }}</span>
                <a href="mailto:contact@willems-edouard.be" class="font-medium hover:underline focus:underline">
                    {{ __('message.contact.info.email_value') }}
                </a>
            </div>
        </div>
        <div class="js-contact-down flex gap-1">
            <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0">
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
                <span class="text-xl font-semibold">{{ __('message.contact.info.phone') }}</span>
                <a href="tel:+32498043730" class="font-medium hover:underline focus:underline">
                    {{ __('message.contact.info.phone_value') }}
                </a>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4 pb-4">
        <span class="js-contact-right text-xl font-semibold">{{ __('message.contact.info.network') }}</span>
        <div class="flex">
            <div class="js-contact-right flex basis-16">
                <a target="_blank" href="#" class="social-icon">
                    <x-facebook-svg class="h-7 w-7" />
                </a>
            </div>
            <div class="js-contact-right flex basis-16">
                <a target="_blank" href="#" class="social-icon">
                    <x-linkedin-svg class="h-6 w-6" />
                </a>
            </div>
        </div>
    </div>
</div>
