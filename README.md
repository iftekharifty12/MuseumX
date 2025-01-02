# MuseumX

MuseumX is a web-based DBMS project built with PHP, HTML, and CSS. It allows users to explore information about museums across the country and their artifacts. Additionally, users can purchase tickets for museum visits. From the admin end, administrators can manage museum and artifact data, including adding, updating, or deleting entries.

## Features

### User Features
- Browse information about museums across the country.
- View details of artifacts housed in these museums.
- Purchase tickets to visit museums.

### Admin Features
- Add, update, or delete museums.
- Add, update, or delete artifact information.
- Manage all museum-related data dynamically.

## Requirements

- **XAMPP**: To set up and run the local server and database.
- **PHP**: Backend scripting.
- **HTML & CSS**: Frontend design and styling.
- **MySQL**: Database management.

## Installation and Setup

1. **Download and Install XAMPP**
   - Download XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
   - Install XAMPP and start the Apache and MySQL modules.

2. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/MuseumX.git
   ```

3. **Move Project to XAMPP Directory**
   - Copy the `MuseumX` project folder into the `htdocs` directory located in your XAMPP installation folder (e.g., `C:\xampp\htdocs`).

4. **Set Up the Database**
   - Open phpMyAdmin by navigating to `http://localhost/phpmyadmin`.
   - Create a new database named `museumx_db`.
   - Import the database file `museumx_db.sql` from the project directory into the newly created database.

5. **Run the Application**
   - Open your browser and navigate to `http://localhost/MuseumX` to access the project.

## Folder Structure

```
MuseumX/
├── assets/        # Static files (CSS, images, etc.)
├── includes/      # PHP includes (headers, footers, etc.)
├── admin/         # Admin panel files
├── user/          # User-facing features
├── db/            # Database configuration
├── index.php      # Main entry point
└── README.md      # Project documentation
```

## Usage

- **Users**: Explore museums, view artifacts, and purchase tickets through the user interface.
- **Admins**: Log in to the admin panel to manage museum and artifact data dynamically.

## Screenshots

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

## Acknowledgements

- Thanks to the XAMPP and phpMyAdmin teams for providing robust tools for local development.

## Credits

- Developed by [Iftekhar Ul Islam](https://github.com/iftekharifty12). Thank you for visiting this repository!
