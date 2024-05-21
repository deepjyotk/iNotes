# Note Making App

## Introduction
Welcome to the Note Making App! This is a simple and efficient note-taking application built using PHP and MySQL with Apache Tomcat as the server. The app allows users to manage their notes effortlessly by providing functionalities to add, edit, delete, and view notes.

## Features
- **Add Notes**: Easily add new notes to keep track of your thoughts and tasks.
- **Edit Notes**: Modify existing notes to update information or correct errors.
- **Delete Notes**: Remove notes that are no longer needed.
- **View Notes**: View all your notes in a structured and organized manner.

## Technologies Used
- **PHP**: Server-side scripting language used for the backend logic.
- **MySQL**: Database management system to store and manage notes.
- **Apache Tomcat**: Web server used to deploy and run the application.

## Installation and Setup
To run this project locally, follow these steps:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/note-making-app.git
   cd note-making-app
   ```

2. **Set Up the Database**
   - Import the `notes.sql` file located in the `database` directory to your MySQL server. This file contains the necessary tables and initial data for the application.
   - Update the database configuration in `config.php` file with your MySQL credentials.
     ```php
     <?php
     $servername = "localhost";
     $username = "your-username";
     $password = "your-password";
     $dbname = "your-database-name";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

3. **Deploy the Application**
   - Ensure you have Apache Tomcat installed and running on your machine.
   - Place the project files in the webapps directory of your Tomcat installation.
   - Start the Tomcat server if it is not already running.

4. **Access the Application**
   - Open your web browser and navigate to `http://localhost:8080/note-making-app`.
   - You should see the homepage of the Note Making App where you can start managing your notes.

## Usage
- **Adding a Note**: Click on the "Add Note" button and fill in the details of your note.
- **Editing a Note**: Click on the "Edit" button next to the note you want to modify.
- **Deleting a Note**: Click on the "Delete" button next to the note you want to remove.
- **Viewing Notes**: All your notes are displayed on the homepage, where you can view them at a glance.

## Contributing
If you would like to contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.

## Contact
If you have any questions or feedback, feel free to contact me at [dsk7806@nyu.edu].

Thank you for using the Note Making App! Happy note-taking!
