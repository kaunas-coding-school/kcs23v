<?php declare(strict_types=1);

class Adresas
{
    /** @var string */
    private $country;
    /** @var string */
    private $city;
    /** @var string */
    private $street;
    /** @var string */
    private $houseNr;
    /** @var string */
    private $apartmentNr;
    /** @var string */
    private $extraInfo;

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Adresas
     */
    public function setCountry(string $country): Adresas
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Adresas
     */
    public function setCity(string $city): Adresas
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Adresas
     */
    public function setStreet(string $street): Adresas
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr(): string
    {
        return $this->houseNr;
    }

    /**
     * @param string $houseNr
     * @return Adresas
     */
    public function setHouseNr(string $houseNr): Adresas
    {
        $this->houseNr = $houseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getApartmentNr(): string
    {
        return $this->apartmentNr;
    }

    /**
     * @param string $apartmentNr
     * @return Adresas
     */
    public function setApartmentNr(string $apartmentNr): Adresas
    {
        $this->apartmentNr = $apartmentNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo(): string
    {
        return $this->extraInfo;
    }

    /**
     * @param string $extraInfo
     * @return Adresas
     */
    public function setExtraInfo(string $extraInfo): Adresas
    {
        $this->extraInfo = $extraInfo;
        return $this;
    }
}