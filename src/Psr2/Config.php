<?php
declare(strict_types=1);

namespace PhpLint\Plugin\DoubleFist\Psr2;

use PhpLint\Plugin\AbstractConfigPlugin;

class Config extends AbstractConfigPlugin
{
    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'DoubleFist/Psr2';
    }

    /**
     * @inheritdoc
     */
    public function getExtends(): array
    {
        return [
            'DoubleFist/Psr1',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getPlugins(): array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getRules(): array
    {
        return [];
    }
}
