@extends('communs.base')
@section('title', 'قائمة المدفوعات')

@section('content')
    <div class="w-full bg-gray-950 rounded-lg lg:rounded-2xl -mt-12 overflow-hidden">
        <div class="p-4 flex items-center justify-between gap-4">
            <h1 class="font-black text-gray-50 text-xl">
                قائمة المدفوعات
            </h1>
        </div>
    </div>
    <div class="w-full bg-gray-950 p-4 rounded-lg lg:rounded-2xl">
        <table x-table x-remove="8" x-name="reservations">
            <thead>
                <tr>
                    <td>
                        الحجز
                    </td>
                    <td>
                        المرجعية
                    </td>
                    <td>
                        رقم الدفع
                    </td>
                    <td>
                        رقم المعاملة
                    </td>
                    <td>
                        المبلغ الإجمالي
                    </td>
                    <td>
                        تاريخ الإنشاء
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>
                            {{ $row->reservation()->first()->name }}
                        </td>
                        <td>
                            {{ $row->ref }}
                        </td>
                        <td>
                            {{ $row->paymentId }}
                        </td>
                        <td>
                            {{ $row->transactionId }}
                        </td>
                        <td>
                            {{ $row->amount }}
                        </td>
                        <td>
                            {{ $row->created_at }}
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
