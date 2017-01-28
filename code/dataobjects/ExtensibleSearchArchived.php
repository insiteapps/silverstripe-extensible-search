<?php

/**
 *	This represents an archived search analytic.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

class ExtensibleSearchArchived extends DataObject {

	private static $db = array(
		'Term' => 'Varchar(255)',
		'Frequency' => 'Int',
		'FrequencyPercentage' => 'Varchar(255)',
		'AverageTimeTaken' => 'Varchar(255)',
		'Results' => 'Varchar(255)'
	);

	private static $has_one = array(
		'Archive' => 'ExtensibleSearchArchive'
	);

	private static $summary_fields = array(
		'Term',
		'Frequency',
		'FrequencyPercentage',
		'AverageTimeTaken',
		'Results'
	);

	private static $field_labels = array(
		'Term' => 'Search Term',
		'Frequency' => 'Frequency',
		'FrequencyPercentage' => 'Frequency %',
		'AverageTimeTaken' => 'Average Time Taken (s)',
		'Results' => 'Has Results?'
	);

	public function canEdit($member = null) {

		return false;
	}

	public function canCreate($member = null) {

		return false;
	}

	public function canDelete($member = null) {

		return false;
	}

}