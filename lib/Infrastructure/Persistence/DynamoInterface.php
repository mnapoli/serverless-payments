<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence;

use JsonSerializable;

interface DynamoInterface extends JsonSerializable {
	public static function tableName(): string;

	public static function hashName(): string;

	public static function rangeName(): ?string;

	public static function hydrate(array $item): self;
}
