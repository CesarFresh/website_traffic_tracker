# Website Traffic Tracker

This system is designed to track a website traffic by unique clients.

## Project Structure
├── README.md
├── .htaccess
├── public
│   ├── js
│   │   └── tracker.js
│   └── index.js
├── core
│   ├── Controller.php
│   ├── Model.php
│   └── Router.php
├── config
│   └── config.php
├── app
│   ├── controllers
│   │   ├── NotFoundController.php
│   │   ├── TestPage1Controller.php
│   │   ├── TestPage2Controller.php
│   │   ├── TrackReportController.php
│   │   └── TrafficTrackController.php
│   ├── helpers
│   │   └── ServerFunctions.php
│   ├── models
│   │   └── Traffic.php
│   ├── views
│   │   ├── 404.php
│   │   ├── Main.php
│   │   ├── TestPage1.php
│   │   ├── TestPage2.php
└── └── └── trackReport.php

## Components Description

### 1. **File `.htaccess`**
   Handle the URL rules for the page.
### 2. **Folder `public`**
   Contains the index and the public js.
   - **`index.php:`** First file called, require the config.php and Router.php files, call route() function.
   - **`js/`**
     *`tracker.js:`* Contains the tracker script that get the user information.
### 3. **Folder `core`**
   Contains the core functionality for the MVC structure.
   - **`Controller.php:`** Require the views and return the data to the views.
   - **`Model.php:`** Create the MySQL connection.
   - **`Router.php:`** Handle the URL to get the controller and method to consume.
### 4. **Folder `config`**
   Contains the config file with environment variables.
   - **`config.php:`** Store the environment critical data for the system.
### 5. **Folder `app`**
   Contains all the custom controllers, models, views and helpers.
   - **`controllers/`**
     *`NotFoundController.php:`* Return a 404 view when URL is not found.
     *`TestPage1Controller.php:`* Return a simple view to track user info.
     *`TestPage2Controller.php:`* Return a simple view to track user info.
     *`TrackReportController.php:`* Is the view where we can see the traffic report of unique visits per page, filtering by date range.
     *`TrafficTrackController.php:`* Receive the visitor data tracked and send it to Traffic.php model.
   - **`helpers/`**
     *`ServerFunctions.php:`* Has a function that return a random IP to simulate multiple users, but can be modified to return the real user IP from $_SERVER variable.
   - **`models/`**
     *`Traffic.php:`* Save and get the tracked visitor data.
   - **`views/`**
     *`404.php:`* A simple 404 view.
     *`Main.php:`* Contains the main HTML structure and receive the title and content of the page, also contains the tracker script.
     *`TestPage1.php:`* Simple page to test the tracker script.
     *`TestPage2.php:`* Simple page to test the tracker script.
     *`TrackerReport.php:`* Main page where we can filter by a date range and get track information.

## Initial Configuration

### System Requirements
- Web Server (XAMPP).

### Configuration Steps
1. Clone this repository in the path `C:\xampp\htdocs\website_traffic_tracker`.
2. Import the file `tracker_db.sql` in your DB to create the table.
3. Setup `config/config.php` with your DB credentials.

### Project Execution
Go to `localhost/website_traffic_tracker` in your browser to start the system.

### Usage
Open `localhost/website_traffic_tracker/track-report` to open the main page, here you can filter by a date range to get a report of unique visits per page.

Open `localhost/website_traffic_tracker/test-page-1` or `localhost/website_traffic_tracker/test-page-1` to trigger the script that will track the visitor data

### Notes
Currently there is a function that generates random IPs in order to simulate unique visits per page, but is in the same function commented the real code that gets the real IP.