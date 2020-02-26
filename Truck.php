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
	private $truckLoading = 0;

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

	public function getLoading(): int
	{
		return $this->truckLoading;
	}

	public function setLoading(int $truckLoading): void
	{
		$this->truckLoading = $truckLoading;
	}

	public function getEnergy(): string
	{
		return $this->energy;
	}

	public function isFilled(): string
	{
		if ($this->truckLoading >= $this->storage)
			return "<br>Full";
		else
			return "<br>In filling";
	}
}
