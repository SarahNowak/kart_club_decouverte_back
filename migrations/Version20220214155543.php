<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214155543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trips CHANGE description description TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE class_adult class_adult VARCHAR(255) NOT NULL, CHANGE material_adult material_adult VARCHAR(255) NOT NULL, CHANGE tarif_adult_member tarif_adult_member VARCHAR(255) NOT NULL, CHANGE tarif_adult_ext tarif_adult_ext VARCHAR(255) NOT NULL, CHANGE tarif_adult tarif_adult VARCHAR(255) NOT NULL, CHANGE session_adult session_adult TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE class_young class_young VARCHAR(255) NOT NULL, CHANGE material_young material_young VARCHAR(255) NOT NULL, CHANGE tarif_young_member tarif_young_member VARCHAR(255) NOT NULL, CHANGE tarif_young_ext tarif_young_ext VARCHAR(255) NOT NULL, CHANGE tarif_young tarif_young VARCHAR(255) NOT NULL, CHANGE class_min_junior class_min_junior VARCHAR(255) NOT NULL, CHANGE class_max_junior class_max_junior VARCHAR(255) NOT NULL, CHANGE material_junior material_junior VARCHAR(255) NOT NULL, CHANGE tarif_junior_member tarif_junior_member VARCHAR(255) NOT NULL, CHANGE tarif_junior_ext tarif_junior_ext VARCHAR(255) NOT NULL, CHANGE tarif_junior tarif_junior VARCHAR(255) NOT NULL, CHANGE session_junior session_junior TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE photos_trip photos_trip TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE coordinates coordinates TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE session_young session_young TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE created_at created_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trips CHANGE description description TINYTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE class_adult class_adult VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE material_adult material_adult VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_adult_member tarif_adult_member VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_adult_ext tarif_adult_ext VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_adult tarif_adult VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE class_young class_young VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE material_young material_young VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_young_member tarif_young_member VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_young_ext tarif_young_ext VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_young tarif_young VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE class_min_junior class_min_junior VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE class_max_junior class_max_junior VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE material_junior material_junior VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_junior_member tarif_junior_member VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_junior_ext tarif_junior_ext VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tarif_junior tarif_junior VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE session_junior session_junior LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE photos_trip photos_trip TINYTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE coordinates coordinates TINYTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE session_young session_young LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE session_adult session_adult LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE created_at created_at DATETIME DEFAULT NULL');
    }
}
