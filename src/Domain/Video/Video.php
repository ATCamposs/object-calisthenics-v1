<?php

namespace Alura\Calisthenics\Domain\Video;

class Video
{
    private bool $visibile = false;
    private int $ageLimit;

    public function publish(): void
    {
        $this->visibile = true;
    }

    public function isPublic(): bool
    {
        return $this->visibile === true;
    }

    /* código antigo para publicar.
    public function checkIfVisibilityIsValidAndUpdateIt(int $visibility): void
    {
        if (!in_array($visibility, [self::PUBLIC, self::PRIVATE])) {
            throw new \InvalidArgumentException('Invalid visibility');
        }
        
        $this->visibility = $visibility;
    }*/

    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }

    public function setAgeLimit(int $ageLimit): void
    {
        $this->ageLimit = $ageLimit;
    }
}
