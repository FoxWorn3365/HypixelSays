<?php

namespace FoxWorn3365\HypixelSays\utils;

use pocketmine\block\Block;
use pocketmine\world\World;
use pocketmine\math\Vector3;

use FoxWorn3365\HypixelSays\Core;

final class Structure {
    public static function base(array $centriBlocchi) : array {
        $posizioniBlocchi = [];
        $dimensioneQuadrato = 3;
        $latoScelto = mt_rand(0, 3);
        foreach ($centriBlocchi as $centro) {
            $x = $centro->x;
            $y = $centro->y;
            
            switch ($latoScelto) {
                case 0: // Sopra
                    $posizioniBlocchi[] = (object)['x' => $x - 1, 'y' => $y - $dimensioneQuadrato];
                    break;
                case 1: // A destra
                    $posizioniBlocchi[] = (object)['x' => $x + 1, 'y' => $y - 1];
                    break;
                case 2: // Sotto
                    $posizioniBlocchi[] = (object)['x' => $x - 1, 'y' => $y + 1];
                    break;
                case 3: // A sinistra
                    $posizioniBlocchi[] = (object)['x' => $x - $dimensioneQuadrato, 'y' => $y - 1];
                    break;
            }
        }
        return $posizioniBlocchi;
    }

    public static function grid(array $centri) : array {
        $griglia = [];

        foreach ($centri as $centro) {
            $centroX = $centro->x;
            $centroY = $centro->y;
            
            $griglia[] = new Blocco(
                new Coordinata($centroX - $dimensioneBlocco / 2, $centroY - $dimensioneBlocco / 2),
                new Coordinata($centroX + $dimensioneBlocco / 2, $centroY + $dimensioneBlocco / 2)
            );
        }

        return $griglia;
    }

    public static function deploy(Block $material, array $structure, World $world) : void {
        foreach ($structure as $coords) {
            $world->setBlock(new Vector3($coords->x, Core::HEIGHT, $coords->y), $block);
        }
    }
}