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

use Aminnairi\Siren\Siren;

test("it should work with 732829320", function() {
    expect(Siren::isValid("732829320"))->toBeTrue();
});

test("it should not work with 732829321", function() {
    expect(Siren::isValid("732829321"))->toBeFalse();
});
