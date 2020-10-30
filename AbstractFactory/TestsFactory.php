<?php

class TestsFactory implements FactoryInterface
{

    public function createQuestion(string $questionType): QuestionInterface
    {
        return new ucfirst($questionType) . 'Question';
    }
}
