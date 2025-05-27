<?php

require_once 'Observer.php';

class Moodle
{
    private array $observers;

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($key, $this->observers);
        }
    }

    public function notifyObservers(string $news) {
        foreach ($this->observers as $observer) {
            $observer->update($news);
        }
    }

    public function newNews(string $news) {
        $this->notifyObservers($news);
    }
}

?>