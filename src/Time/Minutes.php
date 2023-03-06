<?php
declare(strict_types = 1);

namespace Scale\Time;

interface Minutes {
  public const IN_SECONDS = 60;
  public const IN_MILLISECONDS = 1000 * self::IN_SECONDS;
  public const IN_MICROSECONDS = 1000 * self::IN_MILLISECONDS;
}
