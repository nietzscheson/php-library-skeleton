<?php

use Behat\Behat\Context\Context;
use Nietzscheson\PHPLibrarySkeleton\Skeleton;
use Nietzscheson\PHPLibrarySkeleton\SkeletonInterface;
use Webmozart\Assert\Assert;

class FeatureContext implements Context
{

    /**
     * @var SkeletonInterface
     */
    private $skeleton;

    public function __construct()
    {
        $this->skeleton = new Skeleton();
    }

    /**
     * @Given I generate a skeleton message as :message:
     * 
     * @param string $message
     */
    public function iGenerateASkeletonMessageAs(string $message)
    {
        $this->skeleton->setMessage($message);
    }

    /**
     * @Given Must me notified that I obtain the message
     */
    public function mustMeNotifiedThatIObtainTheMessage()
    {
        Assert::stringNotEmpty($this->skeleton->getMessage());
    }
}