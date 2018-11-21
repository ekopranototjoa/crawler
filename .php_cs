<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@Symfony' => true,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'concat_space' => [
        'spacing' => 'one',
    ],
    'modernize_types_casting' => true,
    'multiline_whitespace_before_semicolons' => true,
    'no_useless_return' => true,
    'not_operator_with_successor_space' => true,
    'ordered_imports' => [
        'sortAlgorithm' => 'length',
        'importsOrder' => [
            'class',
            'const',
            'function',
        ],
    ],
    'phpdoc_no_empty_return' => false,
    'phpdoc_no_package' => false,
    'phpdoc_order' => true,
    'self_accessor' => true,
    'yoda_style' => false,
];

$finder = Finder::create()
    ->exclude('bootstrap/cache')
    ->exclude('storage')
    // ->exclude('public')
    // ->exclude('tests')
    ->in(__DIR__);

return Config::create()
    ->setFinder($finder)
    ->setRules($rules)
    ->setUsingCache(true);
