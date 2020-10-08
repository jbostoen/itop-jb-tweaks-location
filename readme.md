# jb-tweaks-location
Copyright (C) 2019-2020 Jeffrey Bostoen

[![License](https://img.shields.io/github/license/jbostoen/iTop-custom-extensions)](https://github.com/jbostoen/iTop-custom-extensions/blob/master/license.md)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/jbostoen)
🍻 ☕

## What?
Addds organization to friendlyname; changes some filters

## Cookbook

XML:
* Location
  * Adds organization name to the friendlyname
  * Adds parent_org_id and locationtype_id (similar to DataCenter View extension by @Molkobain)
* LocationType
  * Adds class similar to DataCenter View extension by @Molkobain
* Person
  * Changes OQL filter of location_id.
    * Now shows all locations of the parent organization and any suborganization.
* PhysicalDevice
  * Changes OQL filter of location_id.
    * Now shows all locations of the parent organization and any suborganization.

