<?php
declare(strict_types=1);

namespace App\ORM\Entity;

use Laventure\Component\Http\Message\Response\Utils\JsonEncoder;

/**
 * Book
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\ORM\Entity
 */
class Book
{
    private ?string $id = null;
    private string $title;
    private string $description;
    private float $price;
    private ?string $image = null;

    public function __construct(
        string $title,
        string $description,
        float $price,
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     * @return Book
    */
    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }




    /**
     * @return array
    */
    public function toArray(): array
    {
        return get_object_vars($this);
    }


    public function toJson(): string
    {
        return JsonEncoder::encode($this->toArray());
    }
}