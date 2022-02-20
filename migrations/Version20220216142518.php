<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216142518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE member_family_trips (member_family_id INT NOT NULL, trips_id INT NOT NULL, INDEX IDX_E3B77D21837680AF (member_family_id), INDEX IDX_E3B77D216C2C0C (trips_id), PRIMARY KEY(member_family_id, trips_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE member_family_trips ADD CONSTRAINT FK_E3B77D21837680AF FOREIGN KEY (member_family_id) REFERENCES member_family (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member_family_trips ADD CONSTRAINT FK_E3B77D216C2C0C FOREIGN KEY (trips_id) REFERENCES trips (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE member_family_trips');
    }
}
