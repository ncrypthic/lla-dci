<?php
namespace LLA\Dci;

/**
 * All property in this class should be necessary context data and should not 
 * be public.
 * 
 * @author Lim Afriyadi <lim.afriyadi.id@gmail.com>
 */
interface ContextInterface
{
    /**
     * Set context property
     * 
     * @param string $prop Context property name
     * @param mixed $value Context property value
     * @return this
     * @throws \Ris\Dci\ContextDataException
     */
    public function set($prop, $value);
    /**
     * Execute context
     * 
     * @return this
     */
    public function execute();
}
