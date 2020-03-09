<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{

	/**
	 * @var int
	 */
	private $storage;

	/**
	 * @var int
	 */
	private $truckLoad = 0;

	/**
	 * @var int
	 */

	private $energy;


	public function __construct(string $color, int $nbSeats, string $energy, int $storage)
	{
		parent::__construct($color, $nbSeats);
		$this->energy = $energy;
		$this->storage = $storage;
	}

	public function getStorage(): int
	{
		return $this->storage;
	}

	public function setStorage(int $storage): void
	{
		$this->storage = $storage;
	}

	public function getLoad(): int
	{
		return $this->truckLoad;
	}

	public function setLoad(int $truckLoad): void
	{
		$this->truckLoad = $truckLoad;
	}

	public function setEnergy(int $energy): void
	{
		$this->energy = $energy;
	}

	public function getEnergy(): string
	{
		return $this->energy;
	}

	public function getLoadStatus(): string
	{
		if ($this->truckLoad >= $this->storage)
			return "<br>Full";
		else
			return "<br>In filling";
	}
}
