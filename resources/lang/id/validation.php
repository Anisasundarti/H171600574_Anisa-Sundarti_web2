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

    'accepted' => 'Atribut: harus diterima.',
    'active_url' => 'atribut URL tidak dapat diterima.',
    'after' => 'atribut harus berupa tanggal setelah: tanggal.',
    'after_or_equal' => 'atribut harus berupa tanggal, setelah atau sama dengan: tanggal.',
    'alpha' => 'atribut hanya boleh berisi huruf.',
    'alpha_dash' => 'Atribut: hanya dapat berisi huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => 'Atribut: hanya dapat berisi huruf dan angka.',
    'array' => 'Atribut: harus berupa array(variabel yang memiliki tipe data yang sama).',
    'before' => 'Atribut: harus tanggal sebelum: tanggal.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'Konfirmasi atribut tidak cocok.',
    'date' => 'Atribut tanggal tidak valid.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'Atribut: tidak cocok dengan format: format.',
    'different' => 'Atribut satu dengan yang lainnya harus berbeda.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'Atribut: memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Atribut memiliki nilai duplikat.',
    'email' => 'Atribut: harus berupa alamat email yang valid.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'Atribut yang dipilih: tidak valid.',
    'file' => 'Atribut: harus berupa file.',
    'filled' => 'Atribut harus memiliki nilai.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'Atribut: harus berupa gambar.',
    'in' => 'Atribut yang dipilih: tidak valid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'Atribut: harus berupa bilangan bulat.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'Atribut yang dipilih: tidak valid.',
    'not_regex' => 'Format atribut: tidak valid.',
    'numeric' => 'Atribut: harus berupa angka.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'Format atribut: tidak valid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'Atribut: harus berupa string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'Atribut: telah diambil/telah digunakan.',
    'uploaded' => 'Atribut: gagal diunggah.',
    'url' => 'Format atribut: tidak valid.',
    'uuid' => 'Atribut: harus UUID yang valid.',

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
