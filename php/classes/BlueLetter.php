<?php
/**
 * Profile for blue letter bible site
 *
 * This profile is data collected about user for login and user benefit purposes.
 * This can be extended to include information such as name.
 *
 * note to self: every time you create your class. don't forget to put braces } and ?> below until you
 * finish class and the end.
 *
 * @author Giles Sandoval <gsandoval49@cnm.edu>
 **/
class Profile {
	/**
	 * id for the Profile; this is a primary key.
	 **/
	private $profileId;
	/**
	 * email for the user of this profile.
	 **/
	private $profileEmail;
	/**
	 * first name of this person.
	 **/
	private $profileFirstName;
	/**
	 * last name of this person.
	 **/
	private $profileLastName;

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value for user
	 * @throws UnexpectedValueException if $newProfileId is not an integer
	 **/
	public function setProfileId($newProfileId) {
		// verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId === false) {
			throw(new UnexpectedValueException("profile id is not an interger"));
		}

		// convert and store the profile id
		$this->profileId = intval($newProfileId);
	}

	/**
	 * accessor method for profile email
	 *
	 * @return string value of email
	 **/
	public function getProfileEmail() {
		return($this->profileEmail);
	}

	/**
	 * mutator method for profile email
	 *
	 * @param string $newProfileEmail new value of the email
	 * @throws UnexpectedValueException if $newProfileEmail is not valid
	 **/
	public function setProfileEmail($newProfileEmail) {
		// verify that the email is valid
		//check to see if there is a check for email specifically for validity.
	}

}

?>