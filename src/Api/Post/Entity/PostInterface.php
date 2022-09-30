<?php

namespace App\Api\Post\Entity;

use App\Api\Club\Entity\ClubInterface;
use App\Api\User\Entity\UserInterface;
use DateTimeInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface PostInterface.
 */
interface PostInterface
{
    /**
     * Get post id.
     *
     * @return string
     *  Unique identifier
     */
    public function getId(): string;

    /**
     * Get post user.
     *
     * @return UserInterface
     *  User
     */
    public function getUser(): UserInterface;

    /**
     * Set post user.
     *
     * @param UserInterface $user
     *  User
     */
    public function setUser(UserInterface $user): self;

    /**
     * Get post name.
     *
     * @return string
     *  Name
     */
    public function getName(): string;

    /**
     * Get post slug.
     *
     * @return string
     *  Slug
     */
    public function getSlug(): string;

    /**
     * Get likes media path.
     *
     * @return string
     *  Path
     */
    public function getMediaPath(): string;

    /**
     * Get post likes.
     *
     * @return array
     *  Likes
     */
    public function getLikes(): array;

    /**
     * Get post comments.
     *
     * @return array
     *  Comments
     */
    public function getComments(): array;

    /**
     * Get post creation date.
     *
     * @return DateTimeInterface
     *  Date
     */
    public function getCreatedAt(): DateTimeInterface;

    /**
     * Get post club.
     *
     * @return ClubInterface
     *  Club
     */
    public function getClub(): ClubInterface;

    /**
     * Set post club.
     *
     * @param ClubInterface $club
     *  Club
     */
    public function setClub(ClubInterface $club): self;
}
