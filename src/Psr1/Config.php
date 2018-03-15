<?php
declare(strict_types=1);

namespace PhpLint\Plugin\DoubleFist\Psr1;

use PhpLint\Plugin\AbstractConfigPlugin;

class Config extends AbstractConfigPlugin
{
    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'DoubleFist/Psr1';
    }

    /**
     * @inheritdoc
     */
    public function getExtends(): array
    {
        return [];
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
        return [
            'class-constant-name' => 'error',
            'class-name' => 'error',
            'class-namespace' => 'error',
            'method-name' => 'error',
            'single-class-in-file' => 'error',
            'single-namespace-in-file' => 'error',
        ];
    }
}
