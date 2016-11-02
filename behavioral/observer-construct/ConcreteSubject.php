<?php
/**
 * This is description
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\construct;

class ConcreteSubject implements Subject
{
    
    /**
     * @var array 已注册观察者
     */
    protected $observers = [];
    
    /**
     * {@inheritDoc}
     * @see \design\patterns\behavioral\observer\construct\Subject::registerObserver()
     */
    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    
    /**
     * {@inheritDoc}
     * @see \design\patterns\behavioral\observer\construct\Subject::removeObserver()
     */
    public function removeObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }
    
    /**
     * {@inheritDoc}
     * @see \design\patterns\behavioral\observer\construct\Subject::notifyObservers()
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }    
    }
    
}