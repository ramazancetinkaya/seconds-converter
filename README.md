# Seconds Converter

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

A PHP library to convert seconds into minutes, hours, and days.

## Introduction

Seconds Converter is a PHP library designed to simplify the conversion of seconds into various time units such as minutes, hours, and days. It provides a convenient and easy-to-use interface for developers to integrate time conversion functionality into their projects.

## Usage

```php
$converter = new SecondsConverter();

try {
    echo $converter->convert(123456); // Output: "1 days, 10 hours, 17 minutes, 36 seconds"
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
```

## License

This project is licensed under the MIT License. For more details, see the [LICENSE](LICENSE) file.
