<?php
/**
 * 主题接口
 *
 * @author Cui Keng
 * @since 1.0 
 */

namespace design\patterns\behavioral\observer\construct;

interface Subject
{
	
    /**
     * 注册观察者
     *
     * @param Observer $observer 观察者对象
     * @author cuikeng
     * @since 1.0
     */
    public function registerObserver(Observer $observer);
	
    /**
     * 注销观察者
     *
     * @param Observer $observer 观察者对象
     * @author cuikeng
     * @since 1.0
	 */
    public function removeObserver(Observer $observer);
	
    /**
     * 通知观察者
     *
     * @author cuikeng
     * @since 1.0
     */
    public function notifyObservers();
	
}