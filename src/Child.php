<?php

namespace Test;

class Child extends ParentClass
{
    /**
     * @param int[] $oldTemplateParameters
     * @param int[] $newTemplateParameters
     */
    protected function doUpdate(array $oldTemplateParameters, array $newTemplateParameters): bool
    {
        return true;
    }
}
