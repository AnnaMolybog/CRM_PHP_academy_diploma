<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160830113522 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE schema_role MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE schema_role DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE schema_role DROP id, DROP sequence');
        $this->addSql('ALTER TABLE schema_role ADD CONSTRAINT FK_8A2E6B51D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE schema_role ADD CONSTRAINT FK_8A2E6B51EA1BEF35 FOREIGN KEY (schema_id) REFERENCES approval_schema (id)');
        $this->addSql('CREATE INDEX IDX_8A2E6B51D60322AC ON schema_role (role_id)');
        $this->addSql('CREATE INDEX IDX_8A2E6B51EA1BEF35 ON schema_role (schema_id)');
        $this->addSql('ALTER TABLE schema_role ADD PRIMARY KEY (role_id, schema_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Schema_Role DROP FOREIGN KEY FK_8A2E6B51D60322AC');
        $this->addSql('ALTER TABLE Schema_Role DROP FOREIGN KEY FK_8A2E6B51EA1BEF35');
        $this->addSql('DROP INDEX IDX_8A2E6B51D60322AC ON Schema_Role');
        $this->addSql('DROP INDEX IDX_8A2E6B51EA1BEF35 ON Schema_Role');
        $this->addSql('ALTER TABLE Schema_Role DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE Schema_Role ADD id INT AUTO_INCREMENT NOT NULL, ADD sequence INT NOT NULL');
        $this->addSql('ALTER TABLE Schema_Role ADD PRIMARY KEY (id)');
    }
}
