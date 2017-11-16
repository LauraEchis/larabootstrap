<?php

return [

//    /*
//    |--------------------------------------------------------------------------
//    | Validation Language Lines
//    |--------------------------------------------------------------------------
//    |
//    | The following language lines contain the default error messages used by
//    | the validator class. Some of these rules have multiple versions such
//    | as the size rules. Feel free to tweak each of these messages here.
//    |
//    */
//
//    'accepted'             => 'The :attribute must be accepted.',
//    'active_url'           => 'The :attribute is not a valid URL.',
//    'after'                => 'The :attribute must be a date after :date.',
//    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
//    'alpha'                => 'The :attribute may only contain letters.',
//    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
//    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
//    'array'                => 'The :attribute must be an array.',
//    'before'               => 'The :attribute must be a date before :date.',
//    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
//    'between'              => [
//        'numeric' => 'The :attribute must be between :min and :max.',
//        'file'    => 'The :attribute must be between :min and :max kilobytes.',
//        'string'  => 'The :attribute must be between :min and :max characters.',
//        'array'   => 'The :attribute must have between :min and :max items.',
//    ],
//    'boolean'              => 'The :attribute field must be true or false.',
//    'confirmed'            => 'The :attribute confirmation does not match.',
//    'date'                 => 'The :attribute is not a valid date.',
//    'date_format'          => 'The :attribute does not match the format :format.',
//    'different'            => 'The :attribute and :other must be different.',
//    'digits'               => 'The :attribute must be :digits digits.',
//    'digits_between'       => 'The :attribute must be between :min and :max digits.',
//    'dimensions'           => 'The :attribute has invalid image dimensions.',
//    'distinct'             => 'The :attribute field has a duplicate value.',
//    'email'                => 'The :attribute must be a valid email address.',
//    'exists'               => 'The selected :attribute is invalid.',
//    'file'                 => 'The :attribute must be a file.',
//    'filled'               => 'The :attribute field must have a value.',
//    'image'                => 'The :attribute must be an image.',
//    'in'                   => 'The selected :attribute is invalid.',
//    'in_array'             => 'The :attribute field does not exist in :other.',
//    'integer'              => 'The :attribute must be an integer.',
//    'ip'                   => 'The :attribute must be a valid IP address.',
//    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
//    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
//    'json'                 => 'The :attribute must be a valid JSON string.',
//    'max'                  => [
//        'numeric' => 'The :attribute may not be greater than :max.',
//        'file'    => 'The :attribute may not be greater than :max kilobytes.',
//        'string'  => 'The :attribute may not be greater than :max characters.',
//        'array'   => 'The :attribute may not have more than :max items.',
//    ],
//    'mimes'                => 'The :attribute must be a file of type: :values.',
//    'mimetypes'            => 'The :attribute must be a file of type: :values.',
//    'min'                  => [
//        'numeric' => 'The :attribute must be at least :min.',
//        'file'    => 'The :attribute must be at least :min kilobytes.',
//        'string'  => 'The :attribute must be at least :min characters.',
//        'array'   => 'The :attribute must have at least :min items.',
//    ],
//    'not_in'               => 'The selected :attribute is invalid.',
//    'numeric'              => 'The :attribute must be a number.',
//    'present'              => 'The :attribute field must be present.',
//    'regex'                => 'The :attribute format is invalid.',
//    'required'             => 'The :attribute field is required.',
//    'required_if'          => 'The :attribute field is required when :other is :value.',
//    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
//    'required_with'        => 'The :attribute field is required when :values is present.',
//    'required_with_all'    => 'The :attribute field is required when :values is present.',
//    'required_without'     => 'The :attribute field is required when :values is not present.',
//    'required_without_all' => 'The :attribute field is required when none of :values are present.',
//    'same'                 => 'The :attribute and :other must match.',
//    'size'                 => [
//        'numeric' => 'The :attribute must be :size.',
//        'file'    => 'The :attribute must be :size kilobytes.',
//        'string'  => 'The :attribute must be :size characters.',
//        'array'   => 'The :attribute must contain :size items.',
//    ],
//    'string'               => 'The :attribute must be a string.',
//    'timezone'             => 'The :attribute must be a valid zone.',
//    'unique'               => 'The :attribute has already been taken.',
//    'uploaded'             => 'The :attribute failed to upload.',
//    'url'                  => 'The :attribute format is invalid.',
//
//    /*
//    |--------------------------------------------------------------------------
//    | Custom Validation Language Lines
//    |--------------------------------------------------------------------------
//    |
//    | Here you may specify custom validation messages for attributes using the
//    | convention "attribute.rule" to name the lines. This makes it quick to
//    | specify a specific custom language line for a given attribute rule.
//    |
//    */
//
//    'custom' => [
//        'attribute-name' => [
//            'rule-name' => 'custom-message',
//        ],
//    ],
//
//    /*
//    |--------------------------------------------------------------------------
//    | Custom Validation Attributes
//    |--------------------------------------------------------------------------
//    |
//    | The following language lines are used to swap attribute place-holders
//    | with something more reader friendly such as E-Mail Address instead
//    | of "email". This simply helps us make messages a little cleaner.
//    |
//    */
//
//    'attributes' => [],


    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по умолчанию, используемые
    | классом, проверяющим значения (валидатором). Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */
    'accepted'             => 'Вы должны принять :attribute.',
    'active_url'           => 'Поле :attribute содержит недействительный URL.',
    'after'                => 'В поле :attribute должна быть дата после :date.',
    'after_or_equal'       => 'В поле :attribute должна быть дата после или равняться :date.',
    'alpha'                => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'           => 'Поле :attribute может содержать только буквы, цифры и дефис.',
    'alpha_num'            => 'Поле :attribute может содержать только буквы и цифры.',
    'array'                => 'Поле :attribute должно быть массивом.',
    'before'               => 'В поле :attribute должна быть дата до :date.',
    'before_or_equal'      => 'В поле :attribute должна быть дата до или равняться :date.',
    'between'              => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть между :min и :max.',
        'array'   => 'Количество элементов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean'              => 'Поле :attribute должно иметь значение логического типа.', // калька 'истина' или 'ложь' звучала бы слишком неестественно
    'confirmed'            => 'Поле :attribute не совпадает с подтверждением.',
    'date'                 => 'Поле :attribute не является датой.',
    'date_format'          => 'Поле :attribute не соответствует формату :format.',
    'different'            => 'Поля :attribute и :other должны различаться.',
    'digits'               => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between'       => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions'           => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct'             => 'Поле :attribute содержит повторяющееся значение.',
    'email'                => 'Поле :attribute должно быть действительным электронным адресом.',
    'file'                 => 'Поле :attribute должно быть файлом.',
    'filled'               => 'Поле :attribute обязательно для заполнения.',
    'exists'               => 'Выбранное значение для :attribute некорректно.',
    'image'                => 'Поле :attribute должно быть изображением.',
    'in'                   => 'Выбранное значение для :attribute ошибочно.',
    'in_array'             => 'Поле :attribute не существует в :other.',
    'integer'              => 'Поле :attribute должно быть целым числом.',
    'ip'                   => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4'                 => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6'                 => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json'                 => 'Поле :attribute должно быть JSON строкой.',
    'max'                  => [
        'numeric' => 'Поле :attribute не может быть более :max.',
        'file'    => 'Размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute не может превышать :max.',
        'array'   => 'Количество элементов в поле :attribute не может превышать :max.',
    ],
    'mimes'                => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes'            => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Размер файла в поле :attribute должен быть не менее :min Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть не менее :min.',
        'array'   => 'Количество элементов в поле :attribute должно быть не менее :min.',
    ],
    'not_in'               => 'Выбранное значение для :attribute ошибочно.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'regex'                => 'Поле :attribute имеет ошибочный формат.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without'     => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same'                 => 'Значение :attribute должно совпадать с :other.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'file'    => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть равным :size.',
        'array'   => 'Количество элементов в поле :attribute должно быть равным :size.',
    ],
    'string'               => 'Поле :attribute должно быть строкой.',
    'timezone'             => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique'               => 'Такое значение поля :attribute уже существует.',
    'uploaded'             => 'Загрузка поля :attribute не удалась.',
    'url'                  => 'Поле :attribute имеет ошибочный формат.',
    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    | http://laravel.com/docs/validation#custom-error-messages
    | Пример использования
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Нам необходимо знать Ваш электронный адрес!',
    |       ],
    |   ],
    |
    */
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    |
    | Пример использования
    |
    |   'attributes' => [
    |       'email' => 'электронный адрес',
    |   ],
    |
    */
    'attributes'           => [
        'email' => 'Электронный адрес',
        'password' => 'Пароль',
        'login' => 'Логин'
        //
    ],

];
