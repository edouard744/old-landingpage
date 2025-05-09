<!DOCTYPE html>
<html lang="en">
    <x-head description="Mes services" title="Willems Edouard : Services" />

    <x-body>
        <div class="h-14 w-full bg-white md:h-full">
            <x-main-nav />
        </div>
        <main id="main">
            <section class="bg-image mb-20 bg-cover">
                <div class="js-wrapper relative mx-auto w-full max-w-7xl py-28">
                    <h1 class="js-down mb-10 text-center font-bold text-white">{{ __('message.service.title') }}</h1>
                </div>
            </section>

            <section class="js-wrapper">
                <div
                    class="js-reveal mx-2 mb-20 flex max-w-7xl flex-col gap-8 rounded-2xl border-2 border-grey-100 bg-blue-100 p-4 md:p-6 xl:mx-auto xl:p-8"
                >
                    <h2 class="js-down text-xl font-bold text-blue-900 sm:text-2xl md:text-4xl">
                        {{ __('message.service.intro.title') }}
                    </h2>
                    <p class="js-up text-xl font-medium text-blue-800 lg:text-2xl">
                        {{ __('message.service.intro.text') }}
                    </p>
                </div>
            </section>
            <section class="mx-auto mb-28 grid max-w-7xl px-4 md:px-2 lg:grid-cols-7">
                <div
                    class="js-wrapper -mb-4 rounded-t-3xl border-2 border-grey-100 px-4 pb-16 pt-8 shadow-xl md:pl-8 lg:col-span-3 lg:-mr-4 lg:mb-0 lg:rounded-l-3xl lg:rounded-tr-none lg:pb-8 lg:pr-8"
                >
                    <h2 class="js-down mb-10 text-2xl font-bold text-blue-700 xl:text-3xl">
                        {{ __('message.service.left.title') }}
                    </h2>

                    <div class="flex flex-col gap-6 font-medium text-blue-900">
                        <p class="js-up text-xl">
                            {!! __('message.service.left.text4') !!}
                        </p>
                        <ul class="js-up flex ml-4 text-lg  list-disc flex-col gap-4">
                            <li>{!! __('message.service.left.text') !!}</li>
                            <li>{!! __('message.service.left.text2') !!}</li>
                            <li>{!! __('message.service.left.text3') !!}</li>
                        </ul>
                    </div>
                </div>
                <aside class="js-wrapper rounded-3xl bg-blue-800 px-4 py-8 text-white shadow-xl md:p-8 lg:col-span-4">
                    <div class="">
                        <h2 class="js-down mb-10 text-2xl font-bold xl:text-2xl">
                            {{ __('message.service.right.title') }}
                        </h2>
                        <div class="grid items-start justify-center gap-8 sm:grid-cols-2 md:gap-12">
                            <div class="js-down flex flex-col gap-2">
                                <div class="flex flex-col gap-2 lg:flex-row lg:items-center">
                                    <x-accecibility-svg class="h-10 w-10" />
                                    <span class="text-xl font-semibold">
                                        {{ __('message.service.right.subtitle1') }}
                                    </span>
                                </div>
                                <p>
                                    {{ __('message.service.right.text1') }}
                                </p>
                            </div>
                            <div class="js-down flex flex-col gap-2">
                                <div class="flex flex-col gap-2 lg:flex-row lg:items-center">
                                    <x-referencement-svg class="h-10 w-10" />
                                    <span class="text-xl font-semibold">
                                        {{ __('message.service.right.subtitle2') }}
                                    </span>
                                </div>
                                <p>
                                    {{ __('message.service.right.text2') }}
                                </p>
                            </div>
                            <div class="js-up flex flex-col gap-2">
                                <div class="flex flex-col gap-2 lg:flex-row lg:items-center">
                                    <svg
                                        class="h-10 w-10 fill-white"
                                        viewBox="1 1 10 9"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="m5.146975 1.2456622a.26458349.26458349 0 0 0 -.2635515.265615.26458349.26458349 0 0 0 .2635515.263552h.2113545v.437182c-.7359994.172201-1.4074802.572873-1.9104769 1.154969a.26458299.26458299 0 0 0 .02739.372587.26458299.26458299 0 0 0 .3731021-.02687c.5852795-.67732 1.437132-1.066601 2.3321592-1.066601 1.7044697 0 3.079914 1.37501 3.079914 3.079914 0 1.704906-1.3754443 3.081983-3.079914 3.081983-.8950272 0-1.7468797-.388768-2.3321592-1.066086a.26458299.26458299 0 0 0 -.3731021-.02739.26458299.26458299 0 0 0 -.02739.373102c.6855751.793385 1.6841893 1.250054 2.732651 1.250054 1.9905107 0 3.6090807-1.620838 3.6090807-3.611666 0-1.708642-1.1925353-3.142724-2.7889755-3.515032v-.436146h.2108385a.26458349.26458349 0 0 0 .2656178-.263552.26458349.26458349 0 0 0 -.2656178-.265615zm.7405211.529167h.583946v.353465c-.096091-.0077-.1928971-.01138-.2909385-.01138-.098121 0-.1959795.004-.2930075.01188zm1.9228805 2.056204a.26458299.26458299 0 0 0 -.1865524.07648l-1.0583333 1.059884c-.1158134-.05931-.2468377-.09302-.3849873-.09302-.4675372 0-.8536966.384085-.8536966.851628 0 .467545.3861594.853694.8536966.853694.4675373 0 .8516276-.386149.8516276-.853694 0-.138152-.033711-.269174-.09302-.38499l1.0598837-1.058333a.26458299.26458299 0 0 0 -.00212-.375172.26458299.26458299 0 0 0 -.1865524-.07648zm-5.7645061.551389a.26458349.26458349 0 0 0 -.2656152.263549.26458349.26458349 0 0 0 .2656152.265618h2.4804687a.26458349.26458349 0 0 0 .2656179-.265618.26458349.26458349 0 0 0 -.2656179-.263549zm4.1175781 1.021641c.00558-.000265.011377 0 .017066 0 .083055 0 .1575276.02919.2139394.07855a.26458299.26458299 0 0 0 .014473.01704.26458299.26458299 0 0 0 .014975.01241c.049371.0564.078547.130825.078547.213939 0 .181621-.1404461.324527-.3219423.324527-.1814963 0-.32453-.142906-.32453-.324527 0-.175945.1340961-.313523.3074749-.321945zm-5.1040797.0584a.26458349.26458349 0 0 0 -.26561783.263545.26458349.26458349 0 0 0 .26561783.265618h2.4804687a.26458349.26458349 0 0 0 .2635489-.265618.26458349.26458349 0 0 0 -.2635489-.263549zm.9865016 1.080037a.26458349.26458349 0 0 0 -.2656152.265615.26458349.26458349 0 0 0 .2656152.263552h2.4804687a.26458349.26458349 0 0 0 .2656179-.263556.26458349.26458349 0 0 0 -.2656179-.265615z"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    <span class="text-xl font-semibold">
                                        {{ __('message.service.right.subtitle3') }}
                                    </span>
                                </div>
                                <p>
                                    {{ __('message.service.right.text3') }}
                                </p>
                            </div>
                            <div class="js-up flex flex-col gap-2">
                                <div class="flex flex-col gap-2 lg:flex-row lg:items-center">
                                    <x-responsive-svg class="h-10 w-10" />
                                    <span class="text-xl font-semibold">
                                        {{ __('message.service.right.subtitle4') }}
                                    </span>
                                </div>
                                <p>{{ __('message.service.right.text4') }}</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </section>
            <section class="bg-gradient-to-b from-white to-[#ECF3FF] px-4 pt-20 md:px-8">
                <div class="js-wrapper">
                    <h2
                        class="js-left mx-auto mb-10 w-max rounded-lg bg-blue-700 px-4 py-2 text-lg font-medium text-white"
                    >
                        {{ __('message.service.bottom.title') }}
                    </h2>
                    <span class="text-scale js-up mb-20 block w-full text-center font-semibold text-blue-900">
                        {{ __('message.service.bottom.subtitle') }}
                    </span>
                </div>
                <div
                    class="js-wrapper mx-auto grid max-w-7xl justify-center gap-8 pb-40 md:grid-cols-2 md:justify-start xl:grid-cols-3"
                >
                    <div
                        class="js-down flex max-w-md flex-col gap-2 rounded-2xl bg-white p-8 shadow-2xl md:justify-self-end"
                    >
                        <div class="mb-2 flex items-center gap-2 fill-blue-700 stroke-blue-700 text-blue-700">
                            <svg
                                class="h-12 w-12"
                                fill="none"
                                height="48"
                                viewBox="0 0 48 48"
                                width="48"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <g fill="#242bcc">
                                    <path
                                        d="m46.4017 17.0205h-1.8128c-.1966-.6744-.4679-1.3252-.8081-1.9504l1.282-1.282c.3067-.3067.3067-.8042 0-1.1128l-2.8058-2.80767c-.1474-.14746-.346-.23004-.5564-.23004-.2084 0-.409.08258-.5564.23004l-1.282 1.28197c-.6213-.3402-1.274-.6095-1.9504-.8081v-1.81285c0-.43452-.352-.78646-.7865-.78646h-3.9696c-.4346 0-.7865.35194-.7865.78646v1.81285c-.6784.1986-1.3311.4699-1.9504.8081l-1.282-1.28197c-.1475-.14746-.346-.23004-.5564-.23004-.2084 0-.409.08258-.5565.23004l-2.8076 2.80767c-.3068.3067-.3068.8042 0 1.1128l1.2819 1.282c-.3401.6213-.6095 1.2721-.8081 1.9504h-1.8128c-.4345 0-.7865.3519-.7865.7865v3.9696c0 .4346.352.7865.7865.7865h1.8128c.1966.6744.468 1.3252.8081 1.9504l-1.2819 1.282c-.3068.3067-.3068.8042 0 1.1128l2.8076 2.8077c.295.2949.818.2949 1.1129 0l1.2819-1.282c.6213.3402 1.2741.6095 1.9504.8081v1.8129c0 .4345.352.7864.7865.7864h3.9697c.4345 0 .7864-.3519.7864-.7864v-1.8129c.6764-.1985 1.3292-.4679 1.9505-.8081l1.2819 1.282c.2949.2949.8179.2949 1.1128 0l2.8058-2.8077c.3067-.3067.3067-.8042 0-1.1128l-1.282-1.282c.3401-.6213.6095-1.274.8081-1.9504h1.8128c.4345 0 .7865-.3519.7865-.7865v-3.9696c0-.4346-.3519-.7865-.7864-.7865zm-.7864 3.9697h-1.632c-.2988 0-.5741.171-.7058.4365-.0275.057-.0491.1179-.0629.1809-.2084.926-.5721 1.8049-1.0716 2.5933-.2123.3185-.1612.7393.1042 1.0027l1.1483 1.1483-1.6949 1.6948-1.1561-1.1542c-.0255-.0275-.055-.0511-.0845-.0727-.2655-.2005-.6253-.2084-.8966-.0354-.8042.5112-1.683.873-2.6268 1.0853-.35.0865-.5997.405-.5997.7668v1.6319h-2.3967v-1.6339c0-.3794-.2713-.698-.6292-.7707-.9221-.2084-1.7951-.5702-2.5973-1.0794-.2713-.173-.6311-.1632-.8966.0354-.0294.0216-.0589.0472-.0845.0727l-1.1541 1.1542-1.6949-1.6948 1.1502-1.1503c.2615-.2556.3146-.6684.1141-.987-.5093-.8041-.873-1.683-1.0814-2.6071-.0138-.0629-.0354-.1219-.0629-.1809-.1337-.2674-.409-.4365-.7058-.4365h-1.632v-2.3967h1.632c.2988 0 .5741-.1711.7058-.4365.0275-.057.0491-.118.0629-.1809.2084-.926.5722-1.8049 1.0716-2.5933.2123-.3186.1612-.7393-.1042-1.0008l-1.1483-1.1503 1.6949-1.6948 1.1541 1.1542c.0256.0255.0551.0511.0846.0727.2674.2006.6252.2065.8965.0354.8042-.5092 1.6831-.873 2.6268-1.0853.35-.0865.5997-.405.5997-.7668v-1.6319h2.3968v1.6339c0 .3795.2713.698.6291.7707.9241.2084 1.7971.5702 2.5953 1.0774.2714.1711.6312.1652.8966-.0354.0295-.0216.059-.0471.0845-.0727l1.1561-1.1542 1.6949 1.6949-1.1502 1.1502c-.2615.2576-.3146.6685-.1141.985.5092.8042.873 1.6811 1.0814 2.6072.0137.0629.0354.1219.0629.1809.1337.2674.409.4365.7058.4365h1.632v2.3967z"
                                    />
                                    <path
                                        d="m35.1392 14.7319c-2.79 0-5.0611 2.269-5.0611 5.0611 0 1.335.5151 2.5933 1.4471 3.543.9438.9615 2.2041 1.5002 3.49 1.512.0275.002.057.0039.1061.0039h.0806c1.3449-.0157 2.6052-.5544 3.547-1.5139.934-.9496 1.4491-2.21 1.4491-3.543 0-2.79-2.269-5.0611-5.0611-5.0611zm2.4891 7.5008c-.6488.6626-1.5178 1.0322-2.4439 1.044h-.0649-.0256c-.926-.0118-1.7931-.3814-2.4439-1.044-.6429-.6548-.9969-1.5218-.9969-2.442 0-1.9229 1.5651-3.488 3.488-3.488s3.488 1.5651 3.488 3.488c0 .9201-.3539 1.7872-.9988 2.442z"
                                    />
                                    <path
                                        d="m26.297 30.6085c0-.2084-.0826-.4089-.23-.5564l-2.4853-2.4833c-.3067-.3067-.8042-.3067-1.1128 0l-1.0853 1.0853c-.5171-.2792-1.0578-.5033-1.6201-.6724v-1.5356c0-.4345-.352-.7864-.7865-.7864h-3.5116c-.4345 0-.7864.3519-.7864.7864v1.5356c-.5624.1691-1.1031.3932-1.6202.6724l-1.0853-1.0853c-.3067-.3067-.8042-.3067-1.1128 0l-2.48328 2.4833c-.30672.3067-.30672.8042 0 1.1128l1.0853 1.0853c-.2792.5171-.50334 1.0578-.67241 1.6202h-1.53558c-.43452 0-.78647.3519-.78647.7864v3.5116c0 .4345.35195.7865.78647.7865h1.53558c.16909.5584.39323 1.0991.67241 1.6201l-1.08731 1.0873c-.30673.3067-.30673.8042 0 1.1129l2.48329 2.4832c.3067.3067.8042.3067 1.1128 0l1.0853-1.0853c.5171.2792 1.0578.5034 1.6201.6724v1.5356c0 .4345.352.7865.7865.7865h3.5116c.4345 0 .7865-.352.7865-.7865v-1.5356c.5623-.1691 1.103-.3932 1.6201-.6724l1.0853 1.0853c.3067.3067.8042.3067 1.1128 0l2.4852-2.4832c.1475-.1475.2301-.3481.2301-.5565s-.0826-.4089-.2301-.5564l-1.0873-1.0853c.2792-.5171.5034-1.0578.6724-1.6202h1.5356c.4345 0 .7865-.3519.7865-.7864v-3.5116c0-.4345-.352-.7865-.7865-.7865h-1.5356c-.169-.5584-.3932-1.0991-.6724-1.6201l1.0873-1.0853c.1475-.1475.2301-.348.2301-.5565zm-1.2505 4.8329h1.3547v1.9386h-1.3547c-.2635 0-.5112.1337-.6567.352-.0531.0806-.0924.171-.114.2654-.1809.8101-.4994 1.5769-.934 2.2631-.1769.2634-.1769.6114 0 .8769.0276.0432.061.0825.0983.1199l.9595.9575-1.3724 1.3724-.9575-.9575c-.1278-.1278-.2969-.2084-.4797-.2281-.177-.0196-.352.0256-.4995.118-.7038.4463-1.4707.7629-2.2807.9438-.0629.0137-.1219.0354-.1809.0648-.2674.1337-.4365.409-.4365.7059v1.3547h-1.9386v-1.3567c0-.3677-.2556-.6881-.6154-.7668-.8101-.1809-1.5769-.4994-2.2808-.9457-.1474-.0944-.3263-.1376-.4994-.118-.1828.0177-.3519.0983-.4797.2281l-.9575.9575-1.3724-1.3724.9575-.9575c.0374-.0354.0708-.0767.0983-.1199.173-.2596.177-.5977.0098-.8612-.4463-.7038-.7648-1.4707-.9437-2.2787-.0197-.0944-.059-.1849-.1141-.2655-.14546-.2182-.39516-.3519-.65667-.3519h-1.35468v-1.9387h1.35468c.26347 0 .51119-.1337.65667-.3519.0531-.0806.0924-.1711.1141-.2654.1809-.8082.4994-1.5749.9339-2.2631.177-.2635.177-.6115 0-.8769-.0275-.0433-.0609-.0826-.0983-.1199l-.9575-.9575 1.3724-1.3724.9575.9575c.1278.1278.2969.2084.4798.228.173.0158.3519-.0255.4994-.1179.7038-.4464 1.4707-.7629 2.2984-.9497.35-.0865.5977-.405.5977-.7668v-1.3547h1.9387v1.3567c0 .3677.2556.6882.6154.7668.8101.1809 1.5768.4994 2.2807.9457.1475.0944.3244.1357.4994.118.1829-.0177.352-.0983.4798-.2281l.9575-.9575 1.3724 1.3724-.9595.9575c-.0374.0374-.0708.0767-.0983.1199-.173.2596-.177.5977-.0098.8612.4463.7019.7628 1.4687.9437 2.2787.0197.0944.059.1849.1141.2655.1454.2182.3952.3519.6567.3519z"
                                    />
                                    <path
                                        d="m17.2217 31.8435c-2.5187 0-4.5694 2.0487-4.5694 4.5674 0 1.2033.4641 2.3397 1.3076 3.199.8533.869 1.9897 1.3527 3.134 1.3625.0295.002.061.0039.1141.0039h.0688c1.2151-.0137 2.3535-.4994 3.2029-1.3664.8435-.8573 1.3075-1.9937 1.3075-3.199 0-2.5187-2.0487-4.5674-4.5674-4.5674zm2.1372 6.6652c-.5584.5702-1.3035.8867-2.1785.8965-.7943-.0078-1.5395-.3263-2.0979-.8965-.5525-.5623-.8572-1.3075-.8572-2.0979 0-1.6516 1.3448-2.9945 2.9964-2.9945 1.6515 0 2.9944 1.3429 2.9944 2.9945 0 .7904-.3047 1.5356-.8572 2.0979z"
                                    />
                                    <path
                                        d="m2.59918 15.67c.19858.6784.46795 1.3292.80811 1.9505l-1.28195 1.2819c-.30672.3067-.30672.8042 0 1.1129l2.8057 2.8076c.14747.1475.34605.2301.55644.2301.20842 0 .40897-.0826.55644-.2301l1.28195-1.2819c.62132.3401 1.27405.6095 1.95043.8081v1.8128c0 .4345.35195.7865.7865.7865h3.9696c.4346 0 .7865-.352.7865-.7865v-1.8128c.6784-.1986 1.3311-.4699 1.9504-.8081l1.282 1.2819c.1474.1475.346.2301.5564.2301.2084 0 .409-.0826.5565-.2301l2.8076-2.8076c.3068-.3068.3068-.8042 0-1.1129l-1.2819-1.2819c.3401-.6213.6095-1.2721.8081-1.9505h1.8128c.4345 0 .7865-.3519.7865-.7864v-3.9697c0-.4345-.352-.7865-.7865-.7865h-1.8128c-.1966-.67433-.468-1.32515-.8081-1.95039l1.2819-1.28195c.3068-.30673.3068-.80418 0-1.11283l-2.8076-2.80767c-.295-.29492-.818-.29492-1.1129 0l-1.2819 1.28195c-.6213-.34014-1.2741-.60949-1.9504-.8081v-1.81282c0-.43453-.352-.786469-.7865-.786469h-3.9697c-.4345 0-.78645.351939-.78645.786469v1.81282c-.67638.19858-1.32911.46794-1.95043.81007l-1.28195-1.28195c-.29492-.29493-.81792-.29493-1.11283 0l-2.8057 2.80766c-.30672.30673-.30672.80418 0 1.11283l1.28195 1.28195c-.34014.62132-.60949 1.27209-.80811 1.95043h-1.812816c-.434521 0-.786464.3519-.786464.7865v3.9696c0 .4346.351943.7865.786464.7865h1.812816zm-1.02635-3.9716h1.63192c.26347 0 .51119-.1337.6567-.3519.05309-.0807.09241-.1691.11404-.2635.20841-.926.57214-1.80492 1.07155-2.59335.12584-.18875.16516-.42272.10618-.64095-.03539-.13566-.10814-.25757-.20448-.35587l-1.15416-1.15612 1.69484-1.69484 1.15612 1.15416c.05898.05898.12976.1101.20448.14746.2497.12583.54657.10617.77665-.03932.80418-.51119 1.68306-.87299 2.62683-1.0853.35-.08651.5997-.40503.5997-.76678v-1.63192h2.3967v1.63388c0 .37947.2713.69798.6292.77071.9221.20841 1.7951.57018 2.5973 1.07941.232.14549.5269.16319.7766.03932.0748-.03736.1455-.08651.2045-.14746l1.1542-1.15416 1.6948 1.69484-1.1541 1.15612c-.0983.0983-.1691.22021-.2045.35587-.057.21234-.0216.44042.0963.62525.5093.80418.873 1.68305 1.0814 2.60905.0197.0944.059.1849.114.2635.1455.2183.3952.352.6567.352h1.632v2.3967h-1.632c-.2634 0-.5112.1337-.6567.3519-.0531.0807-.0924.1691-.114.2635-.2084.926-.5721 1.8049-1.0814 2.6071-.0137.0236-.0275.0453-.0393.0689-.1553.3106-.0845.6783.1475.9123l1.1541 1.1561-1.6948 1.6948-1.1542-1.1541c-.059-.059-.1297-.1101-.2045-.1475-.2497-.1239-.5446-.1062-.7766.0393-.8042.5092-1.6831.873-2.6268 1.0853-.35.0865-.5997.405-.5997.7668v1.6319h-2.3967v-1.6339c0-.3794-.2714-.6979-.6292-.7707-.92409-.2084-1.79707-.5721-2.59733-1.0794-.23004-.1455-.52695-.1632-.77665-.0393-.07472.0374-.1455.0865-.20448.1475l-1.15612 1.1541-1.69483-1.6948 1.15415-1.1561c.23397-.234.30279-.6017.14746-.9123-.0118-.0236-.02556-.0472-.03932-.0689-.50923-.8041-.87299-1.681-1.08137-2.6071-.01966-.0944-.05899-.1848-.11404-.2635-.14549-.2182-.3952-.3519-.6567-.3519h-1.63192z"
                                    />
                                    <path
                                        d="m11.9261 17.9527c.0275.002.057.004.1062.004h.0806c1.3449-.0158 2.6052-.5545 3.547-1.514.9339-.9496 1.449-2.2099 1.449-3.543 0-2.79-2.2689-5.06108-5.061-5.06108-2.79003 0-5.06108 2.26898-5.06108 5.06108 0 1.335.51511 2.5933 1.44709 3.543.94376.9615 2.20409 1.5002 3.48999 1.512zm.1219-8.54312c1.9229 0 3.488 1.56512 3.488 3.48802 0 .9201-.3539 1.7872-.9988 2.442-.6489.6625-1.5179 1.0322-2.444 1.044-.0098-.002-.0413 0-.0649 0h-.0255c-.9261-.0118-1.7932-.3815-2.44398-1.044-.64291-.6548-.99686-1.5218-.99686-2.442 0-1.9229 1.56504-3.48802 3.48794-3.48802z"
                                    />
                                </g>
                            </svg>
                            <span class="text-xl font-semibold">{{ __('message.service.bottom.service1') }}</span>
                        </div>
                        <p class="text-xl font-medium">
                            {{ __('message.service.bottom.text1') }}
                        </p>
                    </div>
                    <div class="js-up flex max-w-md flex-col gap-2 rounded-2xl bg-blue-800 p-8 text-white shadow-2xl">
                        <div class="mb-2 flex items-center gap-2">
                            <svg
                                class="h-12 w-12"
                                fill="none"
                                height="51"
                                viewBox="0 0 42 51"
                                width="42"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="m11.9037 23.4978c-.4681 0-.8478-.3817-.8478-.8523 0-.4705.3797-.8523.8478-.8523h1.0906c.4681 0 .8478.3818.8478.8523 0 .4706-.3797.8523-.8478.8523zm-5.25685 0c-.46805 0-.8478-.3817-.8478-.8523 0-.4705.37975-.8523.8478-.8523h1.09067c.46806 0 .8478.3818.8478.8523 0 .4706-.37974.8523-.8478.8523zm2.32485 1.2408c0-.4706.37974-.8523.8478-.8523.4681 0 .8478.3817.8478.8523v1.0964c0 .4706-.3797.8523-.8478.8523-.46806 0-.8478-.3817-.8478-.8523zm0-5.2848c0-.4705.37974-.8523.8478-.8523.4681 0 .8478.3818.8478.8523v1.0965c0 .4705-.3797.8523-.8478.8523-.46806 0-.8478-.3818-.8478-.8523zm26.5842 26.5015c-.468 0-.8478-.3817-.8478-.8523 0-.4705.3798-.8523.8478-.8523h1.0907c.468 0 .8478.3818.8478.8523 0 .4706-.3798.8523-.8478.8523zm-5.2568 0c-.4681 0-.8478-.3817-.8478-.8523 0-.4705.3797-.8523.8478-.8523h1.0907c.468 0 .8478.3818.8478.8523 0 .4706-.3798.8523-.8478.8523zm2.3248 1.2407c0-.4705.3798-.8523.8478-.8523.4681 0 .8478.3818.8478.8523v1.0965c0 .4705-.3797.8523-.8478.8523-.468 0-.8478-.3818-.8478-.8523zm0-5.2847c0-.4705.3798-.8523.8478-.8523.4681 0 .8478.3818.8478.8523v1.0965c0 .4705-.3797.8523-.8478.8523-.468 0-.8478-.3818-.8478-.8523zm-24.65007-4.5522c.43715-.1643.92507.0577 1.08847.4971.16337.4395-.0574.93-.49455 1.0943-1.13922.4328-2.2321.7147-3.3647.8789-.86323.1265-1.75303.182-2.70234.1842l.09935.2708c.41286 1.0854.9648 2.1197 1.64259 3.0741 2.1416-.02 4.22798-.5016 6.13355-1.3828 2.029-.9388 3.8482-2.3327 5.301-4.1039.2958-.3618.8301-.4151 1.19-.1154.3599.2974.4129.8345.1148 1.1963-1.6205 1.9754-3.6429 3.5268-5.895 4.5701-1.71774.7945-3.57228 1.2961-5.48424 1.4693.18325.1886.37312.3729.5674.5526 1.1039 1.0121 2.34689 1.8223 3.67822 2.4171 1.05092-.3618 1.98262-.7546 2.85032-1.2251.8985-.4883 1.7287-1.0654 2.5522-1.7801.3533-.3063.8875-.2686 1.1922.0866.3047.3551.2672.8922-.0861 1.1985-.9228.8013-1.8523 1.4472-2.8569 1.9932-.3709.2019-.7506.3884-1.1436.5659 1.7839.4107 3.6539.4639 5.5019.1288l.7352-.5638c.3091-.2464.5983-.4883.8632-.7191.3533-.3063.8876-.2686 1.1923.0865.3046.3552.2671.8923-.0861 1.1986-.3136.273-.6205.5305-.9163.7658-.3135.2508-.6314.4927-.9472.7213-.0971.071-.2119.1221-.3377.1465-2.3889.4661-4.8219.3507-7.1069-.293-2.28509-.6436-4.42223-1.8178-6.22172-3.4691-1.80157-1.6513-3.16382-3.6845-4.01383-5.9105-.843391-2.215-1.183415-4.6277-.9449571-7.0582.0287011-.4661.4261101-.8212.8897391-.7967 3.508198.1975 6.972318-.3641 10.173568-1.6025 3.1661-1.2252 6.0873-3.1207 8.5442-5.6.6093-1.0098 1.4836-1.7689 2.4772-2.2328.6292-.2952 1.3114-.4728 2.0047-.5238l11.8381-20.61267c.4416-.77463 1.1569-1.29175 1.9517-1.507044.7926-.213076 1.6691-.122073 2.4374.321834.7706.44613 1.2872 1.16527 1.4991 1.96427.212.79679.1236 1.68017-.3201 2.45259l-11.8404 20.61722c.3687.7657.5652 1.6113.5718 2.4658.0066.9345-.212 1.8822-.6756 2.7567-.2097 1.9221-.6248 3.8021-1.2254 5.6044-.627 1.8844-1.4571 3.6866-2.4683 5.3712-.2406.4018-.7617.5305-1.1613.2886-.3996-.242-.5277-.7658-.287-1.1675.9515-1.5848 1.7287-3.2738 2.3138-5.0317.5232-1.5714.8941-3.2028 1.1039-4.8719l-7.4115-4.3014c-2.5346 2.4525-5.5173 4.3436-8.7493 5.5932-3.17045 1.2274-6.57951 1.8334-10.03684 1.749-.04858 1.1986.05961 2.3904.3113 3.5424 1.05093.0177 2.01573-.0311 2.95187-.1665 1.009-.1465 1.98678-.3998 3.0068-.7882zm15.64707 8.423c-.2959.3618-.8302.415-1.1901.1154-.3599-.2974-.4128-.8346-.1148-1.1964l.1038-.1265c.2958-.3618.8301-.415 1.19-.1154.3599.2974.4129.8346.1148 1.1964zm13.8429-42.46854-11.4499 19.93364c.5056.1332.9692.3263 1.424.5882.4284.2486.8147.546 1.1525.8812l.0619.0621 11.4498-19.9359c.2075-.36178.2495-.78127.1479-1.16083-.1015-.37954-.3466-.72133-.7087-.93219-.3599-.20864-.7771-.25081-1.1547-.14871-.3775.1021-.7175.34846-.9273.71025zm-9.4095 23.44744-.0331-.0555c-.1678-.2797-.3754-.5416-.6116-.7769-.2384-.2352-.5122-.4461-.8147-.6215-.404-.2352-.8456-.3973-1.3048-.4794-.8257-.1487-1.6735-.0311-2.4197.3174-.4791.2242-.9185.546-1.2871.9566l6.8355 3.9664c.1347-.4195.1987-.8524.1965-1.2763-.0066-.7125-.1987-1.4161-.5586-2.0308z"
                                    fill="#f7f9fb"
                                />
                            </svg>
                            <span class="text-xl font-semibold">{{ __('message.service.bottom.service2') }}</span>
                        </div>
                        <p class="text-xl font-medium">
                            {{ __('message.service.bottom.text2') }}
                        </p>
                    </div>
                    <div
                        class="js-down flex max-w-md flex-col gap-2 rounded-2xl bg-white p-8 shadow-2xl md:justify-self-end"
                    >
                        <div class="mb-2 flex items-center gap-2 fill-blue-700 stroke-blue-700 text-blue-700">
                            <x-learning-svg class="h-12 w-12" />
                            <span class="text-xl font-semibold">{{ __('message.service.bottom.service3') }}</span>
                        </div>
                        <p class="text-xl font-medium">
                            {{ __('message.service.bottom.text3') }}
                        </p>
                    </div>
                    <div class="js-up flex max-w-md flex-col gap-2 rounded-2xl bg-blue-800 p-8 text-white shadow-2xl">
                        <div class="mb-2 flex items-center gap-2">
                            <svg
                                class="h-12 w-12"
                                fill="none"
                                height="42"
                                viewBox="0 0 39 42"
                                width="39"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    clip-rule="evenodd"
                                    d="m27.178 34.8733-.3576.6144 7.0346 4.0269c2.9528 1.6924 5.5321-2.7405 2.578-4.4322l.0006-.001-7.0324-4.0271zm-17.78586-14.2244c-.3473 0-.62885-.2793-.62885-.6238s.28155-.6237.62885-.6237h6.06396c.3473 0 .6289.2792.6289.6237s-.2816.6238-.6289.6238zm3.03196-16.82589c2.1714 0 3.9318 1.7461 3.9318 3.89977 0 2.15366-1.7604 3.89972-3.9318 3.89972-2.1713 0-3.93176-1.74606-3.93176-3.89972 0-2.15367 1.76056-3.89977 3.93176-3.89977zm1.891 2.0242c-1.0443-1.03567-2.7377-1.03576-3.7819 0-1.04421 1.03566-1.04421 2.71538 0 3.75113 1.0442 1.03566 2.7376 1.03566 3.7819 0 1.0443-1.03575 1.0442-2.71538 0-3.75113zm3.5677-3.46217c2.9005 2.87693 3.0065 7.53212.2796 10.53616 5.7121 2.9562 8.2364 9.7921 5.712 15.72l4.1139 2.3559.6406-1.1006c.1723-.2973.5551-.3999.8549-.229l7.5773 4.3392.0006-.0011c2.7168 1.5557 2.3348 4.821.3516 6.3636-1.0892.8472-2.6063 1.1277-4.1871.2223l-7.5731-4.3381c-.2998-.1709-.4032-.5505-.2309-.8479l.3573-.6137-4.3259-2.4772c-2.2697 2.3812-5.4777 3.8564-9.0295 3.8565v.0024c-6.86151 0-12.4241-5.5173-12.4241-12.3229 0-4.6367 2.61433-8.8222 6.68591-10.9294-2.7269-3.00404-2.62098-7.65923.27966-10.53625 3.00333-2.978776 7.91393-2.978776 10.91723.00009zm-.6435 11.46666-1.437 1.4253c3.525 1.3675 5.9016 4.7517 5.9016 8.5736 0 5.0832-4.1549 9.2042-9.2798 9.2042v-.0024c-5.12946 0-9.27973-4.1199-9.27973-9.2018 0-3.8219 2.37672-7.206 5.90163-8.5735l-1.43702-1.4253c-3.84968 1.8271-6.35127 5.684-6.35127 9.9989 0 6.1168 4.99923 11.0753 11.16639 11.0753v.0024c6.1627 0 11.1664-4.9595 11.1664-11.0778 0-4.3149-2.5016-8.1719-6.3512-9.9989zm-2.4208 2.401-1.9498 1.9339c-.2455.2435-.6436.2435-.8892 0l-1.9498-1.9339c-2.30007.7122-4.15511 2.4235-5.04781 4.6187 1.65173.2795 2.68099 1.6025 3.49653 3.0092.17051.2942.07106.6689-.22145.8423l.00036.0006c-1.09133.6509-2.30413 1.0698-3.57011 1.2371.32854 1.1879.92775 2.2648 1.72774 3.1613.71258-.5675 1.7679-.6847 2.89741-.585.38765.0342.32027-1.3814.31596-1.6928-.01195-.8685-.02372-1.7142.38567-2.2413.545-.7017 1.5095-.7111 3.3792.7175.9391.7175 1.7368 1.2558 2.237 1.2275.3625-.0205.6318-.5426.7776-1.9083.0017-.0159.0038-.0318.0067-.0473.1645-1.1632.7134-1.969 1.496-2.5574.5776-.4343 1.2746-.7367 2.0299-.9745-.8609-2.2845-2.7542-4.0745-5.1219-4.8076zm2.1751-12.9857c-2.5122-2.491641-6.6267-2.49173-9.13892 0-2.5121 2.49164-2.5121 6.57273 0 9.0644l4.56942 4.5322 4.5695-4.5322c2.5121-2.49167 2.5121-6.57276 0-9.0644zm10.3686 28.8056-.9566 1.6435-3.8401-2.199.9567-1.6435zm-7.0763-9.8151c-.6179.1966-1.1767.4391-1.6188.7715-.5289.3977-.8999.9445-1.0112 1.7366-.2472 2.1305-.8995 2.965-1.9568 3.025-.8946.0507-1.921-.6063-3.0721-1.4858-1.117-.8535-1.5337-1.0531-1.6204-.9416-.1429.1841-.1342.8168-.1252 1.4666.0048.3528.0098.7097-.0104 1.0287-.0701 1.1104-.3953 1.979-1.60804 1.9233-.0177.0001-.03558-.0006-.05354-.002-.77368-.0644-1.4505-.0234-1.87381.2226 1.38564 1.1295 3.15799 1.8076 5.08859 1.8076v-.0024c5.0826-.0002 8.8685-4.6227 7.8617-9.5501zm-15.8345 2.4796c.89621-.1095 1.80482-.3805 2.60976-.7793-.59679-.9181-1.33902-1.7603-2.45973-1.8801-.19773.8642-.24975 1.7671-.15003 2.6594z"
                                    fill="#f7f9fb"
                                    fill-rule="evenodd"
                                />
                            </svg>
                            <span class="text-xl font-semibold">{{ __('message.service.bottom.service4') }}</span>
                        </div>
                        <p class="text-xl font-medium">
                            {{ __('message.service.bottom.text4') }}
                        </p>
                    </div>
                    <div
                        class="js-down flex max-w-md flex-col gap-2 rounded-2xl bg-white p-8 shadow-2xl md:justify-self-end"
                    >
                        <div class="mb-2 flex items-center gap-2 fill-blue-700 stroke-blue-700 text-blue-700">
                            <svg class="h-12 w-12" viewBox="8 8 84 86" xmlns="http://www.w3.org/2000/svg">
                                <path d="m78 20h-28c-1.65 0-3 1.35-3 3s1.35 3 3 3h28c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m50 38h-28c-1.65 0-3 1.35-3 3s1.35 3 3 3h28c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m50 74h-28c-1.65 0-3 1.35-3 3s1.35 3 3 3h28c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m78 56h-28c-1.65 0-3 1.35-3 3s1.35 3 3 3h28c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m78 74h-10c-1.65 0-3 1.35-3 3s1.35 3 3 3h10c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m32 56h-10c-1.65 0-3 1.35-3 3s1.35 3 3 3h10c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m32 20h-10c-1.65 0-3 1.35-3 3s1.35 3 3 3h10c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <path d="m78 38h-10c-1.65 0-3 1.35-3 3s1.35 3 3 3h10c1.65 0 3-1.35 3-3s-1.35-3-3-3z" />
                                <g
                                    font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"
                                    font-size="5"
                                    font-weight="bold"
                                ></g>
                            </svg>
                            <span class="text-xl font-semibold">{{ __('message.service.bottom.service5') }}</span>
                        </div>
                        <p class="text-xl font-medium">
                            {{ __('message.service.bottom.text5') }}
                        </p>
                    </div>
                    <div class="js-up flex max-w-md flex-col gap-2 rounded-2xl bg-blue-800 p-8 text-white shadow-2xl">
                        <div class="mb-2 flex items-center gap-2">
                            <svg
                                class="h-12 w-12"
                                fill="none"
                                height="46"
                                viewBox="0 0 57 46"
                                width="57"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <g fill="#FFF">
                                    <path
                                        d="m42.2581 16.5461c-1.9084-7.89626-5.6432-16.395221-9.3327-16.395221-.1825 0-.365.021664-.5403.06368-.8042.194322-1.4443.806831-1.9143 1.801421-.0499.03939-.1044.06958-.1458.1221-2.0653 2.64042-9.4614 11.36132-17.8993 13.40032l-6.44673 1.6636c-.0256.0059-.05055.0138-.07549.0216-1.97539.543-3.64289 1.7857-4.71625 3.5202-1.1226073 1.8158-1.463984 3.9612-.960453 6.043.50353 2.0811 1.786973 3.8346 3.614653 4.9368 1.81914 1.0977 3.97047 1.424 6.05615.9204l1.33662-.323h.0013.0007l1.6077-.3886 5.3347 10.9615c.6946 1.4259 2.127 2.257 3.6166 2.257.5889 0 1.187-.1294 1.7509-.4038 1.9898-.9696 2.8209-3.377 1.8519-5.3675l-4.3131-8.8626c7.7013-.065 15.5661 3.5142 17.3636 4.386.6433.4793 1.2952.7451 1.9458.7451.1825 0 .365-.0216.5403-.0643 1.703-.4116 2.6818-2.6759 2.8308-6.5485.1339-3.4775-.4011-7.9127-1.5073-12.4892zm-32.76229 14.439c-1.64452.3985-3.34024.1411-4.77337-.7235-1.43378-.8646-2.44215-2.2419-2.8367-3.8766-.39521-1.6347-.12802-3.3205.75365-4.7451.86854-1.4056 2.23602-2.4028 3.85493-2.8105l.56852-.1378 2.94176 12.17zm13.30319 12.2272c-1.1436.5567-2.5295.0787-3.0855-1.0655l-1.936-3.9777 4.2074-1.9006 1.8783 3.8589c.5573 1.1436.0794 2.5275-1.0642 3.0849zm-1.5612-8.4793-4.2074 1.9005-2.4875-5.1114 1.9761-.478c.8869-.214 1.7942-.3551 2.7106-.4378zm-5.1206-5.3478-4.4537 1.076-2.9417-12.1708 4.1064-.9945c7.0953-1.7148 13.4036-7.79196 16.797-11.62063-.0302.3486-.0551.70836-.0702 1.08781-.0703 1.81061.0453 3.88452.3249 6.09952.004.0315-.0039.0617.0033.0938.0026.0105.0105.0178.0131.0283.2574 2.0029.646 4.1182 1.166 6.2682.5094 2.108 1.1501 4.258 1.8841 6.2787.0039.04-.0052.0781.0046.1181.0282.1162.0834.2154.151.3053.8423 2.257 1.8027 4.3276 2.8282 5.9741-4.5902-1.8205-12.6736-4.2705-19.813-2.5439zm15.5878-15.7696c1.2861.3538 2.8124 2.1093 3.459 4.7819.6414 2.6561.0979 4.9007-.8751 5.8158-.558-1.6058-1.0911-3.3894-1.5677-5.3622-.4326-1.7896-.77-3.5497-1.0162-5.2355zm10.3555 15.354c-.1241 3.1978-.8561 4.7931-1.527 4.9552-.0446.0112-.0906.0158-.1392.0158-.151 0-.319-.0466-.5015-.1366-.0716-.0899-.1609-.1674-.2692-.2238-.0354-.0184-.1274-.0663-.2652-.1346-1.2349-1.0182-2.9017-3.595-4.4504-7.5562 1.9235-1.1817 2.7619-4.3907 1.915-7.8937-.8515-3.5214-3.0744-6.005-5.3432-6.1527-.1969-1.8139-.2777-3.51353-.2199-5.01493.1234-3.19778.8554-4.7924 1.5263-4.95455.0447-.01116.0906-.01576.1392-.01576 1.6458 0 5.3255 5.3734 7.6738 15.08954 1.0707 4.428 1.5893 8.6972 1.4613 12.0223z"
                                    />
                                    <path
                                        d="m48.7768 16.0195c-.3769-.0078-.7163-.2672-.8102-.6506-.1122-.4575.1681-.9197.6257-1.032l5.5762-1.3681c.457-.1129.9198.1681 1.032.6256.1123.4576-.168.9198-.6256 1.0321l-5.5763 1.3681c-.0741.0184-.149.0269-.2218.0249z"
                                    />
                                    <path
                                        d="m44.5515 6.69336c-.2285-.00984-.4524-.1116-.6125-.29936-.306-.3591-.262-.89808.0971-1.20335l5.0281-4.276398c.3584-.304613.8981-.261941 1.2027.097158.3059.3591.2619.89809-.0972 1.20335l-5.028 4.2764c-.1707.14574-.3821.21139-.5902.2022z"
                                    />
                                    <path
                                        d="m56.2831 27.7598c-.1123.019-.2304.0164-.3493-.0132l-6.1815-1.527c-.4582-.1129-.7366-.5757-.6237-1.0326.1116-.4576.5731-.7393 1.0327-.6237l6.1815 1.527c.4583.1129.7366.5757.6237 1.0327-.0827.3394-.3591.581-.6834.6368z"
                                    />
                                </g>
                            </svg>
                            <span class="text-xl font-semibold">{{ __('message.service.bottom.service6') }}</span>
                        </div>
                        <p class="text-xl font-medium">
                            {{ __('message.service.bottom.text6') }}
                        </p>
                    </div>
                </div>
            </section>
            <x-section-contact />
        </main>
        <x-footer />
    </x-body>
</html>
