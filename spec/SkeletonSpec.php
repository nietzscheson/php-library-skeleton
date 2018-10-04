<?php

/**
 * @package spec\Nietzscheson\PHPLibrarySkeleton
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\PHPLibrarySkeleton;

use Nietzscheson\PHPLibrarySkeleton\SkeletonInterface;
use PhpSpec\ObjectBehavior;

class SkeletonSpec extends ObjectBehavior
{

    function it_is_should_implement_a_skeleton_interface()
    {
        $this->shouldHaveType(SkeletonInterface::class);
    }

    function it_is_should_return_a_message()
    {
        $this->setMessage($message = 'The Skeleton message');

        $this->getMessage()->shouldReturn($message);
    }
}