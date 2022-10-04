<?php declare(strict_types=1);

namespace Mkioschi\Tests\Enums;

use Mkioschi\Enums\HttpStatus;
use PHPUnit\Framework\TestCase;

class HttpStatusTest extends TestCase
{
    public function test_should_be_able_to_create_a_valid_http_status()
    {
        $noContentHttpStatus = HttpStatus::NO_CONTENT;
        $this->assertInstanceOf(HttpStatus::class, $noContentHttpStatus);
        $this->assertEquals(204, $noContentHttpStatus->value);
        $this->assertEquals(null, HttpStatus::innFrom(null));
    }
}