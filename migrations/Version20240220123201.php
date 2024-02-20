<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240220123201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hospital ADD CONSTRAINT FK_4282C85B87F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id)');
        $this->addSql('ALTER TABLE medications ADD medical_notes VARCHAR(255) NOT NULL, ADD dosage VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hospital DROP FOREIGN KEY FK_4282C85B87F4FB17');
        $this->addSql('ALTER TABLE medications MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON medications');
        $this->addSql('ALTER TABLE medications DROP medical_notes, DROP dosage, CHANGE id id INT NOT NULL');
    }
}
