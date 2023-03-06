<?php
declare(strict_types = 1);

namespace Scale\Time;

interface Seconds {
  public const IN_MILLISECONDS = 1000;
  public const IN_MICROSECONDS = 1000 * self::IN_MILLISECONDS;
}
