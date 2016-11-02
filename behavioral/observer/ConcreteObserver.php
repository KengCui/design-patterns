<?php
/**
 * 具体观察者对象
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer;

class ConcreteObserver implements Observer
{
    
    /**
     * @var boolean 状态
     */
    public $notified = false;
	
    /**
     * {@inheritDoc}
     * @see \design\patterns\behavioral\observer\Observer::update()
     */
    public function update(Subject $subject)
    {
	    $this->notified = true;
    }
	
}