<?php

/**
 * @package JiraDashboard\Utils
 * @author toni <toni.lopez@shazamc.om>
 */

namespace JiraDashboard\Utils;

/**
 * @package JiraDashboard\Utils
 */

class DateFormatter
{
    /**
     * @param string $createdString
     * @return string
     */
    public static function getAge($createdString)
    {
        $diff = time() - strtotime($createdString);

        if ($diff < 60) {
            return 'just now';
        }

        $days = (int) ($diff / (24 * 3600));
        $diff = $diff % (24 * 3600);
        $hours = (int) ($diff / 3600);
        $diff = $diff % 3600;
        $minutes = (int) ($diff / (60));

        return sprintf('%dd %dh %dm', $days, $hours, $minutes);
    }

    /**
     * @param string $createdString
     * @param array $levels
     * @return int
     */
    public static function getSmellLevel($createdString, array $levels)
    {
        $diff = time() - strtotime($createdString);

        foreach ($levels as $level => $max) {
            if ($diff <= $max) {
                return $level;
            }
        }

        return ++$level;
    }
} 
