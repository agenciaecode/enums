<?php declare(strict_types=1);

namespace Mkioschi\Enums;

enum UriScheme: string implements EnumContract
{
    case HTTP = 'http';
    case HTTPS = 'https';
    case FTP = 'ftp';
    case SFTP = 'sftp';

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
            self::HTTP->value => 'Http',
            self::HTTPS->value => 'Https',
            self::FTP->value => 'Ftp',
            self::SFTP->value => 'Sftp',
        ];
    }
}
