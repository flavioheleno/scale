<?php
declare(strict_types = 1);

namespace Scale\Mass;

interface Kilograms {
  public const IN_GRAMS = 1000;
  public const IN_MILLIGRAMS = 1000 * self::IN_GRAMS;
  public const IN_MICROGRAMS = 1000 * self::IN_MILLIGRAMS;
}
