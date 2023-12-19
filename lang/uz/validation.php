<?php

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

    'accepted' => ':attribute qabul qilinishi shart.',
    'accepted_if' => ':other :value bo\'lib qo\'yilsa, :attribute qabul qilinishi shart.',
    'active_url' => ':attribute haqiqiy URL emas.',
    'after' => ':attribute :date dan keyin sanalgan sanag\'a bo\'lishi kerak.',
    'after_or_equal' => ':attribute :date dan keyin yoki unga teng sanalgan sanag\'a bo\'lishi kerak.',
    'alpha' => ':attribute faqat harflarni o\'z ichiga olishi kerak.',
    'alpha_dash' => ':attribute faqat harflar, raqamlar, chiziqlar va pastki chiziq belgilarini o\'z ichiga olishi kerak.',
    'alpha_num' => ':attribute faqat harflar va raqamlarni o\'z ichiga olishi kerak.',
    'array' => ':attribute ro\'yxat bo\'lishi kerak.',
    'ascii' => ':attribute faqat bitta baytli alfa-soniy belgilardan va simvollardan iborat bo\'lishi kerak.',
    'before' => ':attribute :date dan oldin bo\'lishi kerak.',
    'before_or_equal' => ':attribute :date dan oldin yoki unga teng bo\'lgan sanag\'a bo\'lishi kerak.',
    'between' => [
        'array' => ':attribute :min va :max tadan oshmasligi kerak.',
        'file' => ':attribute :min va :max kilobaytdan kam bo\'lmasligi kerak.',
        'numeric' => ':attribute :min va :max oralig\'ida bo\'lishi kerak.',
        'string' => ':attribute :min va :max belgi orasida bo\'lishi kerak.',
    ],
    'boolean' => ':attribute maydoni haqiqiy yoki yolg\'on bo\'lishi kerak.',
    'confirmed' => ':attribute tasdiqlovchi bilan mos kelmadi.',
    'current_password' => 'Parol noto\'g\'ri.',
    'date' => ':attribute haqiqiy sanag\' emas.',
    'date_equals' => ':attribute :date ga teng sanag\' bo\'lishi kerak.',
    'date_format' => ':attribute :format formatiga mos kelmaydi.',
    'decimal' => ':attribute :decimal belgisi bo\'yicha bo\'lishi kerak.',
    'declined' => ':attribute rad etilishi kerak.',
    'declined_if' => ':other :value bo\'lib qo\'yilsa, :attribute rad etilishi kerak.',
    'different' => ':attribute va :other farqli bo\'lishi kerak.',
    'digits' => ':attribute :digits raqamdan iborat bo\'lishi kerak.',
    'digits_between' => ':attribute uzunligi :min va :max oralig\'ida bo\'lishi kerak.',
    'dimensions' => ':attribute yaroqsiz tasvir o\'lchamlarga ega.',
    'distinct' => ':attribute maydoni takrorlanuvchi qiymatga ega bo\'lishi kerak.',
    'doesnt_end_with' => ':attribute quyidagilardan biri bilan tugamaydi: :values.',
    'doesnt_start_with' => ':attribute quyidagilardan biri bilan boshlanmaydi: :values.',
    'email' => ':attribute haqiqiy elektron pochta manzili bo\'lishi kerak.',
    'ends_with' => ':attribute quyidagilardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :attribute haqiqiy emas.',
    'exists' => 'Tanlangan :attribute haqiqiy emas.',
    'file' => ':attribute fayl bo\'lishi kerak.',
    'filled' => ':attribute maydoni qiymatga ega bo\'lishi kerak.',
    'gt' => [
        'array' => ':attribute :value dan ko\'p narsalarni o\'z ichiga olishi kerak.',
        'file' => ':attribute :value kilobaytdan ko\'p bo\'lishi kerak.',
        'numeric' => ':attribute :value dan katta bo\'lishi kerak.',
        'string' => ':attribute :value belgidan ko\'p bo\'lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute :value narsalardan ko\'proq yoki teng bo\'lishi kerak.',
        'file' => ':attribute :value kilobaytdan ko\'p yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute :value dan katta yoki teng bo\'lishi kerak.',
        'string' => ':attribute :value belgidan ko\'proq yoki teng bo\'lishi kerak.',
    ],
    'image' => ':attribute tasvir bo\'lishi kerak.',
    'in' => 'Tanlangan :attribute haqiqiy emas.',
    'in_array' => ':attribute maydoni :other da mavjud emas.',
    'integer' => ':attribute butun son bo\'lishi kerak.',
    'ip' => ':attribute haqiqiy IP manzil bo\'lishi kerak.',
    'ipv4' => ':attribute haqiqiy IPv4 manzil bo\'lishi kerak.',
    'ipv6' => ':attribute haqiqiy IPv6 manzil bo\'lishi kerak.',
    'json' => ':attribute JSON formatida bo\'lishi kerak.',
    'lowercase' => ':attribute faqat kichik harflardan iborat bo\'lishi kerak.',
    'lt' => [
        'array' => ':attribute :value dan kam narsalarni o\'z ichiga olishi kerak.',
        'file' => ':attribute :value kilobaytdan kam bo\'lishi kerak.',
        'numeric' => ':attribute :value dan kichik bo\'lishi kerak.',
        'string' => ':attribute :value belgidan kam bo\'lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute :value narsalarni o\'z ichiga olishi kerak yoki :value bilan teng bo\'lishi kerak.',
        'file' => ':attribute :value kilobaytdan kam yoki teng bo\'lishi kerak.',
        'numeric' => ':attribute :value dan kichik yoki teng bo\'lishi kerak.',
        'string' => ':attribute :value belgidan kam yoki teng bo\'lishi kerak.',
    ],
    'mac_address' => ':attribute haqiqiy MAC manzil bo\'lishi kerak.',
    'max' => [
        'array' => ':attribute :max narsadan oshmasligi kerak.',
        'file' => ':attribute :max kilobaytdan oshmasligi kerak.',
        'numeric' => ':attribute :max dan katta bo\'lmasligi kerak.',
        'string' => ':attribute :max belgidan oshmasligi kerak.',
    ],
    'max_digits' => ':attribute uzunligi :max raqamdan oshmasligi kerak.',
    'mimes' => ':attribute turi quyidagi kiritilganlaridan biri bo\'lishi kerak: :values.',
    'mimetypes' => ':attribute turi quyidagi kiritilganlaridan biri bo\'lishi kerak: :values.',
    'min' => [
        'array' => ':attribute kamida :min narsa bo\'lishi kerak.',
        'file' => ':attribute kamida :min kilobayt bo\'lishi kerak.',
        'numeric' => ':attribute kamida :min bo\'lishi kerak.',
        'string' => ':attribute kamida :min belgi bo\'lishi kerak.',
    ],
    'min_digits' => ':attribute kamida :min raqamdan bo\'lishi kerak.',
    'multiple_of' => ':attribute :value ning ko\'paytmasi bo\'lishi kerak.',
    'not_in' => 'Tanlangan :attribute haqiqiy emas.',
    'not_regex' => ':attribute formati yaroqsiz.',
    'numeric' => ':attribute raqam bo\'lishi kerak.',
    'password' => [
        'letters' => ':attribute kamida bitta harfni o\'z ichiga olishi kerak.',
        'mixed' => ':attribute kamida bitta katta harf va bitta kichik harfni o\'z ichiga olishi kerak.',
        'numbers' => ':attribute kamida bitta raqamni o\'z ichiga olishi kerak.',
        'symbols' => ':attribute kamida bitta belgini o\'z ichiga olishi kerak.',
        'uncompromised' => 'Beringan :attribute ma\'lumotlari yo\'qoldi. Iltimos, boshqa :attribute tanlang.',
    ],
    'present' => ':attribute maydoni mavjud bo\'lishi kerak.',
    'prohibited' => ':attribute maydoni taqiqlangan.',
    'prohibited_if' => ':other :value bo\'lib qo\'yilsa, :attribute taqiqlangan.',
    'prohibited_unless' => ':other :values dagi biri bo\'lmaguncha, :attribute taqiqlangan.',
    'prohibits' => ':attribute maydoni :other ni mavjud bo\'lmasligiga olib keladi.',
    'regex' => ':attribute formati yaroqsiz.',
    'required' => ':attribute maydoni to\'ldirilishi shart.',
    'required_array_keys' => ':attribute maydoni quyidagi kalitlarni o\'z ichiga olishi kerak: :values.',
    'required_if' => ':other :value bo\'lib qo\'yilsa, :attribute maydoni to\'ldirilishi shart.',
    'required_if_accepted' => ':other qabul qilinishi kerak bo\'lgan bo\'lsa, :attribute maydoni to\'ldirilishi shart.',
    'required_unless' => ':other :values dagi biri bo\'lmaguncha, :attribute maydoni to\'ldirilishi shart.',
    'required_with' => ':values mavjud bo\'lganida, :attribute maydoni to\'ldirilishi shart.',
    'required_with_all' => ':values mavjud bo\'lganida, :attribute maydoni to\'ldirilishi shart.',
    'required_without' => ':values mavjud bo\'lmaganida, :attribute maydoni to\'ldirilishi shart.',
    'required_without_all' => ':values mavjud bo\'lmaganida, :attribute maydoni to\'ldirilishi shart.',
    'same' => ':attribute va :other bir xil bo\'lishi kerak.',
    'size' => [
        'array' => ':attribute uzunligi :size narsadan iborat bo\'lishi kerak.',
        'file' => ':attribute hajmi :size kilobaytdan kam bo\'lmasligi kerak.',
        'numeric' => ':attribute qiymati :size ga teng bo\'lishi kerak.',
        'string' => ':attribute uzunligi :size belgidan iborat bo\'lishi kerak.',
    ],
    'starts_with' => ':attribute quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute qator bo\'lishi kerak.',
    'timezone' => ':attribute haqiqiy vaqt zonasi bo\'lishi kerak.',
    'unique' => ':attribute allaqachon olingan.',
    'uploaded' => ':attribute yuklanmadi.',
    'uppercase' => ':attribute faqat katta harflardan iborat bo\'lishi kerak.',
    'url' => ':attribute haqiqiy URL bo\'lishi kerak.',
    'ulid' => ':attribute haqiqiy ULID bo\'lishi kerak.',
    'uuid' => ':attribute haqiqiy UUID bo\'lishi kerak.',


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
