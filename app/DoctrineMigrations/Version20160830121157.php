<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160830121157 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Project_User (role_id INT NOT NULL, schema_id INT NOT NULL, INDEX IDX_C016A97D60322AC (role_id), INDEX IDX_C016A97EA1BEF35 (schema_id), PRIMARY KEY(role_id, schema_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Project_User ADD CONSTRAINT FK_C016A97D60322AC FOREIGN KEY (role_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE Project_User ADD CONSTRAINT FK_C016A97EA1BEF35 FOREIGN KEY (schema_id) REFERENCES project (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Project_User');
    }
}
