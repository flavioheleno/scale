<?php
declare(strict_types = 1);

namespace Scale\DigitalStorage;

class Mebibytes {
  public const IN_KIBIBYTES = 1024;
  public const IN_BYTES = 1024 * self::IN_KIBIBYTES;
  public const IN_BITS = 8 * self::IN_BYTES;
}
