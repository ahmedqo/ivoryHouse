@extends('auth.base')
@section('title', 'إعادة تعيين الرمز السري')

@section('content')
    <form action="{{ route('actions.reset', $token) }}" method="POST"
        class="relative w-full mx-auto flex flex-col bg-gray-950 gap-4 border-2 border-yellow-600 rounded-lg lg:rounded-2xl p-4 pb-10">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="newPassword" class="text-gray-50 text-lg font-black">الرمز السري</label>
            <div class="rounded-lg lg:rounded-2xl bg-[#4c4643] text-gray-50">
                <input x-password type="date" type="password" id="newPassword" name="newPassword"
                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label for="confirmPassword" class="text-gray-50 text-lg font-black">تأكيد الرمز السري</label>
            <div class="rounded-lg lg:rounded-2xl bg-[#4c4643] text-gray-50">
                <input x-password type="date" type="password" id="confirmPassword" name="confirmPassword"
                    class="appearance-none bg-[#4c4643] text-gray-50 text-lg rounded-md lg:rounded-xl block w-full h-[48px] py-2 px-4" />
            </div>
        </div>
        <button type="submit"
            class="absolute top-full left-1/2 -translate-x-1/2 -mt-[24px] appearance-none w-max h-[48px] mx-auto text-lg flex items-center justify-center rounded-md lg:rounded-xl font-black px-10 text-gray-950 outline-none bg-yellow-600 hover:bg-yellow-400 focus:bg-yellow-400">
            <span>إعادة تعيين</span>
        </button>
    </form>
@endsection

@section('script')
    <script>
        new Password();
    </script>
@endsection
