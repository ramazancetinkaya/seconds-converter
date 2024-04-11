<?php
/**
 * Seconds Converter
 *
 * A library to convert seconds into minutes, hours, and days.
 *
 * @category Utility
 * @package  SecondsConverter
 * @author   Ramazan Çetinkaya <ramazancetinkayadev@hotmail.com>
 * @license  MIT License <https://opensource.org/licenses/MIT>
 * @link     https://github.com/ramazancetinkaya/seconds-converter
 * @version  1.0.0
 */

namespace ramazancetinkaya;

class SecondsConverter {
    /**
     * Convert seconds to minutes.
     *
     * @param int $seconds The number of seconds to convert.
     * @return float The converted value in minutes.
     */
    public function toMinutes(int $seconds): float {
        return $seconds / 60;
    }

    /**
     * Convert seconds to hours.
     *
     * @param int $seconds The number of seconds to convert.
     * @return float The converted value in hours.
     */
    public function toHours(int $seconds): float {
        return $seconds / 3600;
    }

    /**
     * Convert seconds to days.
     *
     * @param int $seconds The number of seconds to convert.
     * @return float The converted value in days.
     */
    public function toDays(int $seconds): float {
        return $seconds / 86400;
    }

    /**
     * Convert seconds to a human-readable format (minutes, hours, days).
     *
     * @param int $seconds The number of seconds to convert.
     * @return string The converted value with appropriate units.
     * @throws InvalidArgumentException If the input is not a positive integer.
     */
    public function convert(int $seconds): string {
        if (!is_int($seconds) || $seconds < 0) {
            throw new InvalidArgumentException("Seconds must be a positive integer.");
        }

        if ($seconds === 0) {
            return "0 seconds";
        }

        $output = [];
        $units = [
            'day' => 86400,
            'hour' => 3600,
            'minute' => 60,
            'second' => 1
        ];

        foreach ($units as $unit => $divisor) {
            if ($seconds >= $divisor) {
                $value = floor($seconds / $divisor);
                $output[] = $value . ' ' . ($value === 1 ? $unit : $unit . 's');
                $seconds %= $divisor;
            }
        }

        return implode(', ', $output);
    }
}
