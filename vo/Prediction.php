<?php

class Prediction
{
    public $name;
    public $predictions = [];
    public $visible = true;

    /**
     * Prediction constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPredictions()
    {
        return $this->predictions;
    }

    /**
     * @param mixed $predictions
     */
    public function setPredictions($predictions)
    {
        $this->predictions = $predictions;
    }


    public function getJSONEncode() {
        return json_encode(get_object_vars($this));
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }


}