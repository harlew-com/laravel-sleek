# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Laravel Sleek is a Laravel package that enables React-style component syntax in Blade templates. It transforms PascalCase component tags (e.g., `<Button />`, `<Form.Input />`) into Laravel's native x-component format (e.g., `<x-button />`, `<x-form.input />`).

## Architecture

### Core Components

1. **SleekComponentCompiler** (`src/SleekComponentCompiler.php`)
   - Main compilation engine that transforms PascalCase tags to kebab-case x-components
   - Handles three patterns: self-closing tags, opening tags, and closing tags
   - Supports dot notation (e.g., `Form.Input` → `form.input`)
   - Ignores standard HTML tags to avoid false transformations
   - Uses regex-based pattern matching for transformation

2. **SleekServiceProvider** (`src/SleekServiceProvider.php`)
   - Registers the compiler with Laravel's Blade compiler
   - Uses `prepareStringsForCompilationUsing()` to run before standard Blade compilation
   - Respects configuration settings (enabled/disabled, ignore_tags)

3. **Configuration** (`config/sleek.php`)
   - `enabled`: Toggle for the entire compilation feature
   - `ignore_tags`: Array of HTML tags that should not be transformed

### Transformation Flow

```
Blade Template with PascalCase → SleekComponentCompiler → x-component Syntax → Blade Compiler → Final Output
```

The compiler runs as a Blade precompiler, transforming the template string before Laravel's standard Blade compilation occurs.

## Development Commands

```bash
# Run tests
composer test

# Run tests with coverage
composer test-coverage

# Format code (Laravel Pint)
composer format
```

## Testing Strategy

The package uses Pest for testing with Orchestra Testbench for Laravel package testing. Tests should verify:
- PascalCase to kebab-case transformation
- Dot notation support
- Self-closing and standard tag handling
- HTML tag preservation
- Configuration respect (enabled/ignore_tags)

## Package Structure

This is a Laravel package using `spatie/laravel-package-tools`. It auto-registers via Laravel's package discovery using the service provider defined in `composer.json`'s `extra.laravel.providers`.

## Important Notes

- The compiler uses regex for pattern matching, so edge cases with malformed HTML should be tested
- The transformation happens at compile time, not runtime
- Blade view caching will cache the transformed output
- The package is compatible with Laravel 10 and 11, PHP 8.1+