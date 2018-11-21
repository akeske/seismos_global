<?php

class PredictionPoint
{
    public $latitude;
    public $longitude;
    public $magnitude;

    /**
     * Prediction constructor.
     * @param $latitude
     * @param $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }


    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getMagnitude()
    {
        return $this->magnitude;
    }

    /**
     * @param mixed $magnitude
     */
    public function setMagnitude($magnitude)
    {
        $this->magnitude = $magnitude;
    }



}