SHARED HOSTING DEPLOYMENT GUIDE
===============================

This project (madelia-full-app) is 100% ready for cPanel or any Shared Hosting!

1. UPLOAD
---------
Simply upload the entire contents of the `madelia-full-app` folder directly into your `public_html` directory via cPanel File Manager or FTP.

A special `.htaccess` file has already been included in the root directory that will automatically route all web traffic directly into the Laravel `public/` directory! You do not need to change any server document roots.

2. DATABASE CONNECTION (MYSQL)
------------------------------
Right now, for local testing, the site is using a SQLite database (database/database.sqlite).
To connect it to your live MySQL database on shared hosting:
- Open the `.env` file in the root folder.
- Find `DB_CONNECTION=sqlite` and change it to `DB_CONNECTION=mysql`
- Add your MySQL credentials:
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_cpanel_database_name
    DB_USERNAME=your_cpanel_database_user
    DB_PASSWORD=your_cpanel_password

3. PHOTOS & MEDIA
-----------------
All of your live product photos and ad images have already been downloaded directly from your live site and placed securely into `public/images/products/`. They are fully connected to the database and will display identically on both the user frontend and the admin panel!

No other configuration is needed!
