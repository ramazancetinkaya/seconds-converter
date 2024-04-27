# Seconds Converter

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![GitHub issues](https://img.shields.io/github/issues/ramazancetinkaya/seconds-converter)](https://github.com/ramazancetinkaya/seconds-converter/issues)
[![GitHub stars](https://img.shields.io/github/stars/ramazancetinkaya/seconds-converter)](https://github.com/ramazancetinkaya/seconds-converter/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/ramazancetinkaya/seconds-converter)](https://github.com/ramazancetinkaya/seconds-converter/network)

Seconds Converter is a PHP library designed to simplify the conversion of seconds into various time units such as minutes, hours, days, and weeks. It provides a convenient and easy-to-use interface for developers to integrate time conversion functionality into their projects.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Copyright](#copyright)

## Installation

### Composer

You can install the library via [Composer](https://getcomposer.org/), a dependency manager for PHP. Make sure you have Composer installed on your system. If not, you can follow the [official installation guide](https://getcomposer.org/doc/00-intro.md).

1. Open your terminal or command prompt.

2. Navigate to your project directory.

3. Run the following command to add `Seconds Converter` to your project's dependencies:

    ```bash
    composer require ramazancetinkaya/seconds-converter
    ```
Composer will download and install the library and its dependencies into your project's vendor directory.

### Manual Installation

If you prefer not to use Composer, you can manually include the library in your project:

1. **Download:** Download the latest release from the [GitHub releases page](https://github.com/ramazancetinkaya/seconds-converter/releases).
2. **Extract:** Extract the downloaded ZIP file.
3. **Copy Files:** Copy the contents of the `src` directory into your project's desired location.

## Usage

```php
<?php

require_once 'vendor/autoload.php'; // If installed via Composer

use ramazancetinkaya\SecondsConverter;

// Create an instance of the converter
$converter = new SecondsConverter();

try {
    echo $converter->convert(999999); // Output: "1 weeks, 4 days, 13 hours, 46 minutes, 39 seconds"
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

?>
```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, feel free to open an issue or create a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Copyright

© 2024 Ramazan Çetinkaya. All rights reserved.
