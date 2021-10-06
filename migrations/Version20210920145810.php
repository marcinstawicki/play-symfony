<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210920145810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE main_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE sub_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE main_entity (id INT NOT NULL, doctrine_one_to_one_relation_php_object_form_entity_id INT DEFAULT NULL, doctrine_string_php_string_form_text VARCHAR(255) NOT NULL, doctrine_text_php_string_form_textarea TEXT NOT NULL, doctrine_string_php_string_form_email VARCHAR(100) NOT NULL, doctrine_string_php_string_form_url VARCHAR(255) NOT NULL, doctrine_string_php_string_form_tel VARCHAR(15) NOT NULL, doctrine_string_php_string_form_color VARCHAR(7) NOT NULL, doctrine_string_php_string_form_password VARCHAR(20) NOT NULL, doctrine_string_php_string_form_search VARCHAR(100) NOT NULL, doctrine_smallint_php_integer_form_integer SMALLINT NOT NULL, doctrine_integer_php_integer_form_integer INT NOT NULL, doctrine_bigint_php_string_form_integer BIGINT NOT NULL, doctrine_decimal_php_string_form_number NUMERIC(10, 2) NOT NULL, doctrine_decimal_php_string_money NUMERIC(8, 2) NOT NULL, doctrine_decimal_php_string_form_percent NUMERIC(4, 2) NOT NULL, doctrine_string_php_string_form_country VARCHAR(2) NOT NULL, doctrine_string_php_string_form_language VARCHAR(2) NOT NULL, doctrine_string_php_string_form_locale VARCHAR(5) NOT NULL, doctrine_string_php_string_form_timezone VARCHAR(100) NOT NULL, doctrine_string_php_string_form_currency VARCHAR(3) NOT NULL, doctrine_smallint_php_integer_form_choice SMALLINT NOT NULL, doctrine_simple_array_php_array_form_choice TEXT NOT NULL, doctrine_array_php_array_form_choice TEXT NOT NULL, doctrine_json_php_array_form_choice JSON NOT NULL, doctrine_object_php_object_form_choice TEXT NOT NULL, doctrine_date_php_date_time_form_date DATE NOT NULL, doctrine_time_php_date_time_form_time TIME(0) WITHOUT TIME ZONE NOT NULL, doctrine_date_time_php_date_time_form_date_time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, doctrine_date_php_date_time_form_birthday DATE NOT NULL, doctrine_date_interval_php_date_interval_form_date_interval VARCHAR(255) NOT NULL, doctrine_date_time_immutable_php_date_time_form_date_time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, doctrine_string_php_string_form_week VARCHAR(9) NOT NULL, doctrine_smallint_php_integer_form_range SMALLINT NOT NULL, doctrine_boolean_php_boolean_form_checkbox BOOLEAN NOT NULL, doctrine_smallint_php_integer_form_radio SMALLINT NOT NULL, doctrine_string_php_string_form_file VARCHAR(255) NOT NULL, doctrine_float_php_double_form_number DOUBLE PRECISION NOT NULL, doctrine_guid_php_string_form_uuid UUID NOT NULL, doctrine_blob_php_resource_form_choice BYTEA NOT NULL, doctrine_json_php_array_form_collection JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9134FC7E9D3B3010 ON main_entity (doctrine_one_to_one_relation_php_object_form_entity_id)');
        $this->addSql('COMMENT ON COLUMN main_entity.doctrine_simple_array_php_array_form_choice IS \'(DC2Type:simple_array)\'');
        $this->addSql('COMMENT ON COLUMN main_entity.doctrine_array_php_array_form_choice IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN main_entity.doctrine_object_php_object_form_choice IS \'(DC2Type:object)\'');
        $this->addSql('COMMENT ON COLUMN main_entity.doctrine_date_interval_php_date_interval_form_date_interval IS \'(DC2Type:dateinterval)\'');
        $this->addSql('COMMENT ON COLUMN main_entity.doctrine_date_time_immutable_php_date_time_form_date_time IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE reset_password_request (id INT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, expires_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_7CE748AA76ED395 ON reset_password_request (user_id)');
        $this->addSql('COMMENT ON COLUMN reset_password_request.requested_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN reset_password_request.expires_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE sub_entity (id INT NOT NULL, doctrine_many_to_one_relation_php_object_main_entity_id INT DEFAULT NULL, doctrine_string_php_string_form_text1 VARCHAR(100) NOT NULL, doctrine_string_php_string_form_text2 VARCHAR(100) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BC790B242D1A2824 ON sub_entity (doctrine_many_to_one_relation_php_object_main_entity_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('ALTER TABLE main_entity ADD CONSTRAINT FK_9134FC7E9D3B3010 FOREIGN KEY (doctrine_one_to_one_relation_php_object_form_entity_id) REFERENCES sub_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE sub_entity ADD CONSTRAINT FK_BC790B242D1A2824 FOREIGN KEY (doctrine_many_to_one_relation_php_object_main_entity_id) REFERENCES main_entity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE sub_entity DROP CONSTRAINT FK_BC790B242D1A2824');
        $this->addSql('ALTER TABLE main_entity DROP CONSTRAINT FK_9134FC7E9D3B3010');
        $this->addSql('ALTER TABLE reset_password_request DROP CONSTRAINT FK_7CE748AA76ED395');
        $this->addSql('DROP SEQUENCE main_entity_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE sub_entity_id_seq CASCADE');
        $this->addSql('DROP TABLE main_entity');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE sub_entity');
        $this->addSql('DROP TABLE "user"');
    }
}
