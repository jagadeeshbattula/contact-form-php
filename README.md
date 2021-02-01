### Contact Form Application

#### Description
- A simple contact form application to collect the visitor details like name, email, phone etc through a form.
- On submission data is validated and saved to Database.
- An email will be sent to the client with the details of the visitor.

#### Technologies
Used PHP in the backend and HTML, JavaScript, jQuery in the frontend. Stored data using mySQL database.

#### Initialization
After deploying the app, run the following migrations to create a new table to store visitor information.

```
cd database/migrations
php contact_requests.php
```