<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220104090743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_rank (student_id INT NOT NULL, rank_id INT NOT NULL, INDEX IDX_B75A933DCB944F1A (student_id), INDEX IDX_B75A933D7616678F (rank_id), PRIMARY KEY(student_id, rank_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE student_rank ADD CONSTRAINT FK_B75A933DCB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_rank ADD CONSTRAINT FK_B75A933D7616678F FOREIGN KEY (rank_id) REFERENCES rank (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rank DROP FOREIGN KEY FK_8879E8E5CB944F1A');
        $this->addSql('DROP INDEX IDX_8879E8E5CB944F1A ON rank');
        $this->addSql('ALTER TABLE rank DROP student_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE student_rank');
        $this->addSql('ALTER TABLE rank ADD student_id INT NOT NULL');
        $this->addSql('ALTER TABLE rank ADD CONSTRAINT FK_8879E8E5CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('CREATE INDEX IDX_8879E8E5CB944F1A ON rank (student_id)');
    }
}
