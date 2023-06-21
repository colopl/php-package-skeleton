<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

use const DIRECTORY_SEPARATOR as DS;

return (new Config())
    ->setRiskyAllowed(\true)
    ->setRules([
        '@PSR12' => \true,
        'blank_line_after_opening_tag' => \false,
        'declare_strict_types' => \true,
        'array_indentation' => \true,
        'array_syntax' => ['syntax' => 'short'],
        'combine_consecutive_unsets' => \true,
        'single_quote' => \true,
        'braces' => [
            'allow_single_line_closure' => \true,
        ],
        'concat_space' => [
            'spacing' => 'one',
        ],
        'declare_equal_normalize' => \true,
        'function_typehint_space' => \true,
        'include' => \true,
        'lowercase_cast' => \true,
        'native_constant_invocation' => \true,
        'native_function_casing' => \true,
        'native_function_invocation' => \true,
        'new_with_braces' => \true,
        'no_blank_lines_after_class_opening' => \true,
        'no_blank_lines_after_phpdoc' => \true,
        'no_empty_comment' => \true,
        'no_empty_phpdoc' => \true,
        'no_empty_statement' => \true,
        'no_leading_namespace_whitespace' => \true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_short_bool_cast' => \true,
        'no_singleline_whitespace_before_semicolons' => \true,
        'no_spaces_around_offset' => \true,
        'no_unneeded_control_parentheses' => \true,
        'no_unused_imports' => \true,
        'no_whitespace_before_comma_in_array' => \true,
        'no_whitespace_in_blank_line' => \true,
        'normalize_index_brace' => \true,
        'object_operator_without_whitespace' => \false,
        'return_type_declaration' => \true,
        'self_accessor' => \true,
        'short_scalar_cast' => \true,
        'single_blank_line_before_namespace' => \true,
        'single_class_element_per_statement' => \true,
        'space_after_semicolon' => \false,
        'standardize_not_equals' => \true,
        'ternary_operator_spaces' => \true,
        'trim_array_spaces' => \true,
        'unary_operator_spaces' => \true,
        'whitespace_after_comma_in_array' => \true,
        'backtick_to_shell_exec' => \true,
        'assign_null_coalescing_to_coalesce_equal' => \true,
        'constant_case' => \true,
        'single_import_per_statement' => \true,
        'group_import' => \false,
        'is_null' => \true,
        'list_syntax' => \true,
        'magic_method_casing' => \true,
        'modernize_strpos' => \true,
        'modernize_types_casting' => \true,
        'no_closing_tag' => \true,
        'ordered_class_elements' => \true,
        'strict_comparison' => \true,
        'self_static_accessor' => \true,
        'protected_to_private' => \true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => \true,
        ],
        'no_superfluous_elseif' => \true,
        'get_class_to_class_keyword' => \true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_annotation_without_dot' => \true,
        'phpdoc_indent' => \true,
        'phpdoc_inline_tag_normalizer' => \true,
        'phpdoc_no_access' => \true,
        'phpdoc_no_empty_return' => \false,
        'phpdoc_no_package' => \true,
        'phpdoc_no_useless_inheritdoc' => \true,
        'phpdoc_return_self_reference' => \true,
        'phpdoc_scalar' => \true,
        'phpdoc_separation' => \false,
        'phpdoc_single_line_var_spacing' => \true,
        'phpdoc_summary' => \false,
        'phpdoc_to_comment' => \false,
        'phpdoc_trim' => \true,
        'phpdoc_types' => \true,
        'phpdoc_var_without_name' => \true,
    ])
    ->setFinder(
        (new Finder())
            ->ignoreDotFiles(\false)
            ->ignoreVCSIgnored(\true)
            ->in([
                __DIR__ . DS . 'src',
                __DIR__ . DS . 'tests',
            ])
    );
