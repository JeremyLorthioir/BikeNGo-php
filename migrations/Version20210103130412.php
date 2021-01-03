<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210103130412 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE loueur ADD description VARCHAR(255) NOT NULL, ADD title VARCHAR(255) NOT NULL, ADD open_days VARCHAR(255) NOT NULL, ADD open_hours VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE station ADD description VARCHAR(255) NOT NULL, ADD title VARCHAR(255) NOT NULL, ADD picture_url VARCHAR(255) NOT NULL, ADD season_start VARCHAR(255) NOT NULL, ADD season_end VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE loueur DROP description, DROP title, DROP open_days, DROP open_hours');
        $this->addSql('ALTER TABLE station DROP description, DROP title, DROP picture_url, DROP season_start, DROP season_end');
    }
}
