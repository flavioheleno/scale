<?php
declare(strict_types = 1);

namespace Scale\DigitalStorage;

class Tebibytes {
  public const IN_GEBIBYTES = 1024;
  public const IN_MEBIBYTES = 1024 * self::IN_GEBIBYTES;
  public const IN_KIBIBYTES = 1024 * self::IN_MEBIBYTES;
  public const IN_BYTES = 1024 * self::IN_KIBIBYTES;
  public const IN_BITS = 8 * self::IN_BYTES;
}
