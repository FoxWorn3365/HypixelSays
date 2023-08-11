<?php

namespace FoxWorn3365\HypixelSays\utils;

final class Math {
    public static function center(object $position) : array { // Array of blocks!
        $centroX = ($position->from->x + $position->to->x) / 2;
        $centroY = ($position->from->y + $position->to->y) / 2;

        if (($position->from->x !== $position->to->x) && ($position->from->y !== $position->to->y)) {
            $centroX1 = floor($centroX);
            $centroY1 = floor($centroY);
            
            $centroX2 = ceil($centroX);
            $centroY2 = ceil($centroY);

            return [
                (object)['x' => $centroX1, 'y' => $centroY1],
                (object)['x' => $centroX2, 'y' => $centroY2]
            ];
        } else {
            return [(object)['x' => round($centroX), 'y' => round($centroY)]];
        }
    }
}