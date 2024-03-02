# Hotel_management_system

 # How to install Hotel_management_system

1. Download code zip file and extract file

2. Rename .env.example file as .env

3. Open .env file and change database name as hotel_management_system in 14 row

4. Download and install composer, nodejs, and xampp

5. Open xampp and start mysql and apache 

6. Open cmd and go to project path

7. Type "php artisan migrate" and press enter in cmd

8. Type "php artisan serve" and perss enter in cmd

9. Go to "http://127.0.0.1:8000" in your web browser 

10. Now you can access to Hotel_management_system


 # How to Register admin account

1. Click Register button in homw page 

2. Give registration details click register button

3. Go to http://localhost/phpmyadmin/ in your web browser

4. Go to user table in hotel_management_system database

5. Click edit button in user's data row

6. Change account type as admin

7. Go to Hotel management system and click logout button

8. Click login button and give login details and login admin account
 


# Usage

    Login:
        Access the system by logging in as a user or administrator with your credentials.

    Dashboard:
        Upon logging in, you will be directed to the dashboard, where you can view an overview of the hotel's current status.

    Manage Rooms:
        Navigate to the "Rooms" section to add, edit, or delete rooms. You can also view details such as availability, occupancy, and room types.

    Manage Bookings:
        In the "Bookings" section, you can create, update, or cancel bookings for guests. View current and past bookings along with their details.

    Manage Guests:
        Maintain a database of guests, including their personal information and booking history. Add new guests, edit existing ones, or remove outdated records.

    Logout:
        Ensure to log out of the system securely once your session is complete.



# Functionality

    Room Management:
        Add, edit, or delete rooms.
        View room availability and occupancy status.
        Categorize rooms based on type (e.g., standard, deluxe, suite).

    Booking Management:
        Create, update, or cancel bookings.
        Check-in and check-out guests.
        Manage booking details, including dates, room types, and guest information.

    User Authentication and Authorization:
        Secure login system to protect sensitive information.
        Role-based access control to ensure that users only have access to relevant functionalities.

    Intuitive User Interface:
        User-friendly interface designed for ease of use and efficiency.
        Intuitive navigation to streamline workflow and minimize user errors.
