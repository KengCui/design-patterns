<?php
/**
 * 具体主题对象
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\spl;

class ConcreteSubject implements \SplSubject
{
    
    /**
     * @var \SplObjectStorage
     */
    public $observers;
    
    /**
     * 构造函数
     *
     * @author cuikeng
     * @since 1.0
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }
    
    /**
     * {@inheritDoc}
     * @see SplSubject::attach()
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    
    /**
     * {@inheritDoc}
     * @see SplSubject::detach()
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    
    /**
     * {@inheritDoc}
     * @see SplSubject::notify()
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    
}