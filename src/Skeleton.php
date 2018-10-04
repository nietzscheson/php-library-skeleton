<?php

/**
 * @package Nietzscheson\PHPLibrarySkeleton
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\PHPLibrarySkeleton;

use Nietzscheson\PHPLibrarySkeleton\SkeletonInterface;


class Skeleton implements SkeletonInterface
{

    /**
     * @var string
     */
    protected $message;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}