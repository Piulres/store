<?php

return [
    'accepted'         => 'Поле :attribute должно быть эквивалентно значениям \"yes\", \"on\", \"1\", или \"true\"',
    'active_url'       => 'Поле :attribute не является действительным URL',
    'after'            => 'Поле :attribute должно соответствовать дате идущей после даты :date.',
    'after_or_equal'   => 'Поле :attribute должно соответствовать дате, равной или идущей после даты :date.',
    'alpha'            => 'Поле :attribute может содержать только буквы',
    'alpha_dash'       => 'Поле :attribute может содержать только буквы, цифры и тире',
    'alpha_num'        => 'Поле :attribute может содержать только буквы и цифры',
    'latin'            => 'Значение поля :attribute может содержать только латинские буквы',
    'latin_dash_space' => ':attribute может содержать только основные буквы латинского алфавита ISO, цифры, тире, дефисы и пробелы.',
    'array'            => 'Поле :attribute должно быть массивом',
    'before'           => 'Поле :attribute должно соответствовать дате идущей до даты :date.',
    'before_or_equal'  => 'Поле :attribute должно соответствовать дате, равной или идущей до даты :date.',
    'between'          => [
        'numeric' => 'Значение поля :attribute должно находится в диапазоне от :min до :max',
        'file'    => 'размер загружаемого файла в поле :attribute должно находится в диапазоне от :min до :max Кб',
        'string'  => 'Длина значение поля :attribute должна находится в диапазоне от :min до :max символов',
        'array'   => 'Поле :attribute должно содержать от :min до :max элементов',
    ],
    'boolean'        => 'Поле :attribute должно иметь значение true или false',
    'confirmed'      => 'Поле :attribute и подтверждающее его поле не совпадают',
    'date'           => 'Значение поле :attribute не является датой в верном формате',
    'date_equals'    => 'Поле :attribute должен быть датой, равной :date.',
    'date_format'    => 'Значение поля :attribute не соответствует формату :format.',
    'different'      => 'Значения полей :attribute и :other должны отличатся',
    'digits'         => 'Значение поля :attribute должно соответствовать цифрам :digits',
    'digits_between' => 'Значение поля :attribute должно находится в диапазоне от :min до :max цыфр',
    'dimensions'     => 'Изображение загруженное в поле :attribute имеет недопустимые размеры',
    'distinct'       => 'Массив в поле :attribute не должен содержать дублирующих значений',
    'email'          => 'Значение поля :attribute должно быть действительным адресом электронной почты',
    'ends_with'      => 'Поле :attribute должен заканчиваться одним из значений: :values.',
    'exists'         => 'Значение поля :attribute недействительно',
    'file'           => 'Поле :attribute может принимать только файлы',
    'filled'         => 'Поле :attribute обязательно',
    'gt'             => [
        'numeric' => 'Поле :attribute должно быть больше, чем :value.',
        'file'    => 'Поле :attribute должно быть больше, чем :value Кб.',
        'string'  => 'Поле :attribute должно быть больше, чем :value знаков.',
        'array'   => 'Поле :attribute должно содержать больше, чем :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно быть больше или равно :value.',
        'file'    => 'Поле :attribute должно быть больше или равно :value Кб.',
        'string'  => 'Поле :attribute должно быть больше или равно :value знаков.',
        'array'   => 'Поле :attribute должно содержать :value или более элементов.',
    ],
    'image'    => 'Поле :attribute должно быть изображением.',
    'in'       => 'Значение поля :attribute недействительно.',
    'in_array' => 'Значение поля :attribute должно также присутствовать в поле :other.',
    'integer'  => 'Значение поля :attribute должно быть целым числом.',
    'ip'       => 'Значение поля :attribute должно быть действительным IP адресом.',
    'ipv4'     => 'Значение поля :attribute должно быть действительным IPv4 адресом.',
    'ipv6'     => 'Значение поля :attribute должно быть действительным IPv6 адресом.',
    'json'     => 'Значение поля :attribute должно быть действительной JSON строкой.',
    'lt'       => [
        'numeric' => 'Поле :attribute должно быть меньше :value.',
        'file'    => 'Значение поля :attribute должно быть меньше :value Кб',
        'string'  => 'Количество символов в поле :attribute должно быть меньше :value.',
        'array'   => 'Количество элементов в поле :attribute должно быть меньше :value',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file'    => 'Размер файла в поле :attribute должен быть меньше :value Кб',
        'string'  => 'Количество символов в поле :attribute должно быть меньше или равно :value.',
        'array'   => 'Количество элементов в поле :attribute должно быть меньше или равно :value.',
    ],
    'max' => [
        'numeric' => 'Значение поля :attribute не должно превышать значение :max',
        'file'    => 'Значение поля :attribute не должно превышать значение :max килобайт',
        'string'  => 'Значение поля :attribute не должно быть длиннее :max символов',
        'array'   => 'Поле :attribute не должно содержать более чем :max элементов в массиве',
    ],
    'mimes'     => 'Файл загружаемый в поле :attribute должен соответствовать форматам: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values',
    'min'       => [
        'numeric' => 'Значение поля :attribute должно быть не меньше :min',
        'file'    => 'Файл загружаемый в поле :attribute должно быть размером не меньше :min килобайт',
        'string'  => 'Значение поля :attribute не должно быть короче :min символов',
        'array'   => 'Поле :attribute не должно содержать менее чем :min элементов в массиве',
    ],
    'not_in'               => 'Значение поля :attribute недействительно',
    'not_regex'            => 'Поле :attribute имеет неверный формат',
    'numeric'              => 'Значение поля :attribute должно быть числом',
    'password'             => 'Пароль неверен.',
    'present'              => 'Поле :attribute должно обязательно присутствовать в запросе (но может быть пустым)',
    'regex'                => 'В поле :attribute переданы данные неверного формата',
    'required'             => 'Поле :attribute обязательно',
    'required_if'          => 'Поле :attribute обязательно когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно когда :other равно одному из значений :values.',
    'required_with'        => 'Поле :attribute обязательно когда :values есть в запросе',
    'required_with_all'    => 'Поле :attribute обязательно когда :values есть в запросе',
    'required_without'     => 'Поле :attribute обязательно когда :values отсутствуют в запросе',
    'required_without_all' => 'Поле :attribute обязательно когда ни одного из значений :values нет в запросе',
    'same'                 => 'Поле :attribute и поле :other должны совпадать',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть размера :size.',
        'file'    => 'Поле :attribute должно быть размера :size килобайт',
        'string'  => 'Поле :attribute должно быть размера :size символов',
        'array'   => 'Поле :attribute должно иметь :size элементов',
    ],
    'starts_with' => ':attribute должен начинаться одним из значений: :values.',
    'string'      => 'Поле :attribute должно быть строкой',
    'timezone'    => 'Поле :attribute должно быть действительной зоной',
    'unique'      => 'Поле :attribute уже занято',
    'uploaded'    => 'Ошибка загрузки поля :attribute',
    'url'         => 'Поле :attribute имеет неверный формат',
    'uuid'        => 'Поле :attribute должен быть UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'Поле :attribute содержит зарезервированное слово',
    'dont_allow_first_letter_number' => 'Первый символ поля \":input\" не может быть цифрой',
    'exceeds_maximum_number'         => 'Значение поля :attribute превышает максимальное число символов',
    'db_column'                      => ':attribute может содержать только основные буквы латинского алфавита ISO, цифры, тире и не может начинаться с цифры..',
    'attributes'                     => [],
];
