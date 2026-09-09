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

    'accepted'             => ':attribute ni qabul qilishingiz kerak.',
    'accepted_if'          => ':other :value ga teng bo‘lganda, :attribute ni qabul qilishingiz kerak.',
    'active_url'           => ':attribute ga noto‘g‘ri URL kiritildi.',
    'after'                => ':attribute da sana :date dan keyin bo‘lishi kerak.',
    'after_or_equal'       => ':attribute da sana :date ga teng yoki undan keyin bo‘lishi kerak.',
    'alpha'                => ':attribute faqat harflarni qabul qilishi mumkin.',
    'alpha_dash'           => ':attribute faqat harflar, sonlar va chiziqchalarni qabul qilishi mumkin.',
    'alpha_num'            => ':attribute faqat harflar va sonlarni qabul qilishi mumkin.',
    'any_of'               => ':attribute maydoni yaroqsiz.',
    'array'                => ':attribute qatordan iborat bo‘lishi kerak.',
    'array_keys'           => ':attribute maydoni faqat quyidagi kalitlarni o‘z ichiga olishi kerak: :values.',
    'ascii'                => ':attribute faqat bitta baytli lotin harf-raqam va belgilardan iborat bo‘lishi kerak.',
    'base64'               => ':attribute maydoni yaroqli Base64 qatori bo‘lishi kerak.',
    'before'               => ':attribute da sana :date gacha bo‘lishi kerak.',
    'before_or_equal'      => ':attribute da sana :date ga teng yoki undan oldin bo‘lishi kerak.',
    'between'              => [
        'numeric' => ':attribute ning qiymati :min va :max orasida bo‘lishi kerak.',
        'file'    => ':attribute dagi faylning hajmi :min va :max kilobayt orasida bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :min va :max orasida bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :min va :max orasida bo‘lishi kerak.',
    ],
    'boolean'              => ':attribute maydoni faqat mantiqiy qiymatni qabul qiladi.',
    'can'                  => ':attribute maydonida ruxsat etilmagan qiymat mavjud.',
    'confirmed'            => ':attribute tasdiqlangani bilan mos kelmadi.',
    'contains'             => ':attribute maydonida talab qilingan qiymat mavjud emas.',
    'current_password'     => 'Parol noto‘g‘ri.',
    'date'                 => ':attribute sana emas.',
    'date_equals'          => ':attribute sana :date ga teng bo‘lishi kerak.',
    'date_format'          => ':attribute maydoni :format formatga mos kelmadi.',
    'decimal'              => ':attribute :decimal kasr xonaga ega bo‘lishi kerak.',
    'declined'             => ':attribute rad etilishi kerak.',
    'declined_if'          => ':other :value ga teng bo‘lganda, :attribute rad etilishi kerak.',
    'different'            => ':attribute va :other maydonlari farqli bo‘lishi kerak.',
    'digits'               => ':attribute :digits raqamdan iborat bo‘lishi kerak.',
    'digits_between'       => ':attribute uzunligi :min va :max orasida bo‘lishi kerak.',
    'dimensions'           => ':attribute noto‘g‘ri tasvir o‘lchamlarga ega.',
    'distinct'             => ':attribute maydoni takrorlanuvchi qiymatlardan iborat.',
    'doesnt_contain'       => ':attribute maydoni quyidagilardan birortasini o‘z ichiga olmasligi kerak: :values.',
    'doesnt_end_with'      => ':attribute quyidagi qiymatlardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with'    => ':attribute quyidagi qiymatlardan biri bilan boshlanmasligi kerak: :values.',
    'email'                => ':attribute haqiqiy elektron pochta manzili bo‘lishi kerak.',
    'encoding'             => ':attribute maydoni :encoding kodlashda bo‘lishi kerak.',
    'ends_with'            => ':attribute quyidagi qiymatlarning biri bilan tugashi kerak: :values.',
    'enum'                 => 'Tanlangan :attribute yaroqsiz.',
    'exists'               => ':attribute uchun tanlangan qiymat noto‘g‘ri.',
    'extensions'           => ':attribute quyidagi kengaytmalardan biriga ega bo‘lishi kerak: :values.',
    'file'                 => ':attribute fayl bo‘lishi kerak.',
    'filled'               => ':attribute maydoni to‘ldirilishi shart.',
    'gt'                   => [
        'numeric' => ':attribute maydoni :value dan katta bo‘lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan katta bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan katta bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan katta bo‘lishi kerak.',
    ],
    'gte'                  => [
        'numeric' => ':attribute maydoni :value dan katta yoki teng bo‘lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan katta yoki teng bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan katta yoki teng bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan katta yoki teng bo‘lishi kerak.',
    ],
    'hex_color'            => ':attribute o‘nlik rangga ega bo‘lishi kerak.',
    'image'                => ':attribute tasvir (rasm) bo‘lishi kerak.',
    'in'                   => ':attribute uchun tanlangan qiymat xato.',
    'in_array'             => ':attribute maydonining qiymati :other da mavjud emas.',
    'in_array_keys'        => ':attribute maydoni quyidagi kalitlardan kamida bittasini o‘z ichiga olishi kerak: :values.',
    'integer'              => ':attribute butun son bo‘lishi kerak.',
    'ip'                   => ':attribute haqiqiy IP manzil bo‘lishi kerak.',
    'ipv4'                 => ':attribute haqiqiy IPv4 manzil bo‘lishi kerak.',
    'ipv6'                 => ':attribute haqiqiy IPv6 manzil bo‘lishi kerak.',
    'json'                 => ':attribute JSON qatori bo‘lishi kerak.',
    'list'                 => ':attribute maydoni ro‘yxat (list) bo‘lishi kerak.',
    'lowercase'            => ':attribute kichik harflardan iborat bo‘lishi kerak.',
    'lt'                   => [
        'numeric' => ':attribute maydoni :value dan kichik bo‘lishi kerak.',
        'file'    => ':attribute dagi fayl hajmi :value kilobaytdan kichik bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan kichik bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan kichik bo‘lishi kerak.',
    ],
    'lte'                  => [
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo‘lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan kichik yoki teng bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan kichik yoki teng bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan kichik yoki teng bo‘lishi kerak.',
    ],
    'mac_address'          => ':attribute yaroqli MAC manzil bo‘lishi kerak.',
    'max'                  => [
        'numeric' => ':attribute ning qiymati :max dan oshmasligi kerak.',
        'file'    => ':attribute dagi faylning hajmi :max kilobaytdan oshmasligi kerak.',
        'string'  => ':attribute ning belgilar soni :max tadan oshmasligi kerak.',
        'array'   => ':attribute ning elementlar soni :max tadan oshmasligi kerak.',
    ],
    'max_digits'           => ':attribute :max ta raqamdan oshmasligi kerak.',
    'mimes'                => ':attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'mimetypes'            => ':attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'min'                  => [
        'numeric' => ':attribute ning qiymati :min dan kam bo‘lmasligi kerak.',
        'file'    => ':attribute dagi faylning hajmi :min kilobaytdan kam bo‘lmasligi kerak.',
        'string'  => ':attribute dagi belgilar soni :min tadan kam bo‘lmasligi kerak.',
        'array'   => ':attribute dagi elementlar soni :min tadan kam bo‘lmasligi kerak.',
    ],
    'min_digits'           => ':attribute kamida :min ta raqamga ega bo‘lishi kerak.',
    'missing'              => ':attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_if'           => ':other :value ga teng bo‘lganda, :attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_unless'       => ':other :value ga teng bo‘lmasa, :attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_with'         => ':values mavjud bo‘lsa, :attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_with_all'     => ':values mavjud bo‘lsa, :attribute maydoni mavjud bo‘lmasligi kerak.',
    'multiple_of'          => ':attribute qiymati :value ning karralisi bo‘lishi kerak.',
    'not_in'               => ':attribute uchun tanlangan qiymat xato.',
    'not_regex'            => ':attribute uchun tanlangan format xato.',
    'numeric'              => ':attribute son bo‘lishi kerak.',
    'password'             => [
        'letters'       => ':attribute kamida bitta harfni o‘z ichiga olishi kerak.',
        'mixed'         => ':attribute kamida bitta katta va bitta kichik harfni o‘z ichiga olishi kerak.',
        'numbers'       => ':attribute kamida bitta raqamni o‘z ichiga olishi kerak.',
        'symbols'       => ':attribute kamida bitta belgini o‘z ichiga olishi kerak.',
        'uncompromised' => 'Kiritilgan :attribute ma’lumotlar sizib chiqishida aniqlangan. Iltimos, boshqa :attribute tanlang.',
    ],
    'present'              => ':attribute maydoni ko‘rsatilishi kerak.',
    'present_if'           => ':other :value ga teng bo‘lganda, :attribute maydoni ko‘rsatilishi kerak.',
    'present_unless'       => ':other :value ga teng bo‘lmasa, :attribute maydoni ko‘rsatilishi kerak.',
    'present_with'         => ':values mavjud bo‘lsa, :attribute maydoni ko‘rsatilishi kerak.',
    'present_with_all'     => ':values mavjud bo‘lsa, :attribute maydoni ko‘rsatilishi kerak.',
    'prohibited'           => ':attribute maydoni taqiqlangan.',
    'prohibited_if'        => ':other :value ga teng bo‘lganda, :attribute maydoni taqiqlangan.',
    'prohibited_if_accepted' => ':other qabul qilingan bo‘lsa, :attribute maydoni taqiqlangan.',
    'prohibited_if_declined' => ':other rad etilgan bo‘lsa, :attribute maydoni taqiqlangan.',
    'prohibited_unless'    => ':other :values ichida bo‘lmasa, :attribute maydoni taqiqlangan.',
    'prohibits'            => ':attribute maydoni :other maydonining mavjud bo‘lishini taqiqlaydi.',
    'regex'                => ':attribute maydoni xato formatda.',
    'required'             => ':attribute maydoni to‘ldirilishi shart.',
    'required_array_keys'  => ':attribute quyidagi kalitlar uchun yozuvlarni o‘z ichiga olishi kerak: :values.',
    'required_if'          => ':other maydoni :value ga teng bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_if_accepted' => ':other qabul qilingan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_if_declined' => ':other rad etilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_unless'      => ':other maydoni :values ga teng bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'required_with'        => ':values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_with_all'    => ':values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without'     => ':values ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without_all' => ':values lardan hech biri ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'same'                 => ':attribute ning qiymati :other bilan bir xil bo‘lishi kerak.',
    'size'                 => [
        'numeric' => ':attribute qiymati :size ga teng bo‘lishi kerak.',
        'file'    => ':attribute dagi faylning hajmi :size kilobaytga teng bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :size ga teng bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :size ga teng bo‘lishi kerak.',
    ],
    'starts_with'          => ':attribute quyidagi qiymatlardan biri bilan boshlanishi kerak: :values.',
    'string'               => ':attribute qator bo‘lishi kerak.',
    'timezone'             => ':attribute ning qiymati mavjud vaqt mintaqasi bo‘lishi kerak.',
    'ulid'                 => ':attribute to‘g‘ri ULID bo‘lishi kerak.',
    'unique'               => ':attribute maydonining bunday qiymati mavjud. Iltimos boshqa qiymat kiriting.',
    'uploaded'             => ':attribute ni yuklash muvaffaqiyatli amalga oshmadi.',
    'uppercase'            => ':attribute katta harflardan iborat bo‘lishi kerak.',
    'url'                  => ':attribute noto‘g‘ri formatga ega.',
    'uuid'                 => ':attribute to‘g‘ri UUID qiymatga ega bo‘lishi kerak.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'Ism',
        'username'              => 'Nickname',
        'email'                 => 'Elektron manzil',
        'first_name'            => 'Ism',
        'last_name'             => 'Familiya',
        'password'              => 'Parol',
        'password_confirmation' => 'Parolni tasdiqlash',
        'city'                  => 'Shahar',
        'country'               => 'Davlat',
        'address'               => 'Manzil',
        'phone'                 => 'Telefon',
        'mobile'                => 'Mobil telefon',
        'age'                   => 'Yosh',
        'sex'                   => 'Jins',
        'gender'                => 'Jins',
        'day'                   => 'Kun',
        'month'                 => 'Oy',
        'year'                  => 'Yil',
        'hour'                  => 'Soat',
        'minute'                => 'Daqiqa',
        'second'                => 'Soniya',
        'title'                 => 'Nomi',
        'content'               => 'Kontent',
        'description'           => 'Izoh',
        'excerpt'               => 'Parcha',
        'date'                  => 'Sana',
        'time'                  => 'Vaqt',
        'available'             => 'Mavjud',
        'size'                  => 'O‘lcham',
    ],

];
