<?php

namespace Spatie\OpeningHours;

use DateInterval;
use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use Spatie\OpeningHours\Exceptions\InvalidTimeString;
use Spatie\OpeningHours\Helpers\DataTrait;
use Spatie\OpeningHours\Helpers\DateTimeCopier;

readonly class Time implements TimeDataContainer
{
    use DataTrait;
    use DateTimeCopier;

    protected function __construct(
        protected int $hours,
        protected int $minutes,
        public mixed $data = null,
        protected ?DateTimeInterface $date = null,
    ) {
    }

    public static function fromString(string $string, mixed $data = null, ?DateTimeInterface $date = null): self
    {
        if (! preg_match('/^(([0-1][0-9]|2[0-3]):[0-5][0-9]|24:00)$/', $string)) {
            throw InvalidTimeString::forString($string);
        }

        [$hours, $minutes] = explode(':', $string);

        return new self($hours, $minutes, $data, $date);
    }

    public function hours(): int
    {
        return $this->hours;
    }

    public function minutes(): int
    {
        return $this->minutes;
    }

    public function date(): ?DateTimeInterface
    {
        return $this->date;
    }

    public static function fromDateTime(DateTimeInterface $dateTime, mixed $data = null): self
    {
        return static::fromString($dateTime->format(self::TIME_FORMAT), $data);
    }

    public function isSame(self $time): bool
    {
        return $this->hours === $time->hours && $this->minutes === $time->minutes;
    }

    public function isAfter(self $time): bool
    {
        return $this > $time;
    }

    public function isBefore(self $time): bool
    {
        return $this < $time;
    }

    public function isSameOrAfter(self $time): bool
    {
        return $this->isSame($time) || $this->isAfter($time);
    }

    public function diff(self $time): DateInterval
    {
        return $this->toDateTime()->diff($time->toDateTime());
    }

    public function toDateTime(?DateTimeInterface $date = null): DateTimeInterface
    {
        $date = $date ? $this->copyDateTime($date) : new DateTime('1970-01-01 00:00:00');

        return $date->setTime($this->hours, $this->minutes);
    }

    public function format(string $format = self::TIME_FORMAT, DateTimeZone|string|null $timezone = null): string
    {
        $date = $this->date ?: ($timezone
            ? new DateTimeImmutable('1970-01-01 00:00:00', $timezone instanceof DateTimeZone
                ? $timezone
                : new DateTimeZone($timezone)
            )
            : null
        );

        if ($this->hours === 24 && $this->minutes === 0 && substr($format, 0, 3) === self::TIME_FORMAT) {
            return '24:00'.$this->formatSecond($format, $date);
        }

        return $this->toDateTime($date)->format($format);
    }

    public function __toString(): string
    {
        return $this->format();
    }

    private function formatSecond(string $format, ?DateTimeImmutable $date = null): string
    {
        return strlen($format) > 3
            ? ($date ?? new DateTimeImmutable('1970-01-01 00:00:00'))->format(substr($format, 3))
            : '';
    }
}
