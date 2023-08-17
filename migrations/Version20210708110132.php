<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708110132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cycle (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleve (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, matricule BIGINT NOT NULL, ddn DATE NOT NULL, lieunais VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscrire (id INT AUTO_INCREMENT NOT NULL, eleve_id INT DEFAULT NULL, mention_id INT NOT NULL, year_id INT NOT NULL, motif VARCHAR(255) DEFAULT NULL, date DATE NOT NULL, origin VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) NOT NULL, INDEX IDX_84CA37A8A6CC7B2 (eleve_id), INDEX IDX_84CA37A87A4147F0 (mention_id), INDEX IDX_84CA37A840C1FEA7 (year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE year (id INT AUTO_INCREMENT NOT NULL, current TINYINT(1) DEFAULT NULL, year VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscrire ADD CONSTRAINT FK_84CA37A8A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE inscrire ADD CONSTRAINT FK_84CA37A87A4147F0 FOREIGN KEY (mention_id) REFERENCES mention (id)');
        $this->addSql('ALTER TABLE inscrire ADD CONSTRAINT FK_84CA37A840C1FEA7 FOREIGN KEY (year_id) REFERENCES year (id)');
        $this->addSql('ALTER TABLE mention ADD cycle_id INT NOT NULL, ADD code VARCHAR(255) NOT NULL, ADD frais_ecolage DOUBLE PRECISION DEFAULT NULL, ADD frais_inscription DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE mention ADD CONSTRAINT FK_E20259CD5EC1162 FOREIGN KEY (cycle_id) REFERENCES cycle (id)');
        $this->addSql('CREATE INDEX IDX_E20259CD5EC1162 ON mention (cycle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mention DROP FOREIGN KEY FK_E20259CD5EC1162');
        $this->addSql('ALTER TABLE inscrire DROP FOREIGN KEY FK_84CA37A8A6CC7B2');
        $this->addSql('ALTER TABLE inscrire DROP FOREIGN KEY FK_84CA37A840C1FEA7');
        $this->addSql('DROP TABLE cycle');
        $this->addSql('DROP TABLE eleve');
        $this->addSql('DROP TABLE inscrire');
        $this->addSql('DROP TABLE year');
        $this->addSql('DROP INDEX IDX_E20259CD5EC1162 ON mention');
        $this->addSql('ALTER TABLE mention DROP cycle_id, DROP code, DROP frais_ecolage, DROP frais_inscription');
    }
}
