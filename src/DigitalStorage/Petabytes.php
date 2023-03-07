<?php
declare(strict_types = 1);

namespace Scale\DigitalStorage;

class Petabytes {
  public const IN_TERABYTES = 1000;
  public const IN_GIGABYTES = 1000 * self::IN_TERABYTES;
  public const IN_MEGABYTES = 1000 * self::IN_GIGABYTES;
  public const IN_KILOBYTES = 1000 * self::IN_MEGABYTES;
  public const IN_BYTES = 1000 * self::IN_KILOBYTES;
  public const IN_BITS = 8 * self::IN_BYTES;
}
