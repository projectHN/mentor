<?php
/**

 */

namespace System\Model;

use Home\Model\Base;

class Role extends Base{
	/**
	 * @var int
	 */
	protected $id;
	/**
	 * @var int
	 */
	protected $name;
	/**
	 * @var int
	 */
	protected $createdById;
	/**
	 * @var int
	 */
	protected $createdDateTime;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $createdById
	 */
	public function getCreatedById() {
		return $this->createdById;
	}

	/**
	 * @return the $createdDateTime
	 */
	public function getCreatedDateTime() {
		return $this->createdDateTime;
	}

	/**
	 * @param number $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param number $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param number $createdById
	 */
	public function setCreatedById($createdById) {
		$this->createdById = $createdById;
	}

	/**
	 * @param number $createdDateTime
	 */
	public function setCreatedDateTime($createdDateTime) {
		$this->createdDateTime = $createdDateTime;
	}


}