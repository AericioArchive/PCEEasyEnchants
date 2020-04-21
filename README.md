# PCEEasyEnchants [![Poggit-CI](https://poggit.pmmp.io/shield.dl/PCEEasyEnchants)](https://poggit.pmmp.io/p/PCEEasyEnchants) [![Discord](https://img.shields.io/discord/330850307607363585?logo=discord)](https://discord.gg/qmnDsSD)

PCEEasyEnchants is an extension to the [PiggyCustomEnchants](https://github.com/DaPigGuy/PiggyCustomEnchants/) plugin which allows server owners to easily create custom enchantments without any coding knowledge.

## Installation & Setup
1. Install [PiggyCustomEnchants](https://poggit.pmmp.io/p/PiggyCustomEnchants) and [PCEEasyEnchants](https://poggit.pmmp.io/p/PCEEasyEnchants) from Poggit.
2. Configure PCEEasyEnchants.
    * Basic Configuration
    
        ```yaml
        # "id" refers to the enchantment ID that will be registered to PMMP.
        # "id" should increment from 1000, using any ids below 1000 is highly discouraged.
        - id: 1000
          name: "starve"
          effects:
            # "effects.id" accepts effect names and ids.
            - id: "hunger"
              # Amplifier is calculated as (amplifier.base + amplifier.multiplier * level).
              amplifier:
                base: 0
                multiplier: 1
              # Duration is calculated as (duration.base + duration.multiplier * level).
              # "duration.base" and "duration.multiplier" are in ticks (20 ticks = 1 second).
              duration:
                base: 60
                multiplier: 1
        ```
3. (OPTIONAL) Further configuration in PiggyCustomEnchants. 
    * We recommend further modification to be done via PiggyCustomEnchants after initial setup.
    * Only `effects` should continue to be modified in PCEEasyEnchants rather than in `extra_data.json`
    * `descriptions.json`: Allows you to modify description of the enchantment.
    
        ```json
        {
          "starve": "Inflicts Hunger on enemies."
        }
        ```
    * `display_names.json`: Allows you to modify the display name of the enchantment.
    
        ```json
        {
          "starve": "Hungry Piggy"
        }
        ```
    * `rarity.json`: Allows you to modify rarity of the enchantment.
        
        ```json
        {
          "starve": "Rare"
        }
        ```
    * `max_levels.json`: Allows you to modify the maximum level of the enchantment.
        
        ```json
        {
          "starve": 5
        }
        ```
    
4. You're done! Start your server.

## License
```
    PCEEasyEnchants for PiggyCustomEnchants.
    Copyright (C) 2020  Aericio

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
```
