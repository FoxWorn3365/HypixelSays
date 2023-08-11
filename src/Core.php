<?php

/*
 * Shopkeepers for PocketMine-MP
 * Add custom shopkeepers to your PocketMine-MP server!
 * 
 * Copyright (C) 2023-now FoxWorn3365
 * Relased under GNU General Public License v3.0 (https://github.com/FoxWorn3365/Shopkeepers/blob/main/LICENSE)
 * You can find the license file in the root folder of the project inside the LICENSE file!
 * If not, see https://www.gnu.org/licenses/
 * 
 * Useful links:
 * - GitHub: https://github.com/FoxWorn3365/Shopkeepers
 * - Contribution guidelines: https://github.com/FoxWorn3365/Shopkeepers#contributing
 * - Author GitHub: https://github.com/FoxWorn3365
 * 
 * Current file: /Core.php
 * Description: The core of the plugin, manage all events and commands
 */

declare(strict_types=1);

namespace FoxWorn3365\Shopkeepers;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Core extends PluginBase implements Listener {
    protected array $arenas = [];

    protected const NOT_PERM_MSG = "§cSorry but you don't have permissions to use this command!\nPlease contact your server administrator";
    public const AUTHOR = "FoxWorn3365";
    public const VERSION = "0.2";

    public const HEIGHT = 64;

    public function onLoad() : void {
        $this->menu = new \stdClass;
        $this->trades = new \stdClass;
        $this->tradeQueue = new \stdClass;
        $this->handle = new \stdClass;
    }

    public function onEnable() : void {
    }
}