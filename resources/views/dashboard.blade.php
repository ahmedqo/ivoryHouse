@extends('communs.base')
@section('title', 'لوحة القيادة')

@section('content')
    <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-5 gap-4 -mt-12">
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-gray-950 rounded-lg lg:rounded-2xl">
            <div class="flex-1 flex flex-col">
                <h2 class="text-sm text-gray-300">المستخدمين</h2>
                <span class="text-gray-50 font-black text-md">{{ $users }}</span>
            </div>
            <svg class="block w-[36px] h-[36px] pointer-events-none  text-gray-50" fill="currentcolor" viewBox="0 96 960 960">
                <path
                    d="M68 926q-20.1 0-33.05-12.45Q22 901.1 22 881.292V810q0-42.011 21.188-75.36 21.187-33.348 59.856-50.662Q178 652 238.469 637 298.938 622 363 622q66.062 0 126.031 15Q549 652 624 684q38.812 16.018 60.406 49.452Q706 766.887 706 810v71.708Q706 901 693.275 913.5T660 926H68Zm679 0q11-5 20.5-17.5T777 879v-67q0-65-32.5-108T659 624q60 10 113 24.5t88.88 31.939q34.958 18.329 56.539 52.945Q939 768 939 815v66.787q0 19.505-13.225 31.859Q912.55 926 893 926H747ZM364 562q-71.55 0-115.275-43.725Q205 474.55 205 403.5q0-71.05 43.725-115.275Q292.45 244 363.5 244q70.05 0 115.275 44.113Q524 332.225 524 403q0 71.55-45.112 115.275Q433.775 562 364 562Zm386-159q0 70.55-44.602 114.775Q660.796 562 591.035 562 578 562 567.5 560.5T543 554q26-27.412 38.5-65.107 12.5-37.696 12.5-85.599 0-46.903-12.5-83.598Q569 283 543 252q10.75-3.75 23.5-5.875T591 244q69.775 0 114.387 44.613Q750 333.225 750 403Z">
                </path>
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-gray-950 rounded-lg lg:rounded-2xl">
            <div class="flex-1 flex flex-col">
                <h2 class="text-sm text-gray-300">العقارات</h2>
                <span class="text-gray-50 font-black text-md">{{ $properties }}</span>
            </div>
            <svg class="block w-[36px] h-[36px] pointer-events-none  text-gray-50" fill="currentcolor"
                viewBox="0 96 960 960">
                <path
                    d="m147 448 333-249 334 249H147Zm0 501h383V759H147v190Zm443 0h224V759H590v190ZM147 699h223V508H147v191Zm283 0h384V508H430v191Z">
                </path>
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-gray-950 rounded-lg lg:rounded-2xl">
            <div class="flex-1 flex flex-col">
                <h2 class="text-sm text-gray-300">الحجوزات</h2>
                <span class="text-gray-50 font-black text-md">{{ $reservations }}</span>
            </div>
            <svg class="block w-[36px] h-[36px] pointer-events-none  text-gray-50" fill="currentcolor"
                viewBox="0 96 960 960">
                <path
                    d="M825 900q-21 0-33.5-13.2T779 854V211H320q-21 0-33.5-12.5t-12.5-32q0-19.5 12.5-33T320 120h459q36.188 0 63.594 26.912Q870 173.825 870 211v643q0 19.6-12.5 32.8Q845 900 825 900Zm-671 103q-23 10-43.5-3.989T90 961V360q0-37.588 27.406-64.794Q144.812 268 181 268h450q35.775 0 63.887 27.206Q723 322.412 723 360v601q0 24.022-20.5 38.011Q682 1013 659 1003L405.5 896 154 1003Z">
                </path>
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-gray-950 rounded-lg lg:rounded-2xl">
            <div class="flex-1 flex flex-col">
                <h2 class="text-sm text-gray-300">المدفوعات</h2>
                <span class="text-gray-50 font-black text-md">{{ $amount + $off }} دينار</span>
            </div>
            <svg class="block w-[36px] h-[36px] pointer-events-none  text-gray-50" fill="currentcolor"
                viewBox="0 96 960 960">
                <path
                    d="M551.5 613q49.5 0 84.5-34.708 35-34.709 35-84.292 0-50.417-35-85.708Q601 373 551 373t-85 35.5q-35 35.5-35 85.206t35.5 84.5Q502 613 551.5 613ZM256 773q-37.725 0-64.863-26.438Q164 720.125 164 681V306q0-37.188 27.137-64.594Q218.275 214 256 214h592q36.775 0 63.887 27.406Q939 268.812 939 306v375q0 39.125-27.113 65.562Q884.775 773 848 773H256ZM112 916q-36.775 0-63.888-27.112Q21 861.775 21 825V425q0-19.775 13.56-32.388Q48.12 380 66.86 380 87 380 99.5 392.612 112 405.225 112 425v400h639q18.375 0 31.688 13.375Q796 851.751 796 870.491q0 18.741-13.312 32.125Q769.375 916 751 916H112Zm132-523q41.062 0 70.031-29.469Q343 334.062 343 294h-99v99Zm615 0v-99h-99q0 40 28.525 69.5T859 393ZM244 693h99q0-40.65-28.969-69.325Q285.062 595 244 595v98Zm516 0h99v-98q-42 0-70.5 28.675T760 693Z">
                </path>
            </svg>
        </div>
        <div class="w-full flex items-center gap-4 overflow-hidden p-4 bg-gray-950 rounded-lg lg:rounded-2xl">
            <div class="flex-1 flex flex-col">
                <h2 class="text-sm text-gray-300">المجموع</h2>
                <span class="text-gray-50 font-black text-md">{{ $total }} دينار</span>
            </div>
            <svg class="block w-[36px] h-[36px] pointer-events-none  text-gray-50" fill="currentcolor"
                viewBox="0 96 960 960">
                    <path d="M641 562q23.45 0 39.225-16Q696 530 696 507t-15.886-39.5q-15.886-16.5-39.5-16.5Q618 451 601 467.5 584 484 584 507t17.062 39q17.063 16 39.938 16Zm-311-93h148q16.05 0 28.525-11.813Q519 445.374 519 427.825q0-17.125-12.475-28.975Q494.05 387 478 387H330q-16.05 0-28.025 12.167Q290 411.333 290 428.667 290 446 301.975 457.5T330 469ZM223 959q-36.121 0-65.551-22.464Q128.02 914.073 118 881q-25-83-41.042-144.458-16.043-61.458-24.865-108.682-8.822-47.225-12.457-82.785Q36 509.514 36 476q0-102 70.91-173.5Q177.819 231 279.095 231H505q30-35 74.376-57.5Q623.752 151 676 151q38 0 61 24.667 23 24.666 23 59.333 0 6.739-1.5 13.978T755 262q-4 8-6 16.257-2 8.257-4 18.743l74 74h60q18.75 0 31.875 13.688Q924 398.375 924 418v240q0 16.273-9 28.136Q906 698 892 703l-89.926 28.297L753 895q-8.746 28.509-32.204 46.254Q697.338 959 666 959H564q-32.45 0-58.225-17.125T472 899v-20h-70v20q-8 25.75-33.481 42.875T311 959h-88Z">
                    </path>
            </svg>
        </div>
    </div>
    <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="flex flex-col gap-4">
            <h2 class="font-black text-gray-50 text-xl mt-2">معدل الحجز</h2>
            <div class="w-full aspect-square bg-gray-950 p-4 rounded-lg lg:rounded-2xl relative">
                <canvas id="resPie" class="w-full aspect-square"></canvas>
                <span id="resData"
                    class="font-black text-gray-50 text-3xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h2 class="font-black text-gray-50 text-xl mt-2">معدل الدخل</h2>
            <div class="w-full aspect-square bg-gray-950 p-4 rounded-lg lg:rounded-2xl relative">
                <canvas id="pricePie" class="w-full aspect-square"></canvas>
                <span id="priceData"
                    class="font-black text-gray-50 text-3xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h2 class="font-black text-gray-50 text-xl mt-2">معدل الإلغاء</h2>
            <div class="w-full aspect-square bg-gray-950 p-4 rounded-lg lg:rounded-2xl relative">
                <canvas id="cancelPie" class="w-full aspect-square"></canvas>
                <span id="cancelData"
                    class="font-black text-gray-50 text-3xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
            </div>
        </div>
    </div>
    <h2 class="font-black text-gray-50 text-xl mt-2">
        قائمة أفضل العقارات المحجوزة
    </h2>
    <div class="w-full bg-gray-950 p-4 rounded-lg lg:rounded-2xl">
        <table x-table x-name="properties">
            <thead>
                <tr>
                    <td>
                        الاسم
                    </td>
                    <td>
                        السعر (لليوم)
                    </td>
                    <td>
                        العنوان
                    </td>
                    <td>
                        عدد الحجوزات
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordered as $row)
                    <tr>
                        <td>
                            <a class="underline" target="_blank"
                                href="{{ route('views.property.show', $row->property->slug) }}">{{ $row->property->title }}</a>
                        </td>
                        <td>
                            {{ $row->property->price }} دينار
                        </td>
                        <td>
                            {{ $row->property->address }}, {{ $row->property->city }}, {{ $row->property->state }},
                            {{ $row->property->zipcode }}
                        </td>
                        <td>
                            {{ $row->count }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        const config = (data) => ({
            type: "doughnut",
            data: {
                datasets: [{
                    backgroundColor: ["#ca8a04", "#4c4643"],
                    data: data,
                    borderWidth: 2,
                    borderColor: "#f9fafb",
                }]
            },
            options: {
                legend: false,
                tooltips: false,
                maintainAspectRatio: false
            }
        })
        document.querySelector("#resData").innerHTML = "{{ ($properties > 0 ? number_format(($rate / $properties) * 100, 2) : '0.00') . '%' }}";
        document.querySelector("#priceData").innerHTML =
            "{{ (($amount + $off) > 0 ? number_format(($amount / ($amount + $off)) * 100, 2) : '0.00') . '%' }}";
        document.querySelector("#cancelData").innerHTML =
            "{{ (($stay + $cancel) > 0 ?number_format(($cancel / ($stay + $cancel)) * 100, 2) : '0.00') . '%' }}";

        new Chart("resPie", config([{{ $rate }}, {{ $rate > 0 ? $properties - $rate : 0 }}]));
        new Chart("pricePie", config([{{ $amount }}, {{ $off }}]));
        new Chart("cancelPie", config([{{ $cancel }}, {{ $stay }}]));
    </script>
@endsection
