<aside id="menu"
    class="w-full lg:w-[260px] h-screen fixed lg:sticky top-0 -right-full lg:right-0 z-30 lg:z-0 transition-all duration-200 pointer-events-none lg:pointer-events-auto">
    <div class="w-full h-full bg-gray-900 bg-opacity-80 relative">
        <button x-toggle="#menu" x-properties="right-0, -right-full, pointer-events-none, lg:w-[260px], lg:w-0"
            class="w-10 h-10 flex items-center justify-center rounded-full absolute top-4 left-4 text-gray-50 outline-none hover:bg-gray-50 hover:bg-opacity-10 focus:bg-gray-50 focus:bg-opacity-10">
            <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                <path
                    d="M480 640 282 838q-14 14-32.5 14T218 838q-14-13-14-31.5t14-31.5l198-199-198-198q-13-13-13-32t13-32q12-13 31-13t33 13l198 199 199-200q13-13 31.5-13t32.5 13q13 14 13 32.5T743 377L544 575l198 199q14 14 14 32.5T742 838q-13 14-32 14t-31-14L480 640Z" />
            </svg>
        </button>
    </div>
    <nav
        class="w-9/12 max-w-[260px] lg:w-full h-full flex flex-col gap-6 bg-gray-950 absolute top-0 right-0 overflow-y-auto">
        <header class="w-full flex items-center justify-center p-2">
            <img src="{{ asset('img/logo.png') }}" class="w-[160px] block" />
        </header>
        <ul class="flex flex-col">
            <li class="w-full">
                <a href="{{ route('views.dashboard.show') }}"
                    class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-yellow-400 focus:bg-yellow-400 {{ Link::is_active('views.dashboard.show') }}">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                        <path
                            d="M190 957q-37.775 0-64.388-26.612Q99 903.775 99 866V286q0-38.188 26.612-65.094Q152.225 194 190 194h171q35.775 0 63.388 26.906Q452 247.812 452 286v580q0 37.775-27.612 64.388Q396.775 957 361 957H190Zm411-439q-37.725 0-64.862-27.138Q509 463.725 509 426V286q0-38.188 27.138-65.094Q563.275 194 601 194h169q38.188 0 65.094 26.906Q862 247.812 862 286v140q0 37.725-26.906 64.862Q808.188 518 770 518H601Zm0 439q-37.725 0-64.862-26.612Q509 903.775 509 866V666q0-36.775 27.138-63.888Q563.275 575 601 575h169q38.188 0 65.094 27.112Q862 629.225 862 666v200q0 37.775-26.906 64.388Q808.188 957 770 957H601Z" />
                    </svg>
                    <span class="text-lg font-semibold">لوحة القيادة</span>
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('views.users.index') }}"
                    class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-yellow-400 focus:bg-yellow-400 {{ Link::is_active('views.users.index') }}">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                        <path
                            d="M68 926q-20.1 0-33.05-12.45Q22 901.1 22 881.292V810q0-42.011 21.188-75.36 21.187-33.348 59.856-50.662Q178 652 238.469 637 298.938 622 363 622q66.062 0 126.031 15Q549 652 624 684q38.812 16.018 60.406 49.452Q706 766.887 706 810v71.708Q706 901 693.275 913.5T660 926H68Zm679 0q11-5 20.5-17.5T777 879v-67q0-65-32.5-108T659 624q60 10 113 24.5t88.88 31.939q34.958 18.329 56.539 52.945Q939 768 939 815v66.787q0 19.505-13.225 31.859Q912.55 926 893 926H747ZM364 562q-71.55 0-115.275-43.725Q205 474.55 205 403.5q0-71.05 43.725-115.275Q292.45 244 363.5 244q70.05 0 115.275 44.113Q524 332.225 524 403q0 71.55-45.112 115.275Q433.775 562 364 562Zm386-159q0 70.55-44.602 114.775Q660.796 562 591.035 562 578 562 567.5 560.5T543 554q26-27.412 38.5-65.107 12.5-37.696 12.5-85.599 0-46.903-12.5-83.598Q569 283 543 252q10.75-3.75 23.5-5.875T591 244q69.775 0 114.387 44.613Q750 333.225 750 403Z" />
                    </svg>
                    <span class="text-lg font-semibold">المستخدمين</span>
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('views.properties.index') }}"
                    class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-yellow-400 focus:bg-yellow-400 {{ Link::is_active('views.properties.index') }}">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                        <path
                            d="m147 448 333-249 334 249H147Zm0 501h383V759H147v190Zm443 0h224V759H590v190ZM147 699h223V508H147v191Zm283 0h384V508H430v191Z" />
                    </svg>
                    <span class="text-lg font-semibold">العقارات</span>
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('views.reservations.index') }}"
                    class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-yellow-400 focus:bg-yellow-400 {{ Link::is_active('views.reservations.index') }}">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                        <path
                            d="M825 900q-21 0-33.5-13.2T779 854V211H320q-21 0-33.5-12.5t-12.5-32q0-19.5 12.5-33T320 120h459q36.188 0 63.594 26.912Q870 173.825 870 211v643q0 19.6-12.5 32.8Q845 900 825 900Zm-671 103q-23 10-43.5-3.989T90 961V360q0-37.588 27.406-64.794Q144.812 268 181 268h450q35.775 0 63.887 27.206Q723 322.412 723 360v601q0 24.022-20.5 38.011Q682 1013 659 1003L405.5 896 154 1003Z" />
                    </svg>
                    <span class="text-lg font-semibold">الحجوزات</span>
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('views.payments.index') }}"
                    class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-yellow-400 focus:bg-yellow-400 {{ Link::is_active('views.payments.index') }}">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                        <path
                            d="M551.5 613q49.5 0 84.5-34.708 35-34.709 35-84.292 0-50.417-35-85.708Q601 373 551 373t-85 35.5q-35 35.5-35 85.206t35.5 84.5Q502 613 551.5 613ZM256 773q-37.725 0-64.863-26.438Q164 720.125 164 681V306q0-37.188 27.137-64.594Q218.275 214 256 214h592q36.775 0 63.887 27.406Q939 268.812 939 306v375q0 39.125-27.113 65.562Q884.775 773 848 773H256ZM112 916q-36.775 0-63.888-27.112Q21 861.775 21 825V425q0-19.775 13.56-32.388Q48.12 380 66.86 380 87 380 99.5 392.612 112 405.225 112 425v400h639q18.375 0 31.688 13.375Q796 851.751 796 870.491q0 18.741-13.312 32.125Q769.375 916 751 916H112Zm132-523q41.062 0 70.031-29.469Q343 334.062 343 294h-99v99Zm615 0v-99h-99q0 40 28.525 69.5T859 393ZM244 693h99q0-40.65-28.969-69.325Q285.062 595 244 595v98Zm516 0h99v-98q-42 0-70.5 28.675T760 693Z" />
                    </svg>
                    <span class="text-lg font-semibold">المدفوعات</span>
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('views.settings.show') }}"
                    class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-yellow-400 focus:bg-yellow-400 {{ Link::is_active('views.settings.show') }}">
                    <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 96 960 960">
                        <path
                            d="M727.118 997q-55.701 0-95.91-40.43Q591 916.14 591 862.055q0-7.707 2-18.549 2-10.842 4-20.297L330.288 667Q311 687 286.654 699.5T234.448 712q-54.937 0-95.192-40.368Q99 631.265 99 575.882q0-55.382 40.256-95.132Q179.511 441 234.448 441q27.506 0 51.529 10.5Q310 462 330 482l267-154.292q-2-6.936-4-18.129-2-11.192-2-18.965 0-54.947 40.091-94.781Q671.181 156 726.882 156q54.618 0 94.868 39.868Q862 235.735 862 291.118q0 55.382-40.255 95.132Q781.489 426 726.552 426q-29.213 0-52.459-7.969-23.246-7.969-41.381-28.031L365 536.209q2 8.741 3.5 20.94 1.5 12.199 1.5 19.092 0 6.894-1.5 16.352-1.5 9.457-3.5 18.198L632.712 761q18.135-16.062 40.558-25.531Q695.692 726 726.552 726q54.937 0 95.193 40.368Q862 806.735 862 862.118q0 54.382-40.132 94.632Q781.735 997 727.118 997Z" />
                    </svg>
                    <span class="text-lg font-semibold">الإعدادات</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
