<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210713074833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscrire ADD etudiant_id INT NOT NULL');
        $this->addSql('ALTER TABLE inscrire ADD CONSTRAINT FK_84CA37A8DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_84CA37A8DDEAB1A3 ON inscrire (etudiant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscrire DROP FOREIGN KEY FK_84CA37A8DDEAB1A3');
        $this->addSql('DROP INDEX UNIQ_84CA37A8DDEAB1A3 ON inscrire');
        $this->addSql('ALTER TABLE inscrire DROP etudiant_id');
    }
}
