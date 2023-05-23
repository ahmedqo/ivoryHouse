<?php

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines contain the default error messages used by
//     | the validator class. Some of these rules have multiple versions such
//     | as the size rules. Feel free to tweak each of these messages here.
//     |
//     */

//     'accepted' => 'The :attribute must be accepted.',
//     'accepted_if' => 'The :attribute must be accepted when :other is :value.',
//     'active_url' => 'The :attribute is not a valid URL.',
//     'after' => 'The :attribute must be a date after :date.',
//     'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
//     'alpha' => 'The :attribute must only contain letters.',
//     'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
//     'alpha_num' => 'The :attribute must only contain letters and numbers.',
//     'array' => 'The :attribute must be an array.',
//     'before' => 'The :attribute must be a date before :date.',
//     'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
//     'between' => [
//         'numeric' => 'The :attribute must be between :min and :max.',
//         'file' => 'The :attribute must be between :min and :max kilobytes.',
//         'string' => 'The :attribute must be between :min and :max characters.',
//         'array' => 'The :attribute must have between :min and :max items.',
//     ],
//     'boolean' => 'The :attribute field must be true or false.',
//     'confirmed' => 'The :attribute confirmation does not match.',
//     'current_password' => 'The password is incorrect.',
//     'date' => 'The :attribute is not a valid date.',
//     'date_equals' => 'The :attribute must be a date equal to :date.',
//     'date_format' => 'The :attribute does not match the format :format.',
//     'declined' => 'The :attribute must be declined.',
//     'declined_if' => 'The :attribute must be declined when :other is :value.',
//     'different' => 'The :attribute and :other must be different.',
//     'digits' => 'The :attribute must be :digits digits.',
//     'digits_between' => 'The :attribute must be between :min and :max digits.',
//     'dimensions' => 'The :attribute has invalid image dimensions.',
//     'distinct' => 'The :attribute field has a duplicate value.',
//     'email' => 'The :attribute must be a valid email address.',
//     'ends_with' => 'The :attribute must end with one of the following: :values.',
//     'enum' => 'The selected :attribute is invalid.',
//     'exists' => 'The selected :attribute is invalid.',
//     'file' => 'The :attribute must be a file.',
//     'filled' => 'The :attribute field must have a value.',
//     'gt' => [
//         'numeric' => 'The :attribute must be greater than :value.',
//         'file' => 'The :attribute must be greater than :value kilobytes.',
//         'string' => 'The :attribute must be greater than :value characters.',
//         'array' => 'The :attribute must have more than :value items.',
//     ],
//     'gte' => [
//         'numeric' => 'The :attribute must be greater than or equal to :value.',
//         'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
//         'string' => 'The :attribute must be greater than or equal to :value characters.',
//         'array' => 'The :attribute must have :value items or more.',
//     ],
//     'image' => 'The :attribute must be an image.',
//     'in' => 'The selected :attribute is invalid.',
//     'in_array' => 'The :attribute field does not exist in :other.',
//     'integer' => 'The :attribute must be an integer.',
//     'ip' => 'The :attribute must be a valid IP address.',
//     'ipv4' => 'The :attribute must be a valid IPv4 address.',
//     'ipv6' => 'The :attribute must be a valid IPv6 address.',
//     'json' => 'The :attribute must be a valid JSON string.',
//     'lt' => [
//         'numeric' => 'The :attribute must be less than :value.',
//         'file' => 'The :attribute must be less than :value kilobytes.',
//         'string' => 'The :attribute must be less than :value characters.',
//         'array' => 'The :attribute must have less than :value items.',
//     ],
//     'lte' => [
//         'numeric' => 'The :attribute must be less than or equal to :value.',
//         'file' => 'The :attribute must be less than or equal to :value kilobytes.',
//         'string' => 'The :attribute must be less than or equal to :value characters.',
//         'array' => 'The :attribute must not have more than :value items.',
//     ],
//     'mac_address' => 'The :attribute must be a valid MAC address.',
//     'max' => [
//         'numeric' => 'The :attribute must not be greater than :max.',
//         'file' => 'The :attribute must not be greater than :max kilobytes.',
//         'string' => 'The :attribute must not be greater than :max characters.',
//         'array' => 'The :attribute must not have more than :max items.',
//     ],
//     'mimes' => 'The :attribute must be a file of type: :values.',
//     'mimetypes' => 'The :attribute must be a file of type: :values.',
//     'min' => [
//         'numeric' => 'The :attribute must be at least :min.',
//         'file' => 'The :attribute must be at least :min kilobytes.',
//         'string' => 'The :attribute must be at least :min characters.',
//         'array' => 'The :attribute must have at least :min items.',
//     ],
//     'multiple_of' => 'The :attribute must be a multiple of :value.',
//     'not_in' => 'The selected :attribute is invalid.',
//     'not_regex' => 'The :attribute format is invalid.',
//     'numeric' => 'The :attribute must be a number.',
//     'password' => 'The password is incorrect.',
//     'present' => 'The :attribute field must be present.',
//     'prohibited' => 'The :attribute field is prohibited.',
//     'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
//     'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
//     'prohibits' => 'The :attribute field prohibits :other from being present.',
//     'regex' => 'The :attribute format is invalid.',
//     'required' => 'The :attribute field is required.',
//     'required_array_keys' => 'The :attribute field must contain entries for: :values.',
//     'required_if' => 'The :attribute field is required when :other is :value.',
//     'required_unless' => 'The :attribute field is required unless :other is in :values.',
//     'required_with' => 'The :attribute field is required when :values is present.',
//     'required_with_all' => 'The :attribute field is required when :values are present.',
//     'required_without' => 'The :attribute field is required when :values is not present.',
//     'required_without_all' => 'The :attribute field is required when none of :values are present.',
//     'same' => 'The :attribute and :other must match.',
//     'size' => [
//         'numeric' => 'The :attribute must be :size.',
//         'file' => 'The :attribute must be :size kilobytes.',
//         'string' => 'The :attribute must be :size characters.',
//         'array' => 'The :attribute must contain :size items.',
//     ],
//     'starts_with' => 'The :attribute must start with one of the following: :values.',
//     'string' => 'The :attribute must be a string.',
//     'timezone' => 'The :attribute must be a valid timezone.',
//     'unique' => 'The :attribute has already been taken.',
//     'uploaded' => 'The :attribute failed to upload.',
//     'url' => 'The :attribute must be a valid URL.',
//     'uuid' => 'The :attribute must be a valid UUID.',

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | Here you may specify custom validation messages for attributes using the
//     | convention "attribute.rule" to name the lines. This makes it quick to
//     | specify a specific custom language line for a given attribute rule.
//     |
//     */

