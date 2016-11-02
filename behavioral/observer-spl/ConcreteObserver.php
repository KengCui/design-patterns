<?php
/**
 * 具体观察者对象
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\spl;

class ConcreteObserver implements \SplObserver
{
    
    /**
     * @var boolean 状态
     */
    public $notified = false;
    
    /**
     * {@inheritDoc}
     * @see SplObserver::update()
     */
    public function update(\SplSubject $subject)
    {
        $this->notified = true;
    }
    
}