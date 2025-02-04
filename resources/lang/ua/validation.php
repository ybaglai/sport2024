<?php

return [
    'accepted'         => 'Поле :attribute має бути еквівалентним значенням \"yes\", \"on\", \"1\", або \"true\"',
    'active_url'       => 'Поле :attribute не є дійсним URL',
    'after'            => 'Поле :attribute має відповідати даті яка йде після дати: date.',
    'after_or_equal'   => 'Поле :attribute має відповідати даті яка йде після дати: date включно.',
    'alpha'            => 'Поле :attribute може містити тільки літери',
    'alpha_dash'       => 'Поле :attribute може містити тільки букви, цифри та тире',
    'alpha_num'        => 'Поле :attribute може містити тільки букви і цифри',
    'latin'            => 'Поле :attribute має містити лише ISO основні латинські літери.',
    'latin_dash_space' => 'Поле :attribute має містити лише ISO основні латинські літери, цифри, тире, дефіси та пробіли.',
    'array'            => 'Поле :attribute має бути масивом',
    'before'           => 'Поле :attribute має відповідати даті яка йде до дати: date.',
    'before_or_equal'  => 'Поле :attribute має відповідати даті яка йде до дати: date включно.',
    'between'          => [
        'numeric' => 'Значення поля :attribute повинно знаходитися в діапазоні від: min до: max',
        'file'    => 'розмір файлу в полі :attribute має знаходитися в діапазоні від :min до :max кілобайт',
        'string'  => 'Довжина значення поля :attribute повинна знаходиться в діапазоні від :min до :max символів',
        'array'   => 'Поле :attribute повинно містити від :min до :max елементів',
    ],
    'boolean'          => 'Поле :attribute повинно мати значення true або false',
    'confirmed'        => 'Поле :attribute і підтверджуюче його поле не збігаються',
    'current_password' => 'Невірний пароль',
    'date'             => 'Значення поле :attribute не є датою в правильному форматі',
    'date_equals'      => 'Атрибут має бути датою, рівною даті',
    'date_format'      => 'Значення поля :attribute не відповідає формату :format.',
    'different'        => 'Значення полів :attribute і :other повинні відрізняться',
    'digits'           => 'Значення поля :attribute має відповідати цифрам :digits',
    'digits_between'   => 'Значення поля :attribute має знаходитися в діапазоні від :min до :max цифрах',
    'dimensions'       => 'Зображення завантажене в поле :attribute має неприпустимі розміри',
    'distinct'         => 'Масив в полі :attribute не повинен містити дублюючих значень',
    'email'            => 'Значення поля :attribute має бути дійсною адресою електронної пошти',
    'ends_with'        => 'Атрибут має закінчуватися одним із наступних значень.',
    'exists'           => 'Значення поля :attribute недійсне',
    'file'             => 'Поле :attribute може приймати тільки файли',
    'filled'           => 'Поле :attribute обов\'язкове',
    'gt'               => [
        'numeric' => 'Поле :attribute має біти більше ніж значення :value.',
        'file'    => 'Поле :attribute має бути більше ніж :value кілобайт.',
        'string'  => 'Поле :attribute має містити більше ніж :value символів.',
        'array'   => 'Поле :attribute має більш ніж :value елементів',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute має бути більше або рівним :value.',
        'file'    => 'Поле :attribute має бути більше або рівним :value кілобайт.',
        'string'  => 'Поле :attribute має містити  :value символів або більше.',
        'array'   => 'Поле :attribute має містити  :value елементів або більше.',
    ],
    'image'    => 'Поле :attribute має бути зображенням',
    'in'       => 'Значення поля :attribute недійсне',
    'in_array' => 'Значення поля :attribute має також бути присутнім в поле :other',
    'integer'  => 'Значення поля :attribute має бути цілим числом',
    'ip'       => 'Значення поля :attribute має бути дійсною IP адресою',
    'ipv4'     => 'Поле :attribute має бути дійскною IPv4 адресою.',
    'ipv6'     => 'Поле :attribute має бути дійскною IPv6 адресою.',
    'json'     => 'Значення поля :attribute має бути дійсною JSON',
    'lt'       => [
        'numeric' => 'Поле :attribute має бути менше ніж :value.',
        'file'    => 'Поле :attribute має бути менше ніж :value кілобайт.',
        'string'  => 'Поле :attribute має містити менше ніж :value символів.',
        'array'   => 'Поле :attribute має містити менше ніж :value елементів.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute має бути менше або рівним :value.',
        'file'    => 'Поле :attribute має бути менше або рівним :value кілобайт.',
        'string'  => 'Поле :attribute має бути менше або рівним :value символів.',
        'array'   => 'Поле :attribute не має містити більше ніж :value елементів.',
    ],
    'max' => [
        'numeric' => 'Значення поля :attribute не повинно перевищувати значення :max',
        'file'    => 'Значення поля :attribute не повинно перевищувати значення :max кілобайт',
        'string'  => 'Значення поля :attribute не повинно бути довшим :max символів',
        'array'   => 'Поле :attribute не повинно містити більше ніж :max елементів в масиві',
    ],
    'mimes'     => 'Файл який завантажується в поле :attribute повинен відповідати форматам: :values.',
    'mimetypes' => 'Файл який завантажується в поле :attribute повинен відповідати форматам: :values.',
    'min'       => [
        'numeric' => 'Значення поля :attribute має бути не менше :min',
        'file'    => 'Файл який завантажується в поле :attribute має бути розміром не менше :min кілобайт',
        'string'  => 'Значення поля :attribute не повинно бути коротше :min символів',
        'array'   => 'Поле :attribute не повинно містити менш ніж :min елементів в масиві',
    ],
    'not_in'               => 'Значення поля :attribute недійсне.',
    'not_regex'            => 'Значення поля :attribute недійсне.',
    'numeric'              => 'Значення поля :attribute має бути числом',
    'password'             => 'Пароль не вірний',
    'present'              => 'Поле :attribute має бути обов\'язково присутня в запиті (але може бути порожнім)',
    'regex'                => 'В полі :attribute передані дані невірного формату',
    'required'             => 'Поле :attribute обов\'язково',
    'required_if'          => 'Поле :attribute обов\'язково коли :other одне :value.',
    'required_unless'      => 'Поле :attribute обов\'язково коли :other дорівнює :value.',
    'required_with'        => 'Поле :attribute обов\'язково коли :values є в запиті',
    'required_with_all'    => 'Поле :attribute обов\'язково коли :values є в запиті',
    'required_without'     => 'Поле :attribute обов\'язково коли :values відсутні в запиті',
    'required_without_all' => 'Поле :attribute обов\'язково коли жодного з значень :values немає в запиті',
    'same'                 => 'Поле: attribute і поле :other повинні збігатися',
    'size'                 => [
        'numeric' => 'Поле :attribute має бути розміру :size.',
        'file'    => 'Поле :attribute має бути розміру :size кілобайт',
        'string'  => 'Поле :attribute має бути розміру :size символів',
        'array'   => 'Поле :attribute повинно мати :size елементів',
    ],
    'starts_with' => 'Поле :attribute має починатися з :values',
    'string'      => 'Поле :attribute має бути рядком',
    'timezone'    => 'Поле :attribute має бути дійсною зоною',
    'unique'      => 'Поле :attribute вже зайнято',
    'uploaded'    => ':attribute не вдалось завантажити.',
    'url'         => 'Поле :attribute має невірний формат',
    'uuid'        => 'Поле :attribute має бути UUID',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'Поле :attribute включає зарезервоване слово',
    'dont_allow_first_letter_number' => 'Поле \":input\" не може мати першим символом цифру',
    'exceeds_maximum_number'         => 'Значення :attribute перевищує максимальну допистиму довжину для моделі',
    'db_column'                      => 'Значення :attribute має містити основні ISO латинькі літери, цифри, тире та не може починатись з цифри.',
    'attributes'                     => [],

];
