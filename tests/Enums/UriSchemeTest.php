<?php declare(strict_types=1);

namespace Mkioschi\Tests\Enums;

use Mkioschi\Enums\UriScheme;
use PHPUnit\Framework\TestCase;

class UriSchemeTest extends TestCase
{
    public function test_should_be_able_to_create_a_valid_uri_scheme()
    {
        $scheme = UriScheme::HTTP;
        $this->assertInstanceOf(UriScheme::class, $scheme);
        $this->assertEquals('http', $scheme->value);
        $this->assertEquals(null, UriScheme::innFrom(null));
    }
}