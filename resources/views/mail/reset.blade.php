<table dir="rtl" style="width:100%">
    <tr>
        <td>
            <div style="background-color: #111827;padding: 64px 16px;">
                <img src="{{ asset('img/logo.png') }}" style="display:block;width: 100px; margin: 0 auto 20px auto" />
                <section
                    style="background-color: #030712;color: #f9fafb;border-radius: 16px; border: 2px solid #ca8a04;width: 500px;max-width: 100%;padding: 32px 32px 0 32px;margin: 0 auto;">
                    <img alt="reset-password"
                        src="{{ asset('img/forgot.png') }}"style="width: 300px;max-width: 100%;margin: 0 auto 32px auto;display: block;" />
                    <h1
                        style="margin: 0 0 24px 0;font-family: Tahoma, Verdana, Segoe, sans-serif;font-size: 25px;font-weight: 900;letter-spacing: normal;text-align: center;">
                        هل نسيت الرمز السري؟</h1>
                    <p style="margin: 0;font-size: 14px;text-align: center;">لا داعي للقلق، لقد قمنا بالأمر! دعنا نقوم
                        بإعطائك رمز سري جديد.</p>
                    <a href="{{ route('views.reset', $data['token']) }}" target="_blank"
                        style="text-decoration: none;display: block;color: #030712;background-color: #ca8a04;border-radius: 16px;width: max-content;font-weight: 900;font-family: Tahoma, Verdana, Segoe, sans-serif;font-size: 18px;padding: 16px 40px;margin: 0 auto; position:relative; top:27px">
                        إعادة تعيين
                    </a>
                </section>
                <p style="margin: 40px 0 0 0;font-size: 14px;text-align: center;color: #f9fafb;">
                    إذا لم تطلب تغيير الرمز السري، يمكنك تجاهل هذا البريد
                    الإلكتروني.
                </p>
            </main>
        </td>
    </tr>
</table>
