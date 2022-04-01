<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330084937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blood_bank ADD address_id INT NOT NULL');
        $this->addSql('ALTER TABLE blood_bank ADD CONSTRAINT FK_28F835A0F5B7AF75 FOREIGN KEY (address_id) REFERENCES blood_bank_address (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_28F835A068C814C7 ON blood_bank (code_name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_28F835A0F5B7AF75 ON blood_bank (address_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blood_bank DROP FOREIGN KEY FK_28F835A0F5B7AF75');
        $this->addSql('DROP INDEX UNIQ_28F835A068C814C7 ON blood_bank');
        $this->addSql('DROP INDEX UNIQ_28F835A0F5B7AF75 ON blood_bank');
        $this->addSql('ALTER TABLE blood_bank DROP address_id');
    }
}
