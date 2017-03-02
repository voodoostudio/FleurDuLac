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

    'accepted'             => ':attribute doit être accepté.',
    'active_url'           => ':attribute n’est pas une adresse URL valide.',
    'after'                => ':attribute doit être postérieure à :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute ne doit contenir que des lettres.',
    'alpha_dash'           => ':attribute ne doit contenir que des lettres, des chiffres et des points.',
    'alpha_num'            => ':attribute ne doit contenir que des lettres et des chiffres. ',
    'array'                => ':attribute doit être un tableau. ',
    'before'               => ':attribute doit être antérieure à  :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':attribute doit être compris entre :min et :max.',
        'file'    => ':attribute doit être compris entre :min et :max kilobytes.',
        'string'  => ':attribute doit être compris entre :min et :max caractères.',
        'array'   => ':attribute doit contenir entre :min et :max objets. ',
    ],
    'boolean'              => 'Le champ :attribute doit être juste ou faux.',
    'confirmed'            => 'La confirmation de :attribute ne correspond pas.',
    'date'                 => ':attribute n’est pas une date valide.  ',
    'date_format'          => ':attribute ne correspond pas au format :format.',
    'different'            => ':attribute and :other doivent être différents.',
    'digits'               => ':attribute doit être composé de :digits chiffres.',
    'digits_between'       => ':attribute doit contenir entre :min et :max chiffres.',
    'dimensions'           => ':attribute a un format d’image invalide.',
    'distinct'             => ':attribute a deux valeurs.',
    'email'                => ':attribute doit être une adresse courriel valide.',
    'exists'               => ':attribute sélectionné n’est pas valide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute est requis.',
    'image'                => ':attribute doit être une image. ',
    'in'                   => 'La sélection :attribute est invalide.',
    'in_array'             => 'Le champ :attribute n’existe pas dans :other.',
    'integer'              => ':attribute doit être un nombre entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'json'                 => ':attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => ':attribute ne doit pas excéder :max.',
        'file'    => ':attribute ne doit pas excéder :max kilobytes.',
        'string'  => ':attribute ne doit pas excéder :max caractères.',
        'array'   => ':attribute ne doit pas contenir plus de :max objets.',
    ],
    'mimes'                => ':attribute doit être un fichier de type :  :values.',
    'mimetypes'            => ':attribute doit être un fichier de type :  :values.',
    'min'                  => [
        'numeric' => ':attribute doit être d’au moins :min.',
        'file'    => ':attribute doit être d’au moins :min kilobytes.',
        'string'  => ':attribute doit avoir au moins :min caractères.',
        'array'   => ':attribute doit avoir au moins :min objets.',
    ],
    'not_in'               => 'La sélection :attribute est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit exister.',
    'regex'                => 'Le format :attribute est invalide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis quand :other est égal à :value. ',
    'required_unless'      => 'Le champ :attribute est requis à moins que :other soit compris dans :value.',
    'required_with'        => 'Le champ :attribute est requis quand :values existe.',
    'required_with_all'    => 'Le champ :attribute est requis quand :values existe.',
    'required_without'     => 'Le champ :attribute est requis quand :values n’existe pas.',
    'required_without_all' => 'Le champ :attribute est requis quand aucun :values n’existe.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit avoir une taille de :size.',
        'file'    => ':attribute doit avoir une taille de :size kilobytes.',
        'string'  => ':attribute doit comprendre  :size caractères.',
        'array'   => ':attribute doit comprendre  :size objets.',
    ],
    'string'               => ':attribute doit être une chaîne de caractères.',
    'timezone'             => ':attribute doit être une zone valide.',
    'unique'               => ':attribute est déjà utilisé.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'Le format :attribute est invalide.',

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
        'message'                  => 'Message',
        'name'                  => 'Pseudo',
        'email'                  => 'Adresse e-mail',
        'phone'                  => 'Téléphone',
    ],

];
