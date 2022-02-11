<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208144150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member_family ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member_family ADD CONSTRAINT FK_8130A368A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8130A368A76ED395 ON member_family (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member_family DROP FOREIGN KEY FK_8130A368A76ED395');
        $this->addSql('DROP INDEX IDX_8130A368A76ED395 ON member_family');
        $this->addSql('ALTER TABLE member_family DROP user_id');
    }
}
