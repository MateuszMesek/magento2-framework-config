<?php declare(strict_types=1);

namespace MateuszMesek\Framework\Config\Converter;

use DOMNode;

interface ProcessorInterface
{
    /**
     * @param \DOMNode $node
     * @return array
     */
    public function process(DOMNode $node): array;
}
