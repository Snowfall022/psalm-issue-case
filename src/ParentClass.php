<?php

namespace Test;

abstract class ParentClass
{
    /**
     * @param int[] $oldTemplateParameters
     * @param int[] $newTemplateParameters
     */
    abstract protected function doUpdate(
        array $oldTemplateParameters,
        array $newTemplateParameters
    ): bool;
}
