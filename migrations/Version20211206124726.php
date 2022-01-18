<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211206124726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trip (id INT AUTO_INCREMENT NOT NULL, img_card VARCHAR(255) NOT NULL, circuit VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', class_adult VARCHAR(255) DEFAULT NULL, material_adult VARCHAR(255) DEFAULT NULL, tarif_adult_member VARCHAR(255) DEFAULT NULL, tarif_adult_ext VARCHAR(255) DEFAULT NULL, tarif_adult VARCHAR(255) DEFAULT NULL, session_adult VARCHAR(255) DEFAULT NULL, class_young VARCHAR(255) DEFAULT NULL, material_young VARCHAR(255) DEFAULT NULL, tarif_young_member VARCHAR(255) DEFAULT NULL, tarif_young_ext VARCHAR(255) DEFAULT NULL, tarif_young VARCHAR(255) DEFAULT NULL, class_min_junior VARCHAR(255) DEFAULT NULL, class_max_junior VARCHAR(255) DEFAULT NULL, material_junior VARCHAR(255) DEFAULT NULL, tarif_junior_member VARCHAR(255) DEFAULT NULL, tarif_junior_ext VARCHAR(255) DEFAULT NULL, tarif_junior VARCHAR(255) DEFAULT NULL, session_junior LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', photos_trip LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', coordinates LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', session_young LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE trip');
    }
}
