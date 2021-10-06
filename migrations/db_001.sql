create table if not exists doctrine_migration_versions
(
    version varchar(191) not null
        constraint doctrine_migration_versions_pkey
            primary key,
    executed_at timestamp(0) default NULL::timestamp without time zone,
    execution_time integer
);

alter table doctrine_migration_versions owner to postgres;

create table if not exists main_entity
(
    id integer not null
        constraint main_entity_pkey
            primary key,
    doctrine_one_to_one_relation_php_object_form_entity_id integer,
    doctrine_string_php_string_form_text varchar(255) not null,
    doctrine_text_php_string_form_textarea text not null,
    doctrine_string_php_string_form_email varchar(100) not null,
    doctrine_string_php_string_form_url varchar(255) not null,
    doctrine_string_php_string_form_tel varchar(15) not null,
    doctrine_string_php_string_form_color varchar(7) not null,
    doctrine_string_php_string_form_password varchar(20) not null,
    doctrine_string_php_string_form_search varchar(100) not null,
    doctrine_smallint_php_integer_form_integer smallint not null,
    doctrine_integer_php_integer_form_integer integer not null,
    doctrine_bigint_php_string_form_integer bigint not null,
    doctrine_decimal_php_string_form_number numeric(10,2) not null,
    doctrine_decimal_php_string_money numeric(8,2) not null,
    doctrine_decimal_php_string_form_percent numeric(4,2) not null,
    doctrine_string_php_string_form_country varchar(2) not null,
    doctrine_string_php_string_form_language varchar(2) not null,
    doctrine_string_php_string_form_locale varchar(5) not null,
    doctrine_string_php_string_form_timezone varchar(100) not null,
    doctrine_string_php_string_form_currency varchar(3) not null,
    doctrine_smallint_php_integer_form_choice smallint not null,
    doctrine_simple_array_php_array_form_choice text not null,
    doctrine_array_php_array_form_choice text not null,
    doctrine_json_php_array_form_choice json not null,
    doctrine_object_php_object_form_choice text not null,
    doctrine_date_php_date_time_form_date date not null,
    doctrine_time_php_date_time_form_time time(0) not null,
    doctrine_date_time_php_date_time_form_date_time timestamp(0) not null,
    doctrine_date_php_date_time_form_birthday date not null,
    doctrine_date_interval_php_date_interval_form_date_interval varchar(255) not null,
    doctrine_date_time_immutable_php_date_time_form_date_time timestamp(0) not null,
    doctrine_string_php_string_form_week varchar(9) not null,
    doctrine_smallint_php_integer_form_range smallint not null,
    doctrine_boolean_php_boolean_form_checkbox boolean not null,
    doctrine_smallint_php_integer_form_radio smallint not null,
    doctrine_string_php_string_form_file varchar(255) not null,
    doctrine_float_php_double_form_number double precision not null,
    doctrine_guid_php_string_form_uuid uuid not null,
    doctrine_blob_php_resource_form_choice bytea not null,
    doctrine_json_php_array_form_collection json not null
);

comment on column main_entity.doctrine_simple_array_php_array_form_choice is '(DC2Type:simple_array)';

comment on column main_entity.doctrine_array_php_array_form_choice is '(DC2Type:array)';

comment on column main_entity.doctrine_object_php_object_form_choice is '(DC2Type:object)';

comment on column main_entity.doctrine_date_interval_php_date_interval_form_date_interval is '(DC2Type:dateinterval)';

comment on column main_entity.doctrine_date_time_immutable_php_date_time_form_date_time is '(DC2Type:datetime_immutable)';

alter table main_entity owner to postgres;

create unique index if not exists uniq_9134fc7e9d3b3010
    on main_entity (doctrine_one_to_one_relation_php_object_form_entity_id);

create table if not exists sub_entity
(
    id integer not null
        constraint sub_entity_pkey
            primary key,
    doctrine_many_to_one_relation_php_object_main_entity_id integer
        constraint fk_bc790b242d1a2824
            references main_entity,
    doctrine_string_php_string_form_text1 varchar(100) not null,
    doctrine_string_php_string_form_text2 varchar(100) not null
);

alter table sub_entity owner to postgres;

alter table main_entity
    add constraint fk_9134fc7e9d3b3010
        foreign key (doctrine_one_to_one_relation_php_object_form_entity_id) references sub_entity;

create index if not exists idx_bc790b242d1a2824
    on sub_entity (doctrine_many_to_one_relation_php_object_main_entity_id);

create table if not exists "user"
(
    id integer not null
        constraint user_pkey
            primary key,
    email varchar(180) not null,
    roles json not null,
    password varchar(255) not null,
    is_verified boolean not null
);

alter table "user" owner to postgres;

create table if not exists reset_password_request
(
    id integer not null
        constraint reset_password_request_pkey
            primary key,
    user_id integer not null
        constraint fk_7ce748aa76ed395
            references "user",
    selector varchar(20) not null,
    hashed_token varchar(100) not null,
    requested_at timestamp(0) not null,
    expires_at timestamp(0) not null
);

comment on column reset_password_request.requested_at is '(DC2Type:datetime_immutable)';

comment on column reset_password_request.expires_at is '(DC2Type:datetime_immutable)';

alter table reset_password_request owner to postgres;

create index if not exists idx_7ce748aa76ed395
    on reset_password_request (user_id);

create unique index if not exists uniq_8d93d649e7927c74
    on "user" (email);
