<?php declare(strict_types=1);

namespace Mkioschi\Tests\Enums;

use Mkioschi\Enums\Country;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function test_should_be_able_to_create_a_valid_country()
    {
        $brazil = Country::BRAZIL;
        $this->assertInstanceOf(Country::class, $brazil);
        $this->assertEquals('BR', $brazil->value);
        $this->assertEquals('BR', $brazil->alpha2());
        $this->assertEquals('BRA', $brazil->alpha3());
        $this->assertEquals('076', $brazil->numeric());
        $this->assertEquals('Brazil', $brazil->label());
    }
}