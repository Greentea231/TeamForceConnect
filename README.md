 TeamForceConnect

 Description
TeamForceConnect is a web application designed to enhance productivity and collaboration within remote teams. It offers a range of features including project management, task management via a Kanban board, real-time chat, personal note-taking, event management, and a customizable Pomodoro timer. The platform aims to streamline workflows and improve team coordination.

 Features
1. User Authentication
   - Secure login and signup with role-based access.
   - Secure session management to prevent unauthorized access.

2. Navigation Sidebar
   - Easy access to Home, Projects, Messages, Notes, Events, Timer, and Dashboard.

3. Dashboard
   - Displays charts and statistics for project statuses and individual performance.

4. User Management (Admin)
   - Manage user accounts, roles, and permissions.

5. Project Management (Admin/User)
   - Create, update, and monitor projects. Admins have additional controls.

6. Tasks Management - Kanban Board (Admin/User)
   - Interactive Kanban board for managing tasks within projects.

7. Profile Management (Admin/User)
   - Update personal information and preferences.

8. Chat Functionality
   - Real-time messaging system for team communication.

9. Note-Taking Feature
   - Personal note-taking capability for individual use.

10. Pomodoro Timer
    - Customizable timer for work intervals and breaks.

11. Meeting Management
    - Schedule meetings and integrate with external calendar services.

12. Event Management
    - Add and manage events in the calendar.

 Technologies Used
- Frontend: HTML, CSS, Bootstrap 5, JavaScript, jQuery, AJAX
  - Chosen for their wide support, ease of use, and ability to create responsive and interactive user interfaces.
- Backend: PHP, Apache (part of the XAMPP stack)
  - Selected for its simplicity, ease of deployment, and strong support for server-side scripting and data handling.
- Database: MySQL
  - Used for its reliability, ease of integration with PHP, and powerful features for managing relational data.

 Installation
1. Clone the repository: `git clone [repository_url]`
2. Set up the database using the provided SQL scripts.
3. Configure the database connection in `db_conn.php`.
4. Start the Apache server using XAMPP or a similar tool.
5. Open the application in your browser.

 Usage
1. Register a new account or use the provided logins:
   - Admin Login: `admin@gmail.com` / `asdf`
   - User Login: `abc@xyz.com` / `asdf`
2. Explore the features through the navigation sidebar.
3. Create and manage projects, tasks, notes, events, and more.

 Security Features
- Parameterized queries to prevent SQL injection.
- Secure session management.
- Data integrity checks.



