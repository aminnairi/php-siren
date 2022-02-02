<?php

// French SIREN number validator
// Copyright (C) 2022 Amin NAIRI

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <https://www.gnu.org/licenses/>.

declare(strict_types=1);

namespace Aminnairi\Siren;

use Aminnairi\Siren\Library\StringExtra;

final class Siren
{
    /**
     * @description Check that a french SIREN number is mathematically valid according to the Luhn's algorithm
     * @example
     * Siren::isValid("732829320"); // true
     * Siren::isValid("732829321"); // false
     */
    final public static function isValid(string $sirenNumber): bool
    {
        $sum = 0;

        foreach (str_split($sirenNumber) as $index => $character) {
            if (!StringExtra::isOneOf(["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"], $character)) {
                return false;
            }

            $digit = intval($character);

            if ($index % 2 !== 0) {
                $digit *= 2;
            }

            if ($digit > 9) {
                $digit -= 9;
            }

            $sum += $digit;
        }

        return $sum % 10 === 0;
    }
}
