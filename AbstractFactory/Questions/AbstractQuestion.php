<?php

abstract class AbstractQuestion implements QuestionInterface
{

    public function __construct()
    {
        
    }

    abstract public function getPoints();
}
