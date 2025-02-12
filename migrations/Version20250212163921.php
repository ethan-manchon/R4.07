<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250212163921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lego_collection ADD lego_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lego_collection ADD CONSTRAINT FK_5A1057D5814372C FOREIGN KEY (lego_id) REFERENCES lego (id)');
        $this->addSql('CREATE INDEX IDX_5A1057D5814372C ON lego_collection (lego_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lego_collection DROP FOREIGN KEY FK_5A1057D5814372C');
        $this->addSql('DROP INDEX IDX_5A1057D5814372C ON lego_collection');
        $this->addSql('ALTER TABLE lego_collection DROP lego_id');
    }
}
