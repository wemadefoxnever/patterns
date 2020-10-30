<?php

interface QuestionInterface
{

    public function isCorrectAnswer(): bool;

    public function getPoints(): int;
}
