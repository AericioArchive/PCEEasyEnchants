<?php

declare(strict_types=1);

namespace Aericio\PCEEasyEnchants;

use DaPigGuy\PiggyCustomEnchants\CustomEnchantManager;
use DaPigGuy\PiggyCustomEnchants\enchants\CustomEnchant;
use DaPigGuy\PiggyCustomEnchants\enchants\weapons\LacedWeaponEnchant;
use DaPigGuy\PiggyCustomEnchants\PiggyCustomEnchants;
use pocketmine\entity\Effect;
use pocketmine\plugin\PluginBase;

class PCEEasyEnchants extends PluginBase
{
    /**
     * @throws \ReflectionException
     */
    public function onEnable(): void
    {
        $this->saveDefaultConfig();

        /** @var PiggyCustomEnchants $piggyce */
        $piggyce = $this->getServer()->getPluginManager()->getPlugin("PiggyCustomEnchants");

        foreach ($this->getConfig()->get("enchants") as $enchantmentData) {
            $ids = [];
            $baseAmplifier = [];
            $amplifierMultiplier = [];
            $baseDuration = [];
            $durationMultiplier = [];

            foreach ($enchantmentData["effects"] as $effectData) {
                $ids[] = ($effect = Effect::getEffectByName($effectData["id"])) === null ? $effectData["id"] : $effect->getId();
                $baseAmplifier[] = $effectData["amplifier"]["base"];
                $amplifierMultiplier[] = $effectData["amplifier"]["multiplier"];
                $baseDuration[] = $effectData["duration"]["base"];
                $durationMultiplier[] = $effectData["duration"]["multiplier"];
            }

            CustomEnchantManager::registerEnchantment(new LacedWeaponEnchant($piggyce, $enchantmentData["id"], $enchantmentData["name"], CustomEnchant::RARITY_RARE, $ids, $durationMultiplier, $amplifierMultiplier, $baseDuration, $baseAmplifier));
            $piggyce->setEnchantmentData($enchantmentData["name"], "extra_data", []);
        }
    }
}