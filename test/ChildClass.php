<?php
namespace anaklanangev\ObjectIntruderTests;
class ChildClass extends ParentClass
{
    use SiblingTrait;
    private $child = "child";
    private function child()
    {
        return "child";
    }
}
