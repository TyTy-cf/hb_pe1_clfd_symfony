<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220103134833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rank ADD student_id INT NOT NULL');
        $this->addSql('ALTER TABLE rank ADD CONSTRAINT FK_8879E8E5CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('CREATE INDEX IDX_8879E8E5CB944F1A ON rank (student_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rank DROP FOREIGN KEY FK_8879E8E5CB944F1A');
        $this->addSql('DROP INDEX IDX_8879E8E5CB944F1A ON rank');
        $this->addSql('ALTER TABLE rank DROP student_id');
    }
}
