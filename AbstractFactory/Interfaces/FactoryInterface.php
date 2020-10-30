<?php

interface FactoryInterface
{

    public function createQuestion(string $questionType): QuestionInterface;
}
