<?php
namespace LLA\Dci;

/**
 * Context trait
 */
trait ContextTrait {
    /**
     * Set context data
     * 
     * @param string $prop
     * @param mixed $value
     * @return this
     * @throws \Ris\Dci\ContextDataException
     */
    public function set($prop, $value) {
        $class = get_class($this);
        if(property_exists($class, $prop)) {
            // Use reflection to set private property
            $reflection = new \ReflectionProperty($class, $prop);
            $reflection->setAccessible(true);
            $reflection->setValue($this, $value);
        } else {
            $msg = sprintf("Unexpected data set `%s` on `%s`", $prop, $class);
            throw new ContextException($msg);
        }
        
        return $this;
    }
}