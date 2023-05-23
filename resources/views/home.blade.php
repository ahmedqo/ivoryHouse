<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>الرئيسية</title>
</head>

<body class="bg-gray-950">
    <header class="relative bg-gray-900 z-[1] border-b-8 border-yellow-600">
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
                    <img src="{{ asset('img/logo.png') }}" class="w-[60px]" />
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
        <ul shadow
            class="w-max flex lg:flex-col bg-yellow-600 gap-4 p-4 rounded-t-lg bottom-0 left-1/2 -translate-x-1/2 lg:rounded-tr-none lg:translate-x-0 lg:rounded-l-2xl lg:right-0 lg:bottom-14 lg:mb-4 absolute">
            <li>
                <a href="{{ $social->facebook }}" class="flex text-gray-950">
                    <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 30 31">
                        <path
                            d="M3.33333 0.250977H26.6667C27.5507 0.250977 28.3986 0.602166 29.0237 1.22729C29.6488 1.85241 30 2.70025 30 3.58431V26.9176C30 27.8017 29.6488 28.6495 29.0237 29.2747C28.3986 29.8998 27.5507 30.251 26.6667 30.251H3.33333C2.44928 30.251 1.60143 29.8998 0.976311 29.2747C0.351189 28.6495 0 27.8017 0 26.9176V3.58431C0 2.70025 0.351189 1.85241 0.976311 1.22729C1.60143 0.602166 2.44928 0.250977 3.33333 0.250977ZM25 3.58431H20.8333C19.2862 3.58431 17.8025 4.19889 16.7085 5.29285C15.6146 6.38682 15 7.87055 15 9.41764V13.5843H11.6667V18.5843H15V30.251H20V18.5843H25V13.5843H20V10.251C20 9.80895 20.1756 9.38503 20.4882 9.07246C20.8007 8.7599 21.2246 8.58431 21.6667 8.58431H25V3.58431Z">
                        </path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="{{ $social->instagram }}" class="flex text-gray-950">
                    <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 30 31">
                        <path
                            d="M8.7 0.250977H21.3C26.1 0.250977 30 4.15098 30 8.95098V21.551C30 23.8584 29.0834 26.0712 27.4518 27.7028C25.8203 29.3344 23.6074 30.251 21.3 30.251H8.7C3.9 30.251 0 26.351 0 21.551V8.95098C0 6.64359 0.916605 4.43071 2.54817 2.79915C4.17974 1.16758 6.39262 0.250977 8.7 0.250977ZM8.4 3.25098C6.96783 3.25098 5.59432 3.8199 4.58162 4.8326C3.56893 5.8453 3 7.21881 3 8.65098V21.851C3 24.836 5.415 27.251 8.4 27.251H21.6C23.0322 27.251 24.4057 26.6821 25.4184 25.6694C26.4311 24.6567 27 23.2831 27 21.851V8.65098C27 5.66598 24.585 3.25098 21.6 3.25098H8.4ZM22.875 5.50098C23.3723 5.50098 23.8492 5.69852 24.2008 6.05015C24.5525 6.40178 24.75 6.8787 24.75 7.37598C24.75 7.87326 24.5525 8.35017 24.2008 8.7018C23.8492 9.05343 23.3723 9.25098 22.875 9.25098C22.3777 9.25098 21.9008 9.05343 21.5492 8.7018C21.1975 8.35017 21 7.87326 21 7.37598C21 6.8787 21.1975 6.40178 21.5492 6.05015C21.9008 5.69852 22.3777 5.50098 22.875 5.50098ZM15 7.75098C16.9891 7.75098 18.8968 8.54115 20.3033 9.94768C21.7098 11.3542 22.5 13.2619 22.5 15.251C22.5 17.2401 21.7098 19.1478 20.3033 20.5543C18.8968 21.9608 16.9891 22.751 15 22.751C13.0109 22.751 11.1032 21.9608 9.6967 20.5543C8.29018 19.1478 7.5 17.2401 7.5 15.251C7.5 13.2619 8.29018 11.3542 9.6967 9.94768C11.1032 8.54115 13.0109 7.75098 15 7.75098ZM15 10.751C13.8065 10.751 12.6619 11.2251 11.818 12.069C10.9741 12.9129 10.5 14.0575 10.5 15.251C10.5 16.4445 10.9741 17.589 11.818 18.433C12.6619 19.2769 13.8065 19.751 15 19.751C16.1935 19.751 17.3381 19.2769 18.182 18.433C19.0259 17.589 19.5 16.4445 19.5 15.251C19.5 14.0575 19.0259 12.9129 18.182 12.069C17.3381 11.2251 16.1935 10.751 15 10.751Z">
                        </path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="{{ $social->twitter }}" class="flex text-gray-950">
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
                <a href="{{ $social->tiktok }}" class="flex text-gray-950">
                    <svg class="pointer-events-none w-6 h-6" fill="currentColor" viewBox="0 0 32 32">
                        <path
                            d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>
        <div class="mx-auto p-4 container mt-64 mb-14">
            <div class="w-full lg:w-10/12 mx-auto bg-gray-950 p-4 lg:p-8 rounded-lg lg:rounded-2xl">
                <h1 class="text-gray-50 text-2xl lg:text-3xl font-black mb-6">إحجز فلتك الان</h1>
                <form id="form" onsubmit="search(event)"
                    class="w-full flex flex-col lg:flex-row lg:flex-wrap gap-4">
                    <div class="flex-1 relative">
                        <svg class="pointer-events-none w-6 h-6 text-gray-950 absolute top-1/2 -translate-y-1/2 left-4"
                            fill="currentColor" viewBox="0 96 960 960">
                            <path
                                d="M479.983 1020Q335 1020 244 977.575T153 865q0-35 31-68.5t86-55.5l42 84q-19 5-39 16.5T241 864q19.29 26.8 92.145 45.4Q406 928 481.2 928t147.533-18.6Q701.067 890.8 721 864q-12-10-32.5-22T651 825l41-83q56 22 86 55t30 68q0 70.15-91.517 112.575Q624.965 1020 479.983 1020ZM480 882q-17.586 0-30.793-9T432 847q-23-67-60-116.5T301 634q-37.861-48.058-63.93-99.529Q211 483 211 413q0-113.387 77.024-192.693Q365.047 141 480.024 141 595 141 673 220.307 751 299.613 751 413q0 70-27.5 121.5T661 634q-37 47-73.5 96.5T529 847q-5 17-18.207 26T480 882Zm.25-408Q505 474 524 456t19-42.75q0-24.75-19.25-44t-44-19.25q-24.75 0-43.25 19.25t-18.5 44Q418 438 436.75 456t43.5 18Z" />
                        </svg>
                        <input id="address" type="text" placeholder="المكان" name="address"
                            class="flex-1 appearance-none bg-gray-50 text-gray-950 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4 pl-12" />
                    </div>
                    <div class="flex-1 rounded-md lg:rounded-xl bg-gray-50 text-gray-950">
                        <input x-date id="startDate" type="date" placeholder="تاريخ الوصول" name="startDate"
                            class="flex-1 appearance-none bg-gray-50 text-gray-950 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                    </div>
                    <div class="flex-1 rounded-md lg:rounded-xl bg-gray-50 text-gray-950">
                        <input x-date id="endDate" type="date" placeholder="تاريخ المغادرة" name="endDate"
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
        <section background-image class="w-full pt-32 pb-20">
            <div id="propreties" class="mx-auto container p-4 grid grid-cols-1 grid-rows-1 lg:grid-cols-3 gap-4">
                @foreach ($data as $row)
                    <a href="{{ route('views.property.show', $row->slug) }}" class="block">
                        <div
                            class="aspect-video p-2 rounded-lg lg:rounded-2xl rounded-br-none lg:rounded-br-none border border-yellow-600 relative">
                            @if ($row->reserved)
                                <div
                                    class="absolute inset-2 bg-gray-950 bg-opacity-50 rounded-md lg:rounded-xl rounded-br-none lg:rounded-br-none pointer-events-none z-[1]">
                                </div>
                                <div
                                    class="absolute w-max left-1/2 rounded-b-md -translate-x-1/2 bg-yellow-600 px-2 py-1 z-[1]">
                                    محجوز
                                </div>
                            @endif
                            <div
                                class="w-full h-full overflow-hidden rounded-md lg:rounded-xl rounded-br-none lg:rounded-br-none">
                                <img src="{{ asset('storage/files/' . $row->images[0]->name) }}"
                                    class="w-full h-full object-cover hover:scale-150 transition-transform bg-gray-50" />
                            </div>
                        </div>
                        <div
                            class="w-max text-gray-950 font-black text-lg lg:text-xl bg-yellow-600 rounded-bl-[4rem] rounded-br-lg lg:rounded-br-2xl px-2 py-1 pe-6 -mt-2">
                            {{ $row->price }} دينار
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        <section id="video" class="aspect-video">
            <video src="{{ asset('vid/video.mp4') }}" class="w-full h-full" controls></video>
        </section>
        <section id="contact" class="mt-10 mb-14">
            <div class="container mx-auto p-4">
                <h2 class="text-yellow-600 text-3xl lg:text-4xl font-black mb-10 lg:mb-16 text-center">للتواصل معنا
                </h2>
                <form action="{{ route('actions.home.contact') }}" method="POST"
                    class="relative w-full mx-auto flex flex-col gap-4 lg:gap-8 border-2 border-yellow-600 rounded-lg lg:rounded-2xl p-4 pb-12 lg:p-8 lg:pb-16 lg:w-8/12">
                    @csrf
                    <div class="flex flex-col lg:flex-row gap-2 lg:gap-0 items-start">
                        <label for="name"
                            class="text-gray-50 text-md lg:text-lg lg:h-[48px] flex items-center font-black lg:w-[160px]">الاسم
                            الكامل</label>
                        <input type="text" id="name" name="name"
                            class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2 lg:gap-0 items-start">
                        <label for="email"
                            class="text-gray-50 text-md lg:text-lg lg:h-[48px] flex items-center font-black lg:w-[160px]">البريد
                            الإلكتروني</label>
                        <input type="email" id="email" name="email"
                            class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2 lg:gap-0 items-start">
                        <label for="phone"
                            class="text-gray-50 text-md lg:text-lg lg:h-[48px] flex items-center font-black lg:w-[160px]">الهاتف</label>
                        <input type="tel" id="phone" name="phone"
                            class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2 lg:gap-0 items-start">
                        <label for="message"
                            class="text-gray-50 text-md lg:text-lg lg:h-[48px] flex items-center font-black lg:w-[160px]">الرسالة</label>
                        <textarea id="message" rows="3" name="message"
                            class="flex-1 appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full py-2 px-4"></textarea>
                    </div>
                    <button type="submit"
                        class="absolute top-full left-1/2 -translate-x-1/2 -mt-[24px] appearance-none w-max h-[48px] mx-auto text-lg flex items-center justify-center rounded-md lg:rounded-xl font-black px-10 text-gray-950 outline-none bg-yellow-600 hover:bg-yellow-400 focus:bg-yellow-400">
                        <span>تواصل بنا</span>
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

        slider_1.resize(
            () => {
                slider_1.update();
            },
            () => {
                slider_1.update();
            }
        );

        DatePicker.option({
            style: {
                background: "#ca8a04",
                current: "#facc15",
            },
        });
        new DatePicker();
        const propreties = document.querySelector("#propreties");

        function template(row) {
            const link = "{{ route('views.property.show', ':slug') }}".replace(/:slug/g, row.slug);
            const image = "{{ asset('storage/files/') }}" + "/" + row.images[0].name;
            return `
                <a href="${link}" class="block">
                    <div
                        class="aspect-video p-2 rounded-lg lg:rounded-2xl rounded-br-none lg:rounded-br-none border border-yellow-600 relative">
                        ${row.reserved ? `<div
                                            class="absolute inset-2 bg-gray-950 bg-opacity-50 rounded-md lg:rounded-xl rounded-br-none lg:rounded-br-none pointer-events-none z-[1]">
                                        </div>
                                        <div
                                            class="absolute w-max left-1/2 rounded-b-md -translate-x-1/2 bg-yellow-600 px-2 py-1 z-[1]">
                                            محجوز
                                        </div>` : ``}
                        <div
                            class="w-full h-full overflow-hidden rounded-md lg:rounded-xl rounded-br-none lg:rounded-br-none">
                            <img src="${image}"
                                class="w-full h-full object-cover hover:scale-150 transition-transform bg-gray-50" />
                        </div>
                    </div>
                    <div
                        class="w-max text-gray-950 font-black text-lg lg:text-xl bg-yellow-600 rounded-bl-[4rem] rounded-br-lg lg:rounded-br-2xl px-2 py-1 pe-6 -mt-2">
                        ${row.price} دينار
                    </div>
                </a>
            `;
        }

        function search(event) {
            event.preventDefault();
            const form = new FormData(event.target);
            fetch("{{ route('actions.properties.search') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: form
                })
                .then(response => response.json())
                .then(data => {
                    propreties.innerHTML = "";
                    data.forEach(row => {
                        propreties.innerHTML += template(row);
                    });
                })
                .catch(error => console.error(error));
        }

        function getSearchData() {
            const searchParams = new URLSearchParams(window.location.search);
            const data = ["address", "startDate", "endDate"];
            let submit = false;
            for (let [key, value] of searchParams.entries()) {
                document.querySelector(`#${key}`)?.setAttribute("value", value);
                if (data.includes(key) && value.trim().length) submit = true;
                else submit = false;
            }
            submit && search({
                preventDefault: function() {},
                target: document.querySelector("#form")
            })
        }

        getSearchData();
    </script>
</body>

</html>
