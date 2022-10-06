<?php declare(strict_types=1);

namespace Mkioschi\Enums;

enum HttpMethod: string implements EnumContract
{
    case CONNECT = 'connect';
    case DELETE = 'delete';
    case GET = 'get';
    case HEAD = 'head';
    case OPTIONS = 'options';
    case PATCH = 'patch';
    case POST = 'post';
    case PUT = 'put';
    case TRACE = 'trace';

    /**
     * @return array
     */
    public static function values(): array
    {
        return array_column(
            array: self::cases(),
            column_key: 'value'
        );
    }

    /**
     * @param mixed $value
     * @return ?self
     */
    public static function innFrom(mixed $value): ?self
    {
        if (is_null($value)) return null;
        return self::from($value);
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return self::labels()[$this->value];
    }

    /**
     * @return string[]
     */
    public static function labels(): array
    {
        return [
            self::CONNECT->value => 'Connect',
            self::DELETE->value => 'Delete',
            self::GET->value => 'Get',
            self::HEAD->value => 'Head',
            self::OPTIONS->value => 'Options',
            self::PATCH->value => 'Patch',
            self::POST->value => 'Post',
            self::PUT->value => 'Put',
            self::TRACE->value => 'Trace',
        ];
    }
}
