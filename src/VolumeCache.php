<?php
/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace DVDoug\BoxPacker;

use WeakMap;

final class VolumeCache {

    /**
     * @var WeakMap<Item, int>
     */
    private static WeakMap|null $itemCache = null;

    public static function forItem(Item $item): int
    {
      if (self::$itemCache === null) {
        self::$itemCache = new WeakMap();
      }

      return self::$itemCache[$item] ??= $item->getWidth() * $item->getLength() * $item->getDepth();
    }

    /**
     * @var WeakMap<Box, int>
     */
    private static WeakMap|null $boxCache = null;

    public static function forBox(Box $box): int
    {
      if (self::$boxCache === null) {
        self::$boxCache = new WeakMap();
      }

      return self::$boxCache[$box] ??= $box->getInnerWidth() * $box->getInnerLength() * $box->getInnerDepth();
    }
}
