<?php
/**
 * This is description
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\construct;

class ConcreteObserver implements Observer
{
    
    /**
     * @var Subject
     */
    private $subject;
    
    /**
     * @var boolean 状态
     */
    public $notified = false;
    
    /**
     * 构造函数
     *
     * @param Subject $subject
     * @author cuikeng
     * @since 1.0
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $subject->registerObserver($this);
    }
    
    /**
     * {@inheritDoc}
     * @see \design\patterns\behavioral\observer\construct\Observer::update()
     */
    public function update()
    {
        $this->notified = true;
    }
    
}