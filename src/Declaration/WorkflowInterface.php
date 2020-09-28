<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Declaration;

interface WorkflowInterface extends HandledDeclarationInterface
{
    /**
     * @return iterable|callable[]
     */
    public function getQueryHandlers(): iterable;

    /**
     * @param string $name
     * @param callable $callback
     */
    public function addQueryHandler(string $name, callable $callback): void;

    /**
     * @return iterable|callable[]
     */
    public function getSignalHandlers(): iterable;

    /**
     * @param string $name
     * @param callable $callback
     */
    public function addSignalHandler(string $name, callable $callback): void;
}
