<?php declare(strict_types=1);

namespace Ecode\Tests\Enums;

use Ecode\Enums\HttpMethod;
use PHPUnit\Framework\TestCase;

class HttpMethodTest extends TestCase
{
    public function test_should_be_able_to_create_a_valid_http_method()
    {
        $getHttpMethod = HttpMethod::GET;
        $this->assertInstanceOf(HttpMethod::class, $getHttpMethod);
        $this->assertEquals('get', $getHttpMethod->value);
        $this->assertEquals(null, HttpMethod::innFrom(null));
    }
}