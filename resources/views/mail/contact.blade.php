<table dir="rtl" style="width: 100%;">
    <tr>
        <td>
            <div style="background-color: #111827; padding: 64px 16px;">
                <img src="{{ asset('img/logo.png') }}" style="display:block;width: 100px; margin: 0 auto 20px auto" />
                <section
                    style="
                            background-color: #030712;
                            color: #f9fafb;
                            border-radius: 16px;
                            border: 2px solid #ca8a04;
                            width: 500px;
                            max-width: 100%;
                            margin: 0 auto;
                            padding: 32px;
                        ">
                    <table style="width: 100%; border-collapse: collapse;color: #f9fafb;">
                        <tr>
                            <td style="width:50%">
                                <div style="font-size: 18px; padding-bottom: 6px;">الاسم الكامل</div>
                            </td>
                            <td style="width:50%">
                                <div style="font-size: 18px; padding-bottom: 6px;">الهاتف</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="font-size: 16px;">{{ $data['name'] }}</div>
                            </td>
                            <td>
                                <div style="font-size: 16px;">{{ $data['phone'] }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="font-size: 18px; padding-bottom: 6px;">الرسالة</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="font-size: 16px;">{{ $data['message'] }}</div>
                            </td>
                        </tr>
                    </table>
                </section>
            </main>
        </td>
    </tr>
</table>
