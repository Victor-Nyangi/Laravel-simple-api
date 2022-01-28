# Laravel App that fetches canidate summaries and stores in database

# Short description

- The API endpoint provides summary fundraising information for a specified politician https://www.opensecrets.org/api/?method=candSummary&output=json&cid=N00007360&cycle=2022&apikey=b3387953b0d86dcae8a98bfed9498222 

and it has the following required parameters

    - $method='candSummary';
    - $output='json';
    - $cid='N00007360'; The candidate key
    - $cycle=2022;
    - $apikey='b3387953b0d86dcae8a98bfed9498222';
    
- To fetch random cycles 2012, 2014, 2016, 2018, 2020, 2022 for random data a respective canidate in this case Nancy Pelosi with key N00007360. Every time the page is reloaded, if values with the same key exist in the table, they are dropped and new values are added. Then data is fetched and displayed in a table. Due to long response time, I chose to limit the cid to Nancy Pelosi, however the program works with an other $cid e.g. N00000781




# Steps

- Change the *.env.example* to *.env* and add your database info

- Using SQLite, replace the database details with the information below

        DB_CONNECTION=sqlite
        DB_HOST=127.0.0.1
        DB_PORT=3306

- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate__  (it has some seeded data)

- Run __npm i && npm run dev__ to install node modules and build assets
- Create a _database.sqlite_ file in the _database_ directory

- Run __php artisan serve__

# Run the webserver on port 8000

## Routes

```
# Public

- API route to get the fetched data from the database
GET   /api/candsummary

- WEB route to display the data from the databasse
http://127.0.0.1:8000/

```
