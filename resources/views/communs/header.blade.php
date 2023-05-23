<header class="w-full bg-yellow-600 shadow-sm pb-8">
    <nav class="w-full container mx-auto flex items-center gap-2 p-4">
        <button x-toggle="#menu" x-properties="right-0, -right-full, pointer-events-none, lg:w-[260px], lg:w-0"
            class="w-[42px] h-[42px] flex items-center justify-center rounded-full text-gray-50 outline-none hover:bg-gray-50 hover:bg-opacity-10 focus:bg-gray-50 focus:bg-opacity-10">
            <svg class="block w-5 h-5 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                <path
                    d="M21.05 43V30.75h4v4.2h17.7v4h-17.7V43Zm-15.8-4.05v-4h13.3v4Zm9.3-8.9v-4.1h-9.3V22h9.3v-4.15h4v12.2Zm6.5-4.1V22h21.7v3.95Zm8.4-8.75V4.95h4v4.1h9.3v4h-9.3v4.15Zm-24.2-4.15v-4h21.7v4Z" />
            </svg>
        </button>
        <div class="w-max flex items-center gap-2 ms-auto">
            <div class="w-max relative">
                <button x-toggle="#dropdown" x-properties="pointer-events-none, opacity-0"
                    class="flex items-center justify-center w-[42px] h-[42px] rounded-full focus:outline-1 focus:outline-1-2 outline-yellow-600 bg-yellow-200">
                    <span
                        class="text-xs font-black text-gray-950">{{ strtoupper(Auth::user()->firstName[0]) }}{{ strtoupper(Auth::user()->lastName[0]) }}</span>
                </button>
                <ul id="dropdown"
                    class="w-[160px] flex flex-col bg-gray-950 rounded-lg overflow-hidden absolute left-0 top-full mt-px transition-all duration-200 opacity-0 pointer-events-none z-20 border border-gray-900">
                    <li class="w-full">
                        <a href="{{ route('views.profile.edit') }}"
                            class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-gray-50 hover:bg-opacity-10 focus:bg-gray-50 focus:bg-opacity-10">
                            <svg class="block w-4 h-4 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                                <path
                                    d="M24 23.35q-3.85 0-6.225-2.4-2.375-2.4-2.375-6.2 0-3.8 2.375-6.2Q20.15 6.15 24 6.15q3.8 0 6.225 2.375t2.425 6.225q0 3.8-2.4 6.2-2.4 2.4-6.25 2.4ZM11.45 41.5q-1.9 0-3.225-1.325Q6.9 38.85 6.9 36.95V35.7q0-2.15 1.125-3.8T11 29.4q3.4-1.6 6.6-2.35 3.2-.75 6.4-.75 3.25 0 6.4.8 3.15.8 6.55 2.3 1.9.75 3.05 2.425 1.15 1.675 1.15 3.875v1.25q0 1.9-1.35 3.225-1.35 1.325-3.25 1.325Z" />
                            </svg>
                            <span class="text-sm font-medium">الملف الشخصي</span>
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ route('views.profile.password') }}"
                            class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-gray-50 hover:bg-opacity-10 focus:bg-gray-50 focus:bg-opacity-10">
                            <svg class="block w-4 h-4 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                                <path
                                    d="M27.55 45.05h-7.1q-.9 0-1.575-.5-.675-.5-.725-1.45l-.75-4.7q-.7-.2-1.55-.7-.85-.5-1.4-.95l-4.3 2.05q-.75.4-1.625.1-.875-.3-1.325-1.15L3.65 31.4q-.55-.75-.3-1.6.25-.85.9-1.35l4-2.95q-.05-.25-.05-.725v-1.5q0-.425.05-.775l-4-2.95q-.65-.55-.9-1.375t.25-1.625l3.6-6.35q.5-.75 1.35-1.025.85-.275 1.6.075l4.4 2q.5-.35 1.35-.85.85-.5 1.5-.7l.75-4.85q.05-.9.75-1.425t1.55-.525h7.1q.85 0 1.55.525.7.525.8 1.425l.7 4.8q.75.2 1.575.7.825.5 1.375.9l4.3-2.05q.75-.35 1.625-.05T40.8 10.2l3.65 6.3q.5.8.25 1.65-.25.85-.9 1.4l-4.1 2.8q.05.4.125.85.075.45.075.8 0 .35-.075.775-.075.425-.125.775l4.1 2.85q.65.6.875 1.425.225.825-.225 1.625L40.8 37.8q-.5.85-1.35 1.125-.85.275-1.6-.125l-4.3-2.05q-.55.45-1.425.975-.875.525-1.475.675l-.75 4.7q-.1.95-.8 1.45-.7.5-1.55.5Zm-3.6-14.7q2.65 0 4.5-1.85T30.3 24q0-2.6-1.85-4.475-1.85-1.875-4.5-1.875-2.7 0-4.525 1.875Q17.6 21.4 17.6 24q0 2.65 1.825 4.5t4.525 1.85Z" />
                            </svg>
                            <span class="text-sm font-medium">الرمز السري</span>
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ route('actions.logout') }}"
                            class="w-full flex gap-2 items-center px-4 py-2 outline-none text-gray-50 hover:bg-gray-50 hover:bg-opacity-10 focus:bg-gray-50 focus:bg-opacity-10">
                            <svg class="block w-4 h-4 pointer-events-none" fill="currentcolor" viewBox="0 0 48 48">
                                <path
                                    d="M31.75 32.7q-.65-.75-.675-1.65-.025-.9.675-1.6l3.2-3.15h-14.5q-1 0-1.625-.675T18.2 24q0-1 .625-1.625t1.625-.625h14.4l-3.3-3.35q-.65-.6-.625-1.5.025-.9.725-1.6.6-.6 1.6-.575 1 .025 1.7.625l7.05 7.1q.25.3.45.75t.2.85q0 .45-.2.875T42 25.6l-7.05 7.15q-.65.65-1.55.6-.9-.05-1.65-.65ZM9.05 43.15q-1.9 0-3.25-1.35t-1.35-3.2V9.4q0-1.85 1.35-3.225T9.05 4.8H21.6q1 0 1.65.7.65.7.65 1.65 0 1-.65 1.625T21.6 9.4H9.05v29.2H21.6q1 0 1.65.625.65.625.65 1.625t-.65 1.65q-.65.65-1.65.65Z" />
                            </svg>
                            <span class="text-sm font-medium">خروج</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
