<?php
declare(strict_types = 1);

namespace Scale\DigitalStorage;

class Pebibytes {
  public const IN_TEBIBYTES = 1024;
  public const IN_GIBIBYTES = 1024 * self::IN_TEBIBYTES;
  public const IN_MEBIBYTES = 1024 * self::IN_GIBIBYTES;
  public const IN_KIBIBYTES = 1024 * self::IN_MEBIBYTES;
  public const IN_BYTES = 1024 * self::IN_KIBIBYTES;
  public const IN_BITS = 8 * self::IN_BYTES;
}
