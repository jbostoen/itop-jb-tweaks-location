<?php

/**
 * @copyright   Copyright (C) 2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2019-08-18 18:59:12
 *
 * Localized data
 */

Dict::Add('NL NL', 'Dutch', 'Dutch', array(

	//	'Class:SomeClass' => 'Class name',
	//	'Class:SomeClass+' => 'More info on class name',
	//	'Class:SomeClass/Attribute:some_attribute' => 'your translation for the label',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value' => 'your translation for a value',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value+' => 'your translation for more info on the value',
	
	// - Location
	'Class:Location/Name' => '%1$s (%2$s)',
	'Class:Location/Attribute:locationtype_id' => 'Type',
	'Class:Location/Attribute:locationtype_id+' => 'Welk soort locatie is het?',
	'Class:Location/Attribute:parent_id' => 'Hoofdlocatie',
	'Class:Location/Attribute:parent_id+' => 'De hoofdlocatie (bv. voor een "ruimte" zou dit een "verdiep" of "gebouw" zijn)',
	'Class:Location/Attribute:locations_list' => 'Sublocaties',
	'Class:Location/Attribute:locations_list+' => 'Lijst van alle sublocaties',
	
	// - LocationType
	'Class:LocationType' => 'Soort locatie',
	'Class:LocationType/Attribute:name' => 'Naam',
	'Class:LocationType/Attribute:name+' => 'Bijvoorbeeld: Land, Provincie, Gemeente, Gebouw, Verdiep, Ruimte, ...',
	'Class:LocationType/Attribute:locations_list' => 'Locaties',
	'Class:LocationType/Attribute:locations_list+' => 'Lijst van alle locaties van dit type',
	
));

