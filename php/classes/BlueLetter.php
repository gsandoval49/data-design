<?php
namespace Edu\Cnm\Gsandoval49\DataDesign;

require_once ("autoload.php");


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
 * @version 3.0.0
 **/
class Profile implements \JsonSerializable {
	use ValidateDate; // DO I NEED THIS?
	/**
	 * id for the Profile; this is a primary key.
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * email for the user of this profile.
	 * @var string $profileEmail
	 **/
	private $profileEmail;
	/**
	 * first name of this person.
	 * @var string $profileFirstName
	 **/
	private $profileFirstName;
	/**
	 * last name of this person.
	 * @var string $profileLastName
	 **/
	private $profileLastName;

	/**
	 * constructor for this Profile
	 *
	 * @param int|null $profileId id of this Profile or null if a new profile id
	 * @param string $profileEmail containing the email of the Profile
	 * @param string $profileFirstName containing first name
	 * @param string $profileLastName contains last name
	 * @throws \InvalidArgumentException if data type is not valid
	 * @throws \RangeException if data values are out of bounds (e.g strings too long, negative intergers)
	 * @throws \TypeError if data violates type hints
	 * @throws \Exception if some other exception occurs
	 **/
	public function _construct(int $profileId = null, int $profileId, string $profileEmail, string $profileFirstName, string $profileLastname) {
		try {
			$this->setProfileId(newProfileId);
			$this->
		}
	}

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
		$newProfileEmail = filter_var($newProfileEmail, FILTER_SANITIZE_EMAIL);
		if($newProfileEmail === false) {
			throw(new UnexpectedValueException("email is not a valid string"));
		}

		// store the email
		$this->profileEmail = $newProfileEmail;
	}

	/**
	 * accessor method for first name
	 *
	 * @return string value for the first name
	 **/
	public function getProfileFirstName() {
		return($this->profileFirstName);
	}

	/**
	 * mutator method for first name
	 *
	 * @param string $newProfileFirstName new value of first name
	 * @throws UnexpectedValueException if $newProfileFirstName is not valid
	 **/
	public function setProfileFirstName($newProfileFirstName) {
		// verify the first name is valid
		$newProfileFirstName = filter_var($newProfileFirstName, FILTER_SANITIZE_STRING);
		if($newProfileFirstName === false) {
			throw(new UnexpectedValueException("first name is not a valid string"));
		}

		// store the first name
		$this->profileFirstName = $newProfileFirstName;
	}

	/**
	 * accessor method for last name
	 *
	 * @return string value of last name
	 **/
	/**
	 * @return mixed
	 * this auto populated when i hit the tab button. I'm leaving it there and inquiring later.
	 */
	public function getProfileLastName() {
		return $this->profileLastName;
	}

	/**
	 * mutator method for last name
	 *
	 * @param string $newProfileLastName new value of last name
	 * @throws UnexpectedValueException if $newProfileLastName is not valid
	 **/
	public function setProfileLastName($newProfileLastName) {
		// verify the last name is valid
		$newProfileLastName = filter_var($newProfileLastName, FILTER_SANITIZE_STRING);
		if($newProfileLastName === false) {
			throw(new UnexpectedValueException("last name is not a valid string"));
		}

		// store the last name
		$this->profileLastName = $newProfileLastName;
	}

	/**
	 * Specify data which should be serialized to JSON
	 * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 * @since 5.4.0
	 */
	function jsonSerialize() {
		// TODO: Implement jsonSerialize() method.
	}
}

?>