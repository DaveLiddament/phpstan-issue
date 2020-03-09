<?php declare(strict_types = 1);

namespace App;

class Assert {


    public function processIntOrNull(bool $valid): void
    {
        $number = $valid ? 4 : null;
        self::assertNotNull($number);
        $this->takesInt($number);
    }

    public function processIntOrNull2(bool $valid): void
    {
        $number = $valid ? 4 : null;
        self::assertNotNull2($number);
        $this->takesInt($number);
    }

    private function takesInt(int $value): void
    {
        echo "$value";
    }


    /** @phpstan-param mixed $value */
    public static function assertNotNull($value): void
    {
        if ($value === null) throw new \TypeError();
    } 

    /** @phpstan-param mixed $value */
    public static function assertNotNull2($value): void
    {
        if ($value === null) throw new \TypeError();
    }

}
