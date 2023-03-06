<?php
declare(strict_types = 1);

namespace Scale\Time;

interface Days {
  public const IN_HOURS = 24;
  public const IN_MINUTES = 60 * self::IN_HOURS;
  public const IN_SECONDS = 60 * self::IN_MINUTES;
  public const IN_MILLISECONDS = 1000 * self::IN_SECONDS;
  public const IN_MICROSECONDS = 1000 * self::IN_MILLISECONDS;
}
