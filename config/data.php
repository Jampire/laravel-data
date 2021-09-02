<?php

return [
    /*
     * The package will use this date format when working with dates through the app
     */
    'date_format' => DATE_ATOM,

    /*
     * Global transformers will take complex types and transform them into simple
     * types.
     */
    'transformers' => [
        DateTimeInterface::class => \Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer::class,
        \Illuminate\Contracts\Support\Arrayable::class => \Spatie\LaravelData\Transformers\ArrayableTransformer::class,
    ],

    /*
     * Global casts will cast values into complex types when creating a data
     * object from simple types.
     */
    'casts' => [
        DateTimeInterface::class => Spatie\LaravelData\Casts\DateTimeInterfaceCast::class,
    ],

    /*
     * Rule inferrers can be configured here, they will automatically add
     * validation rules to properties of a data object based upon
     * the type of the property.
     */
    'rule_inferrers' => [
        Spatie\LaravelData\RuleInferrers\NullableRuleInferrer::class,
        Spatie\LaravelData\RuleInferrers\RequiredRuleInferrer::class,
        Spatie\LaravelData\RuleInferrers\BuiltInTypesRuleInferrer::class,
        Spatie\LaravelData\RuleInferrers\AttributesRuleInferrer::class,
    ],
];
