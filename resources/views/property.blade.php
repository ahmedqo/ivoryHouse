<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>{{ $data->title }}</title>
</head>

<body class="bg-gray-950">
    <header class="relative bg-gray-900 z-[1]">
        <div id="slider-main" dir="ltr" class="absolute inset-0 z-[-1]">
            <ul>
                <li>
                    <img src="{{ asset('img/bg-1.png') }}"class="w-full h-full object-cover" />
                </li>
                <li>
                    <img src="{{ asset('img/bg-2.png') }}"class="w-full h-full object-cover" />
                </li>
                <li>
                    <img src="{{ asset('img/bg-3.png') }}"class="w-full h-full object-cover" />
                </li>
                <li>
                    <img src="{{ asset('img/bg-4.png') }}"class="w-full h-full object-cover" />
                </li>
                <li>
                    <img src="{{ asset('img/bg-5.png') }}"class="w-full h-full object-cover" />
                </li>
            </ul>
        </div>
        <div class="z-[-1] absolute inset-0 bg-gray-950 bg-opacity-50"></div>
        <nav class="w-full bg-gray-950">
            <ul class="container mx-auto p-4 flex gap-4 items-center">
                <li>
                    <a href="{{ route('views.home.show') }}">
                        <img src="{{ asset('img/logo.png') }}" class="w-[60px]" />
                    </a>
                </li>
                <li>
                    <a href="{{ route('views.home.show') }}" class="font-black text-gray-50 text-md">
                        الرئيسية
                    </a>
                </li>
                <li>
                    <a href="{{ route('views.home.show') }}#video" class="font-black text-gray-50 text-md">
                        من نحن
                    </a>
                </li>
                <li>
                    <a href="{{ route('views.home.show') }}#contact" class="font-black text-gray-50 text-md">
                        تواصل معنا
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mx-auto p-4 pb-0 container">
            <div class="w-full lg:w-10/12 mx-auto bg-gray-950 p-4 lg:p-8 relative top-8 rounded-lg lg:rounded-2xl">
                <h1 class="text-gray-50 text-2xl lg:text-3xl font-black mb-6">إحجز فلتك الان</h1>
                <form action="{{ route('views.home.show') }}"
                    class="w-full flex flex-col lg:flex-row lg:flex-wrap gap-4">
                    <div class="flex-1 relative hidden">
                        <svg class="pointer-events-none w-6 h-6 text-gray-950 absolute top-1/2 -translate-y-1/2 left-4"
                            fill="currentColor" viewBox="0 96 960 960">
                            <path
                                d="M479.983 1020Q335 1020 244 977.575T153 865q0-35 31-68.5t86-55.5l42 84q-19 5-39 16.5T241 864q19.29 26.8 92.145 45.4Q406 928 481.2 928t147.533-18.6Q701.067 890.8 721 864q-12-10-32.5-22T651 825l41-83q56 22 86 55t30 68q0 70.15-91.517 112.575Q624.965 1020 479.983 1020ZM480 882q-17.586 0-30.793-9T432 847q-23-67-60-116.5T301 634q-37.861-48.058-63.93-99.529Q211 483 211 413q0-113.387 77.024-192.693Q365.047 141 480.024 141 595 141 673 220.307 751 299.613 751 413q0 70-27.5 121.5T661 634q-37 47-73.5 96.5T529 847q-5 17-18.207 26T480 882Zm.25-408Q505 474 524 456t19-42.75q0-24.75-19.25-44t-44-19.25q-24.75 0-43.25 19.25t-18.5 44Q418 438 436.75 456t43.5 18Z" />
                        </svg>
                        <input type="text" placeholder="المكان" name="address"
                            class="flex-1 appearance-none bg-gray-50 text-gray-950 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4 pl-12" />
                    </div>
                    <div class="flex-1 rounded-md lg:rounded-xl bg-gray-50 text-gray-950">
                        <input x-date type="date" placeholder="تاريخ الوصول" name="startDate"
                            class="flex-1 appearance-none bg-gray-50 text-gray-950 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                    </div>
                    <div class="flex-1 rounded-md lg:rounded-xl bg-gray-50 text-gray-950">
                        <input x-date type="date" placeholder="تاريخ المغادرة" name="endDate"
                            class="flex-1 appearance-none bg-gray-50 text-gray-950 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                    </div>
                    <button type="submit"
                        class="appearance-none lg:w-max h-[48px] text-lg flex items-center justify-center rounded-md lg:rounded-xl font-semibold py-2 px-10 text-gray-950 outline-none bg-yellow-600 hover:bg-yellow-400 focus:bg-yellow-400">
                        <span>بحث</span>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <section class="grid grid-rows-1 grid-cols-1 lg:grid-cols-12 relative z-[0]">
            <div
                class="p-4 lg:p-6 flex flex-col gap-4 lg:gap-6 lg:col-span-7 rounded-t-lg lg:rounded-l-2xl lg:rounded-t-none bg-gray-950 order-2 lg:order-1 z-[2]">
                <div class="w-full flex flex-wrap items-center gap-2 lg:mt-2">
                    <h1 class="flex-1 text-xl lg:text-3xl font-black text-gray-50">{{ $data->title }}</h1>
                    <span class="w-max block text-lg lg:text-2xl font-black text-gray-50">{{ $data->price }}
                        دينار</span>
                    <p class="w-full text-md lg:text-lg text-gray-50 flex gap-1">
                        <svg class="pointer-events-none w-4 lg:w-6 h-4 lg:h-6 text-yellow-600 mt-1" fill="currentColor"
                            viewBox="0 96 960 960">
                            <path
                                d="m657 586 84 75v92H526v235l-46 45-45-45V753H220v-92l78-75V271h-50v-91h459v91h-50v315Z" />
                        </svg>
                        <span>{{ $data->address }}, {{ $data->city }}, {{ $data->state }},
                            {{ $data->zipcode }}</span>
                    </p>
                </div>
                <div class="w-full px-4">
                    <div class="relative">
                        <div id="slider-container" dir="ltr"
                            class="w-full rounded-lg lg:rounded-2xl overflow-hidden aspect-video bg-gray-900">
                            <ul>
                                @foreach ($images as $image)
                                    <li
                                        class="relative after:absolute after:content-[''] after:inset-0 after:block after:bg-gray-900 after:bg-opacity-70">
                                        <img src="{{ asset('storage/files/' . $image->name) }}"
                                            class="absolute top-0 left-0 w-full h-full object-cover z-[0]" />
                                        <img src="{{ asset('storage/files/' . $image->name) }}"
                                            class="w-full h-full object-contain relative z-[1]" />
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <button shadow id="arrow-left" type="button"
                            class="flex items-center justify-center absolute -left-5 lg:-left-6 top-1/2 -translate-y-1/2 text-gray-950 w-10 h-10 lg:w-12 lg:h-12 bg-yellow-600 hover:bg-yellow-400 focus:bg-yellow-400 rounded-full z-[2]">
                            <svg class="block h-8 w-8 lg:h-10 lg:w-10 pointer-events-none" fill="currentcolor"
                                viewBox="0 96 960 960">
                                <path
                                    d="M528 805 331 607q-7-6-10.5-14t-3.5-18q0-9 3.5-17.5T331 543l198-199q13-12 32-12t33 12q13 13 12.5 33T593 410L428 575l166 166q13 13 13 32t-13 32q-14 13-33.5 13T528 805Z" />
                            </svg>
                        </button>
                        <button shadow id="arrow-right" type="button"
                            class="flex items-center justify-center absolute -right-5 lg:-right-6 top-1/2 -translate-y-1/2 text-gray-950 w-10 h-10 lg:w-12 lg:h-12 bg-yellow-600 hover:bg-yellow-400 focus:bg-yellow-400 rounded-full z-[2]">
                            <svg class="block h-8 w-8 lg:h-10 lg:w-10 pointer-events-none" fill="currentcolor"
                                viewBox="0 96 960 960">
                                <path
                                    d="M344 805q-14-15-14-33.5t14-31.5l164-165-165-166q-14-12-13.5-32t14.5-33q13-14 31.5-13.5T407 344l199 199q6 6 10 14.5t4 17.5q0 10-4 18t-10 14L408 805q-13 13-32 12.5T344 805Z" />
                            </svg>
                        </button>
                    </div>
                    <div id="slider-buttons" dir="ltr"
                        class="relative mx-auto overflow-hidden z-[2] -mt-6 lg:-mt-20 h-[60px] lg:h-[160px]">
                        <ul>
                            @foreach ($images as $image)
                                <li class="aspect-square">
                                    <img src="{{ asset('storage/files/' . $image->name) }}"
                                        class="w-full h-full object-cover border-4 bg-gray-50 border-yellow-600 rounded-lg lg:rounded-2xl" />
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <ul class="w-full flex justify-center gap-4 lg:gap-10">
                    <li title="المساحة" class="w-max flex items-center flex-row-reverse gap-2">
                        <h3 class="text-md lg:text-lg font-semibold text-gray-50 text-center">{{ $data->area }}</h3>
                        <svg class="block mx-auto h-6 w-6 lg:h-8 lg:w-8 pointer-events-none text-gray-50"
                            fill="currentcolor" viewBox="0 96 960 960">
                            <path
                                d="M679 715V377H341v-91h338q37.175 0 64.088 26.912Q770 339.825 770 377v338h-91Zm45.509 305q-20.141 0-32.825-13.33Q679 993.35 679 974V866H281q-36.413 0-63.706-26.912Q190 812.175 190 775V377H82q-19.775 0-32.388-13.358Q37 350.284 37 331.842 37 312 49.612 299 62.225 286 82 286h108V178q0-19.775 13.358-32.388Q216.716 133 235.158 133 255 133 268 145.612q13 12.613 13 32.388v597h597q20.2 0 33.1 13.375 12.9 13.376 12.9 32.116 0 20.141-12.9 32.825Q898.2 866 878 866H770v108q0 19.35-13.375 32.67-13.376 13.33-32.116 13.33Z" />
                        </svg>
                    </li>
                    <li title="الغرف" class="w-max flex items-center flex-row-reverse gap-2">
                        <h3 class="text-md lg:text-lg font-semibold text-gray-50 text-center">{{ $data->rooms }}</h3>
                        <svg class="block mx-auto h-6 w-6 lg:h-8 lg:w-8 pointer-events-none text-gray-50"
                            fill="currentcolor" viewBox="0 96 960 960">
                            <path
                                d="M104.684 891q-20.316 0-33-12.5Q59 866 59 845V615q0-27.859 9.5-53.43Q78 536 99 523.219V419.251q0-54.501 36.5-91.876Q172 290 226 290h182q21 0 39.386 9.031Q465.772 308.062 480 322q14.228-13.938 32.114-22.969Q530 290 551 290h182q53.667 0 91.333 37.375Q862 364.75 862 419.251v103.968Q882 536 892 561.57q10 25.571 10 53.43v230q0 21-13.088 33.5-13.087 12.5-32.816 12.5-19.728 0-32.912-12.5Q810 866 810 845v-34H150v34q0 21-13.2 33.5T104.684 891ZM508 518h262v-99.667q0-15.991-10.575-26.162T733 382H539.48q-14.48 0-22.98 10.808-8.5 10.809-8.5 25.525V518Zm-318 0h262v-99.667q0-14.716-8.5-25.525Q435 382 421 382H226.48q-15.755 0-26.117 10.671Q190 403.342 190 418.333V518Z" />
                        </svg>
                    </li>
                    @if ($data->kitchen)
                        <li title="المطبخ" class="w-max flex items-center flex-row-reverse gap-2">
                            <svg class="block mx-auto h-6 w-6 lg:h-8 lg:w-8 pointer-events-none text-gray-50"
                                fill="currentcolor" viewBox="0 96 960 960">
                                <path
                                    d="M171 931q-19.875 0-32.938-13.062Q125 904.875 125 885V553H78q-15.875 0-27.938-11.662Q38 529.677 38 513.351t12.063-28.338Q62.124 473 78 473h132q-34.4 0-58.2-24.088Q128 424.825 128 391V260q0-20.3 12.575-33.15Q153.15 214 174 214h167q20.3 0 33.15 12.85Q387 239.7 387 260v131q0 33.825-24.381 57.912Q338.237 473 304 473h359V339q0-19.725-12.452-32.362Q638.097 294 618.212 294q-12.585 0-22.399 5-9.813 5-15.213 13-8.6 12-17.1 18-8.5 6-18.5 6-26.66 0-35.83-19-9.17-19 3.727-39.833 16.967-29.133 44.004-46.15T618.264 214q53.569 0 89.653 36.167Q744 286.333 744 338v135h139q15.875 0 27.938 12.1Q923 497.201 923 514.175q0 16.125-12.062 27.475Q898.875 553 883 553h-47v332q0 19.875-13.338 32.938Q809.325 931 790 931H171Zm270-80h79V553h-79v298Z" />
                            </svg>
                        </li>
                    @endif
                    @if ($data->garage)
                        <li title="الكراج" class="w-max flex items-center flex-row-reverse gap-2">
                            <svg class="block mx-auto h-6 w-6 lg:h-8 lg:w-8 pointer-events-none text-gray-50"
                                fill="currentcolor" viewBox="0 96 960 960">
                                <path
                                    d="M138 958V444l342-257 343 257v514H671V527H289v431H138Zm231-80h222v-96H369v96Zm0-176h222v-96H369v96Z" />
                            </svg>
                        </li>
                    @endif
                    @if ($data->garden)
                        <li title="الحديقة" class="w-max flex items-center flex-row-reverse gap-2">
                            <svg class="block mx-auto h-6 w-6 lg:h-8 lg:w-8 pointer-events-none text-gray-50"
                                fill="currentcolor" viewBox="0 96 960 960">
                                <path
                                    d="M480 866q0-44.541-17.471-84.871-17.472-40.329-48.752-72.159-28.24-26.453-61.044-42.695Q319.93 650.033 283 644q-10.714 0-18.357 7.37Q257 658.74 258 669q5.925 37 21.281 70.673Q294.636 773.346 323 800q31.183 30.606 71.869 48.303Q435.554 866 480 866Zm.21-212q25.371 0 41.671-15.71 16.301-15.709 16.301-42.29v-8Q544 595 554 597t18.699 2q26.287 0 42.294-15.21Q631 568.581 631 542.565q0-20.365-9-33.608-9-13.243-22-23.1 13-4.857 22-20.498 9-15.642 9-34.831 0-25.826-16.287-41.677Q598.425 373 573.004 373q-8.51 0-18.481 2-9.97 2-15.942 9.057V376q0-25.286-16.71-41.643T479.581 318q-25.581 0-41.763 16.419-16.182 16.42-16.182 41.581v8Q416 377 406 375t-18.548-2q-26.536 0-42.494 15.87Q329 404.741 329 430.554q0 19.178 8.5 32.812Q346 477 361 486.5q-15 6.5-23.5 20.9-8.5 14.4-8.5 35.165 0 26.016 16.363 41.225Q361.727 599 387.085 599q8.571 0 19.089-2 10.519-2 15.536-8.8v7.8q0 26.643 16.564 42.321Q454.839 654 480.21 654Zm-.278-90q-33.867 0-55.4-22.618Q403 518.765 403 486.558q0-33.493 21.6-55.526Q446.201 409 480.068 409q33.867 0 55.4 21.871Q557 452.742 557 486.509q0 32.588-21.6 55.039Q513.799 564 479.932 564ZM480 866q44.6 0 84.9-17.471 40.3-17.472 72.13-49.752 26.453-27.24 42.695-60.044Q695.967 705.93 702 669q1-10.26-6.643-17.63Q687.714 644 677 644q-36.929 6.066-70.307 22.513Q573.314 682.961 546 709q-30.606 31.8-48.303 72.276Q480 821.753 480 866ZM150 997q-37.175 0-64.088-26.912Q59 943.175 59 906V246q0-37.588 26.912-64.794Q112.825 154 150 154h660q37.588 0 64.794 27.206Q902 208.412 902 246v660q0 37.175-27.206 64.088Q847.588 997 810 997H150Z" />
                            </svg>
                        </li>
                    @endif
                </ul>
                <div class="w-full flex flex-col gap-2">
                    <h3 class="text-gray-50 text-xl font-black mb-2">الوصف:</h3>
                    <p class="text-md lg:text-lg text-gray-50">
                        {!! nl2br($data->description) !!}
                    </p>
                </div>
            </div>
            <div
                class="bg-gray-50 lg:col-span-5 -mb-10 lg:mb-0 lg:-mr-10 pb-10 lg:pb-0 lg:pr-10 overflow-hidden order-1 lg:order-2 relative z-[1]">
                <div
                    class="flex lg:flex-col w-[80%] h-max lg:w-max lg:h-[80%] bottom-10 left-1/2 -translate-x-1/2 lg:translate-x-0 lg:left-0 lg:bottom-auto lg:top-1/2 lg:-translate-y-1/2 absolute">
                    <ul shadow
                        class="w-max flex lg:flex-col bg-yellow-600 gap-4 p-4 rounded-t-lg lg:rounded-r-2xl lg:rounded-tl-none">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('views.property.show', $data->slug)) }}"
                                class="flex text-gray-950">
                                <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 30 31">
                                    <path
                                        d="M3.33333 0.250977H26.6667C27.5507 0.250977 28.3986 0.602166 29.0237 1.22729C29.6488 1.85241 30 2.70025 30 3.58431V26.9176C30 27.8017 29.6488 28.6495 29.0237 29.2747C28.3986 29.8998 27.5507 30.251 26.6667 30.251H3.33333C2.44928 30.251 1.60143 29.8998 0.976311 29.2747C0.351189 28.6495 0 27.8017 0 26.9176V3.58431C0 2.70025 0.351189 1.85241 0.976311 1.22729C1.60143 0.602166 2.44928 0.250977 3.33333 0.250977ZM25 3.58431H20.8333C19.2862 3.58431 17.8025 4.19889 16.7085 5.29285C15.6146 6.38682 15 7.87055 15 9.41764V13.5843H11.6667V18.5843H15V30.251H20V18.5843H25V13.5843H20V10.251C20 9.80895 20.1756 9.38503 20.4882 9.07246C20.8007 8.7599 21.2246 8.58431 21.6667 8.58431H25V3.58431Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/?url={{ urlencode(route('views.property.show', $data->slug)) }}"
                                class="flex text-gray-950">
                                <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 30 31">
                                    <path
                                        d="M8.7 0.250977H21.3C26.1 0.250977 30 4.15098 30 8.95098V21.551C30 23.8584 29.0834 26.0712 27.4518 27.7028C25.8203 29.3344 23.6074 30.251 21.3 30.251H8.7C3.9 30.251 0 26.351 0 21.551V8.95098C0 6.64359 0.916605 4.43071 2.54817 2.79915C4.17974 1.16758 6.39262 0.250977 8.7 0.250977ZM8.4 3.25098C6.96783 3.25098 5.59432 3.8199 4.58162 4.8326C3.56893 5.8453 3 7.21881 3 8.65098V21.851C3 24.836 5.415 27.251 8.4 27.251H21.6C23.0322 27.251 24.4057 26.6821 25.4184 25.6694C26.4311 24.6567 27 23.2831 27 21.851V8.65098C27 5.66598 24.585 3.25098 21.6 3.25098H8.4ZM22.875 5.50098C23.3723 5.50098 23.8492 5.69852 24.2008 6.05015C24.5525 6.40178 24.75 6.8787 24.75 7.37598C24.75 7.87326 24.5525 8.35017 24.2008 8.7018C23.8492 9.05343 23.3723 9.25098 22.875 9.25098C22.3777 9.25098 21.9008 9.05343 21.5492 8.7018C21.1975 8.35017 21 7.87326 21 7.37598C21 6.8787 21.1975 6.40178 21.5492 6.05015C21.9008 5.69852 22.3777 5.50098 22.875 5.50098ZM15 7.75098C16.9891 7.75098 18.8968 8.54115 20.3033 9.94768C21.7098 11.3542 22.5 13.2619 22.5 15.251C22.5 17.2401 21.7098 19.1478 20.3033 20.5543C18.8968 21.9608 16.9891 22.751 15 22.751C13.0109 22.751 11.1032 21.9608 9.6967 20.5543C8.29018 19.1478 7.5 17.2401 7.5 15.251C7.5 13.2619 8.29018 11.3542 9.6967 9.94768C11.1032 8.54115 13.0109 7.75098 15 7.75098ZM15 10.751C13.8065 10.751 12.6619 11.2251 11.818 12.069C10.9741 12.9129 10.5 14.0575 10.5 15.251C10.5 16.4445 10.9741 17.589 11.818 18.433C12.6619 19.2769 13.8065 19.751 15 19.751C16.1935 19.751 17.3381 19.2769 18.182 18.433C19.0259 17.589 19.5 16.4445 19.5 15.251C19.5 14.0575 19.0259 12.9129 18.182 12.069C17.3381 11.2251 16.1935 10.751 15 10.751Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('views.property.show', $data->slug)) }}"
                                class="flex text-gray-950">
                                <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 310 310">
                                    <path
                                        d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
                                                            c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
                                                            c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
                                                            C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
                                                            c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
                                                            c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
                                                            c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
                                                            c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
                                                            c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
                                                            c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
                                                            c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
                                                            C307.394,57.037,305.009,56.486,302.973,57.388z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sharer?url={{ urlencode(route('views.property.show', $data->slug)) }}"
                                class="flex text-gray-950">
                                <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 32 32">
                                    <path
                                        d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <a shadow href="https://www.google.com/maps/search/?api=1&query={{ urlencode($data->map) }}"
                        class="flex text-gray-950 ms-auto w-max bg-yellow-600 lg:mt-auto p-4 rounded-t-lg lg:rounded-r-2xl lg:rounded-tl-none">
                        <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 96 960 960">
                            <path
                                d="M581 989q-22 5-38-8.5T527 942q0-14 10.5-26t24.5-17q25-6 48.5-16.5T656 859q15-10 31-6.5t26 13.5q16 16 15.5 38T709 936q-31 22-63 34t-65 19Zm192-185q-11-9-13-26t6-33q14-20 23.5-42.5T805 655q4-14 18.5-25.5T853 618q22 0 35 15.5t9 35.5q-7 36-21 69t-33 61q-10 19-31.5 21T773 804Zm79-270q-15 0-29-11t-19-27q-6-25-15-46.5T766 406q-7-16-4.5-33t14.5-28q16-16 35.5-13.5T843 351q18 32 31 63.5t22 66.5q5 21-8.5 37T852 534ZM389 989q-141-29-233.5-144T63 576q0-149 92-263.5T389 165q21-5 37 8.5t16 36.5q0 14-11 27t-26 18q-109 27-179.5 117.5T155 576q0 115 70.5 204T405 896q14 6 25.5 19.5T442 943q0 23-17 38t-36 8Zm267-695q-22-11-44.5-21.5T567 256q-15-5-26-19t-11-29q0-23 15-36t35-8q33 8 66.5 20.5T710 217q18 10 19.5 32T715 287q-11 11-27.5 13t-31.5-6ZM485 789q-9 0-17.5-2.5T453 778q-74-68-111-126t-37-110q0-82 54.5-132T485 360q70 0 123.5 50T662 542q0 52-35.5 110T515 778q-6 6-13.5 8.5T485 789Zm0-208q20 0 34-14t14-36q0-20-14-34.5T485 482q-22 0-36 14.5T435 531q0 22 14 36t36 14Z" />
                        </svg>
                    </a>
                </div>
                <div id="map"
                    class="w-full h-full aspect-video lg:aspect-auto overflow-hidden flex items-center justify-center">
                    <iframe
                        src="https://maps.google.com/maps?hl=ar&amp;q={{ urlencode($data->map) }}&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        loading="lazy" width="200%" height="200%"></iframe>
                </div>
            </div>
        </section>
        <section class="mt-10 mb-14">
            <div class="container mx-auto p-4">
                <h2 class="text-gray-50 text-3xl lg:text-4xl font-black mb-10 lg:mb-16 text-center">إحجز الآن</h2>
                <form
                    onsubmit="return validateForm(this, ['name', 'nationality', 'email', 'phone', 'startDate', 'endDate', 'socialNumber', 'address'])"action="{{ route('actions.reservations.create', $data->id) }}"
                    method="POST"
                    class="relative w-full flex flex-col gap-4 lg:gap-8 border-2 border-yellow-600 rounded-lg lg:rounded-2xl p-4 pb-12 lg:p-8 lg:pb-16">
                    @csrf
                    <h3 class="text-gray-50 text-xl lg:text-2xl font-black mb-2">معلومات الحجز</h3>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="name"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">الاسم
                                الكامل</label>
                            <input type="text" id="name" name="name"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="nationality"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">الجنسية</label>
                            <input type="text" id="nationality" name="nationality"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="phone"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">الهاتف</label>
                            <input type="tel" id="phone" name="phone"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="email"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">البريد
                                الإلكتروني</label>
                            <input type="email" id="email" name="email"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="startDate"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">موعد
                                الدخول</label>
                            <div class="flex-1 rounded-md lg:rounded-xl bg-[#4c4643] text-gray-50">
                                <input x-date x-remove="{{ $data->dates }}" type="date" id="startDate"
                                    name="startDate"
                                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                            </div>
                        </div>
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="endDate"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">موعد
                                الخروج</label>
                            <div class="flex-1 rounded-md lg:rounded-xl bg-[#4c4643] text-gray-50">
                                <input x-date x-remove="{{ $data->dates }}" type="date" id="endDate"
                                    name="endDate"
                                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="socialNumber"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">الرقم
                                المدني</label>
                            <input type="text" id="socialNumber" name="socialNumber"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="address"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">العنوان</label>
                            <input type="text" id="address" name="address"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                    </div>
                    <h3 class="text-gray-50 text-xl lg:text-2xl font-black mb-2 mt-4">الإضافات</h3>
                    <div class="flex flex-col gap-6 lg:gap-8">
                        <div class="flex flex-col lg:flex-row gap-2 lg:gap-0 lg:flex-wrap items-start">
                            <div class="flex-1 flex flex-col gap-2">
                                <label class="w-max flex gap-4 flex-wrap items-center">
                                    <input x-toggle="#extra_0" x-properties="hidden" type="checkbox" name="icecream"
                                        value="icecream" class="sr-only peer">
                                    <div
                                        class="relative w-[36px] h-[22px] bg-[#4c4643] rounded-md lg:rounded-xl peer peer-focus:outline peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[4px] after:left-[4px] after:bg-gray-50 after:rounded-sm lg:after:rounded-lg after:h-[14px] after:w-[14px] after:transition-all peer-checked:bg-yellow-600">
                                    </div>
                                    <span class="text-gray-50 text-md lg:text-lg font-black">ماكينة الايس كريم</span>
                                </label>
                                <p class="text-md text-gray-200 flex flex-col">
                                    <span>متوفر مع 70 قطعة بسكوت 2 كريمة ايس كريم فانيلا 2 كريمة ايس كريم كاكاو يشمل
                                        الباكج عربانة ايس كريم شامل التوصيل.</span>
                                    <span>السعر: <span
                                            class="text-gray-50 font-black text-lg">{{ App\Models\Setting::first()->icecream }}</span>
                                        دينار لليوم</span>
                                </p>
                            </div>
                            <div id="extra_0" class="hidden w-max flex gap-4">
                                <label for="icecream"
                                    class="text-gray-50 text-md lg:text-lg h-[48px] flex items-center font-black lg:w-max">الأيام</label>
                                <input type="number" id="icecream" min="1" value="1"
                                    name="icecream_days"
                                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block h-[48px] w-[80px] py-2 px-4 text-center" />
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-2 lg:gap-0 lg:flex-wrap items-start">
                            <div class="flex-1 flex flex-col gap-2">
                                <label class="w-max flex gap-4 flex-wrap items-center">
                                    <input x-toggle="#extra_1" x-properties="hidden" type="checkbox" name="kayak"
                                        value="kayak" class="sr-only peer">
                                    <div
                                        class="relative w-[36px] h-[22px] bg-[#4c4643] rounded-md lg:rounded-xl peer peer-focus:outline peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[4px] after:left-[4px] after:bg-gray-50 after:rounded-sm lg:after:rounded-lg after:h-[14px] after:w-[14px] after:transition-all peer-checked:bg-yellow-600">
                                    </div>
                                    <span class="text-gray-50 text-md lg:text-lg font-black">قارب كاياك بدواسة
                                        واحدة</span>
                                </label>
                                <p class="text-md text-gray-200 flex flex-col">
                                    <span></span>
                                    <span>السعر: <span
                                            class="text-gray-50 font-black text-lg">{{ App\Models\Setting::first()->kayak }}</span>
                                        دينار لليوم</span>
                                </p>
                            </div>
                            <div id="extra_1" class="hidden w-max flex gap-4">
                                <label for="kayak"
                                    class="text-gray-50 text-md lg:text-lg h-[48px] flex items-center font-black lg:w-max">الأيام</label>
                                <input type="number" id="kayak" min="1" value="1"
                                    name="kayak_days"
                                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block h-[48px] w-[80px] py-2 px-4 text-center" />
                            </div>
                        </div>
                    </div>
                    <h3 class="text-gray-50 text-xl lg:text-2xl font-black mb-2 mt-4">معلومات الدفع</h3>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="pname"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">الاسم
                                الكامل</label>
                            <input type="text" id="pname"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                        <div class="flex-1 flex-col lg:flex-row gap-2 lg:gap-0 hidden lg:block"></div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="pnumber"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">رقم
                                البطاقة</label>
                            <input type="text" id="pnumber"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="psecret"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">الرمز
                                السري</label>
                            <input type="text" id="psecret"
                                class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start">
                        <div class="w-full lg:w-0 flex-1 flex flex-col lg:flex-row gap-2 lg:gap-0">
                            <label for="pdate"
                                class="text-gray-50 text-md lg:text-lg flex items-center lg:h-[48px] font-black lg:w-[160px]">تاريخ
                                إنتهاء</label>
                            <div class="flex-1 rounded-md lg:rounded-xl bg-[#4c4643] text-gray-50">
                                <input x-date type="date" id="pdate"
                                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                            </div>
                        </div>
                        <div class="flex-1 flex-col lg:flex-row gap-2 lg:gap-0 hidden lg:block"></div>
                    </div>
                    <p class="text-yellow-600 text-sm lg:text-md font-black mt-2">
                        عند تأكيد الحجز سيتم إرسال رسالة عبر البريد الإلكتروني تحتوي على جميع التفاصيل
                    </p>
                    <button type="submit"
                        class="absolute top-full left-1/2 -translate-x-1/2 -mt-[24px] appearance-none w-max h-[48px] mx-auto text-lg flex items-center justify-center rounded-md lg:rounded-xl font-black px-10 text-gray-950 outline-none bg-yellow-600 hover:bg-yellow-400 focus:bg-yellow-400">
                        <span>إحجز الآن</span>
                    </button>
                </form>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        @if (Session::has('message'))
            const info = {!! json_encode(Session::all()) !!};
            const message = replaceString(Array.isArray(info.message) ? info.message : [info.message]).join("<br />");
            const type = info.type;
            (new Toaster({
                positionX: "left",
                positionY: "bottom",
                width: 500
            }))[type](message);
        @endif
        const slider_1 = Slider({
            wrap: "#slider-main",
        }, {
            infinite: true,
            auto: true,
            gap: 16,
        });
        const slider_2 = Slider({
            wrap: "#slider-container",
            next: "#arrow-right",
            prev: "#arrow-left",
        }, {
            infinite: true,
            auto: true,
        });
        const slider_3 = Slider({
            wrap: "#slider-buttons",
            next: "#arrow-right",
            prev: "#arrow-left",
        }, {
            infinite: true,
            auto: true,
            size: 160,
            gap: 16,
            cols: {{ $images->count() < 3 ? $images->count() : 3 }},
        });

        slider_3.resize(
            () => {
                slider_2.update();
                slider_3.update({
                    size: 160,
                });
            },
            () => {
                slider_2.update();
                slider_3.update({
                    size: 60,
                });
            }
        );

        slider_3.scrollTo(2);

        DatePicker.option({
            style: {
                background: "#ca8a04",
                current: "#facc15",
            },
        });
        new DatePicker();
        new Toggle();

        function getSearchData() {
            const searchParams = new URLSearchParams(window.location.search);
            const data = ["startDate", "endDate"];
            for (let [key, value] of searchParams.entries()) {
                if (data.includes(key) && value.trim().length)
                    document.querySelector(`#${key}`)?.setAttribute("value", value);
            }
        }

        getSearchData();
    </script>
</body>

</html>
