<?

namespace App\Entity;

class Lego {
    private int $id;
    private string $name;
    private string $collection;
    private string $description;
    private float $price;
    private int $pieces;
    private string $imageBox;
    private string $imageMain;

    public function __construct(int $id, string $name, string $collection) {
        $this->id = $id;
        $this->name = $name;
        $this->collection = $collection;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCollection(): string {
        return $this->collection;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getPieces(): int {
        return $this->pieces;
    }

    public function setPieces(int $pieces): void {
        $this->pieces = $pieces;
    }

    public function getboxImage(): string {
        return $this->imageBox;
    }

    public function setboxImage(string $imageBox): void {
        $this->imageBox = $imageBox;
    }

    public function getlegoImage(): string {
        return $this->imageMain;
    }

    public function setlegoImage(string $imageMain): void {
        $this->imageMain = $imageMain;
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'collection' => $this->collection,
            'description' => $this->description,
            'price' => $this->price,
            'pieces' => $this->pieces,
            'imageBox' => $this->imageBox,
            'imageMain' => $this->imageMain
        ];
    }
}