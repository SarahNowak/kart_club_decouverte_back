<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214162257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trips CHANGE class_min_junior class_min_junior VARCHAR(255) DEFAULT NULL, CHANGE class_max_junior class_max_junior VARCHAR(255) DEFAULT NULL, CHANGE material_junior material_junior VARCHAR(255) DEFAULT NULL, CHANGE tarif_junior_member tarif_junior_member VARCHAR(255) DEFAULT NULL, CHANGE tarif_junior_ext tarif_junior_ext VARCHAR(255) DEFAULT NULL, CHANGE tarif_junior tarif_junior VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trips CHANGE class_min_junior class_min_junior VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE class_max_junior class_max_junior VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE material_junior material_junior VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_junior_member tarif_junior_member VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_junior_ext tarif_junior_ext VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_junior tarif_junior VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
