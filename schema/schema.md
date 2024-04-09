# Study of the database tables _(reflections)_

## Database Table Legend (Abbreviations)

- PK = Primary Key
- AI = Auto Increment
- FK = Foreign Key
- NN = Not Null
- UQ = Unique
- BIGINT = Big Integer
- VARCHAR() = Variable Character Length
- DATE = YYYY-MM-DD
- DATETIME = YYYY-MM-DD HH-MM-SS

## Tables:

1. Users

- id | BIGINT PK AI UQ NN
- username | VARCHAR(30) UQ NN
- email | VARCHAR(100) UQ NN
- password | VARCHAR(100) NN
- birthdate | DATE
- phone | VARCHAR(30) UQ
- created_at | DATETIME NN
- updated_at | DATETIME

2. Posts

- id | BIGINT PK AI UQ NN
- title | TEXT NN
- date | DATETIME NN
- created_at | DATETIME NN
- updated_at | DATETIME
- user_id | FK
- tag_id | FK

3. Medias

- id | BIGINT PK AI UQ NN
- type | VARCHAR(50)
- path | VARCHAR(255) NN
- created_at | DATETIME
- updated_at | DATETIME
- user_id | FK

4. Likes

- date | DATETIME NN
- created_at | DATETIME NN
- updated_at | DATETIME
- post_id | FK
- user_id | FK

5. Tags

- id | BIGINT PK AI UQ NN
- name | VARCHAR(50) UQ NN

6. Comments

- comment_text | TEXT NN
- date | DATETIME NN
- created_at | DATETIME NN
- updated_at | DATETIME
- post_id | FK
- user_id | FK
