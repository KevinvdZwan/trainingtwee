<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200128114043 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person CHANGE firstname firstname VARCHAR(255) DEFAULT NULL, CHANGE preprovision preprovision VARCHAR(255) DEFAULT NULL, CHANGE lastname lastname VARCHAR(255) DEFAULT NULL, CHANGE dateofbirth dateofbirth DATE DEFAULT NULL, CHANGE gender gender VARCHAR(255) DEFAULT NULL, CHANGE emailadress emailadress VARCHAR(255) DEFAULT NULL, CHANGE hiring_date hiring_date VARCHAR(255) DEFAULT NULL, CHANGE salary salary NUMERIC(5, 2) DEFAULT NULL, CHANGE street street VARCHAR(255) DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(255) DEFAULT NULL, CHANGE place place VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person CHANGE firstname firstname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE preprovision preprovision VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE lastname lastname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE dateofbirth dateofbirth DATE NOT NULL, CHANGE gender gender VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE emailadress emailadress VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE hiring_date hiring_date VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE salary salary NUMERIC(5, 2) NOT NULL, CHANGE street street VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE postal_code postal_code VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE place place VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
