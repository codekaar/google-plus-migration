# google-plus-migration

A tool to migrate Google+ Community to GraphJS Server.

## Requirements
* [GraphJS Server](https://github.com/phonetworks/graphjs-server) (See below)
* PHP 7.2+
* PHP extensions: bcmath, and sodium
* [Composer](https://getcomposer.org/)
* [Git](https://git-scm.com/)
* Redis: [Install](https://redis.io/topics/quickstart)
* Neo4j: [Install](https://neo4j.com/download/)

## GraphJS Server
You should have a clean installation of GraphJS Server.
1. Clone the repo
    ```
    git clone https://github.com/phonetworks/graphjs-server/
    ```
1. Install PHP dependencies
    ```
    composer install
    ```

3. Create a copy **.env.example** file as **.env** file.

4. Update the **.env** file.

    1. Set the Neo4j username and password of **INDEX_URI**.
        For example:
        ```
        bolt://neo4j_username:neo4j_password@localhost:7687
        ```
    2. Set values of **FOUNDER_NICKNAME**, **FOUNDER_EMAIL**, **FOUNDER_PASSWORD**.

    3. Set values of **MAILGUN_KEY**, **MAILGUN_DOMAIN**. (Optional)

For more information on GraphJS Server installation, see [https://github.com/phonetworks/graphjs-server/blob/master/README.md](https://github.com/phonetworks/graphjs-server/blob/master/README.md)

## Installation
1. Clone the repo
    ```
    git clone https://github.com/pho-incubator/google-plus-migration
    ```
1. Install PHP dependencies
    ```
    composer install
    ```
1. Copy `.env.example` as `.env`
1. Edit `.env` accordingly. Since this tool use same infrastructure as GraphJS Server, most of the values are same as in GraphJS Server's `.env`.

## Usage

1. Download your Google+ Community data from this [link](https://support.google.com/plus/answer/1045788)

1. Copy the content of the exported file from Google+ Community to the **google-plus-exports** folder

    For example, if your community name is *foo*, copy the contents of `Takeout/Google+ Communities/foo/` into `google-plus-migrator/google-plus-exports/`. There should be `Members.vcf` file inside `google-plus-migrator/google-plus-exports/`.

1. Run the migration of Google+ to GraphJS Server
    ```
    # cd google-plus-migration
    php migrate.php
    ```
1. Start GraphJS Server
    ```
    # cd graphjs-server
    php run.php
    ```

## License

MIT, see [LICENSE](https://github.com/pho-incubator/google-plus-migration/blob/master/LICENSE).