//     'custom' => [
//         'attribute-name' => [
//             'rule-name' => 'custom-message',
//         ],
//     ],

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Attributes
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines are used to swap our attribute placeholder
//     | with something more reader friendly such as "E-Mail Address" instead
//     | of "email". This simply helps us make our message more expressive.
//     |
//     */

//     'attributes' => [],

// ];

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other هو :value.',
    'active_url' => 'الرابط :attribute غير صالح.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد الأحرف في :attribute بين :min و :max.',
        'array' => 'يجب أن يحتوي :attribute على عدد بين :min و :max من العناصر.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خاطئًا.',
    'confirmed' => 'تأكيد :attribute غير مطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'القيمة المدخلة في :attribute ليست تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون :attribute تاريخًا يساوي :date.',
    'date_format' => 'القيمة في :attribute لا تتوافق مع الصيغة :format.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون :attribute مختلفًا عن :other.',
    'digits' => 'يجب أن يتكون :attribute من :digits أرقام.',
    'digits_between' => 'يجب أن يتراوح عدد الأرقام في :attribute بين :min و :max.',
    'dimensions' => 'الصورة :attribute بها أبعاد غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute بريدًا إلكترونيًا صالحًا.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'enum' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'exists' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
    'file' => 'يجب أن يكون حجم :attribute أكبر من :value كيلوبايت.',
    'string' => 'يجب أن يكون عدد الأحرف في :attribute أكبر من :value.',
    'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'gte' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
    'file' => 'يجب أن يكون حجم :attribute أكبر من أو يساوي :value كيلوبايت.',
    'string' => 'يجب أن يكون عدد الأحرف في :attribute أكبر من أو يساوي :value.',
    'array' => 'يجب أن يحتوي :attribute على :value عنصر أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
    'lt' => [
    'numeric' => 'يجب أن يكون :attribute أصغر من :value.',
    'file' => 'يجب أن يكون حجم :attribute أصغر من :value كيلوبايت.',
    'string' => 'يجب أن يكون عدد الأحرف في :attribute أصغر من :value.',
    'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصر.',
    ],
    'lte' => [
    'numeric' => 'يجب أن يكون :attribute أصغر من أو يساوي :value.',
    'file' => 'يجب أن يكون حجم :attribute أصغر من أو يساوي :value كيلوبايت.',
    'string' => 'يجب أن يكون عدد الأحرف في :attribute أصغر من أو يساوي :value.',
    'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'mac_address' => 'يجب أن يكون :attribute عنوان MAC صالحًا.',
    'max' => [
    'numeric' => 'لا يجب أن يكون :attribute أكبر من :max.',
    'file' => 'لا يجب أن يكون حجم :attribute أكبر من :max كيلوبايت.',
    'string' => 'لا يجب أن يكون عدد الأحرف في :attribute أكبر من :max.',
    'array' => 'لا يجب أن يحتوي :attribute على أكثر من :max عنصر.',
    ],
    'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'min' => [
    'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
    'file' => 'يجب أن يكون حجم :attribute على الأقل :min كيلوبايت.',
    'string' => 'يجب أن يكون عدد الأحرف في :attribute على الأقل :min.',
    'array' => 'يجب أن يحتوي :attribute على الأقل على :min عنصر.',
    ],
    'multiple_of' => 'يجب أن يكون :attribute مضاعفًا لـ :value.',
    'not_in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'not_regex' => 'تنسيق :attribute غير صالح.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'regex' => 'تنسيق :attribute غير صالح.',
    'required' => 'حقل :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'حقل :attribute مطلوب عند وجود :values.',
    'required_without' => 'حقل :attribute مطلوب عند عدم وجود :values.',
    'required_without_all' => 'حقل :attribute مطلوب عند عدم وجود أي من :values.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other في :values.',
    'same' => 'يجب أن يتطابق :attribute و :other.',
    'size' => [
    'numeric' => 'يجب أن يكون :attribute بحجم :size.',
    'file' => 'يجب أن يكون حجم :attribute بحجم :size كيلوبايت.',
    'string' => 'يجب أن يحتوي :attribute على :size أحرف.',
    'array' => 'يجب أن يحتوي :attribute على :size عنصرًا.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
    'unique' => 'قيمة :attribute مُستخدمة بالفعل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'url' => 'تنسيق :attribute غير صالح.',
    'uuid' => 'يجب أن يكون :attribute UUID صالحًا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
