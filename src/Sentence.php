<?php
namespace Kjaster\RandomWords;

class Sentence
{
    private string $sentence ='';

    /**
     * Gets the original sentence
     *
     * @return string
     */
    public function getSentence(): string
    {
        return $this->sentence;
    }

    public function setSentence(string $sentence): void
    {
        $this->sentence = trim($sentence);
    }

    function __construct($sentence)
    {
        //$this->sentence=$sentence;
        $this->setSentence($sentence);
    }

    public function getRandomSentence(): string{
        $words = explode(' ', $this->sentence);

        // more than one word
        if(count($words)>0){

            $result =shuffle($words);

            if($result === true){
                return implode(' ',$words);
            }
        }

        return $this->sentence;
    }

}