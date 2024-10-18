<?php
/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace DVDoug\BoxPacker;

/**
 * A "box" (or envelope?) to pack items into with limited volume.
 */
interface LimitedVolumeBox extends Box
{
    /**
     * Max volume utilisation available for items packing
     */
    public function getMaxVolumeUtilisation(): float;
}
