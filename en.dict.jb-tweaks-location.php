<?php
/**
 * @copyright   Copyright (C) 2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2019-08-18 18:59:12
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(

	//	'Class:SomeClass' => 'Class name',
	//	'Class:SomeClass+' => 'More info on class name',
	//	'Class:SomeClass/Attribute:some_attribute' => 'your translation for the label',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value' => 'your translation for a value',
    //	'Class:SomeClass/Attribute:some_attribute/Value:some_value+' => 'your translation for more info on the value',
	
	// - Location
	'Class:Location/Name' => '%1$s (%2$s)',
	'Class:Location/Attribute:locationtype_id' => 'Type',
	'Class:Location/Attribute:locationtype_id+' => 'What kind of location is it or what purpose does it have?',
	'Class:Location/Attribute:parent_id' => 'Parent',
	'Class:Location/Attribute:parent_id+' => 'Location hosting this one (eg. For a \'room\', should be a \'floor\' or a \'building\')',
	'Class:Location/Attribute:locations_list' => 'Child locations',
	'Class:Location/Attribute:locations_list+' => 'List of all locations included in this one',
	
	// - LocationType
	'Class:LocationType' => 'Location type',
	'Class:LocationType/Attribute:name' => 'Name',
	'Class:LocationType/Attribute:name+' => 'For example: Country, State, City, Building, Floor, Room, ...',
	'Class:LocationType/Attribute:locations_list' => 'Locations',
	'Class:LocationType/Attribute:locations_list+' => 'List of all locations of this type',
	
));

