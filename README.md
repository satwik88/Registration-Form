# Online Registration Form

An online registration form built using HTML, CSS, JavaScript, jQuery and PHP. The application accepts user information, validates the submitted details and displays them on a formatted success page.

HTML5 · CSS3 · JavaScript · jQuery · PHP

## About the project

This project is an online registration form developed as part of the Web Technology Lab assignment. It provides a simple interface for users to enter their personal and academic information.

The form uses HTML to collect information, CSS for styling, JavaScript and jQuery for client-side validation, and PHP to validate and process the submitted data.

After successful submission, the application displays the entered information on a separate confirmation page.

## Objectives

- Design an online registration form using HTML.
- Apply CSS to create a clean and user-friendly interface.
- Use JavaScript and jQuery for form validation.
- Process submitted form data using PHP.
- Display submitted information with proper formatting.
- Understand how front-end and back-end technologies work together.

## Features

- Simple and user-friendly registration form.
- Google Forms-inspired purple and lavender theme.
- Input fields for personal and academic information.
- Client-side validation using JavaScript and jQuery.
- Server-side validation using PHP.
- Email and 10-digit phone number validation.
- Displays submitted information on a success page.
- Option to clear the form or submit another response.

## Form fields

| Field | Description |
|---|---|
| Full Name | User's full name |
| Email Address | Valid email address |
| Phone Number | 10-digit phone number |
| Date of Birth | User's date of birth |
| Gender | Male, Female or Other |
| Course | Selected academic course |
| Address | User's address |

## Web technology concepts used

- HTML forms and input elements for collecting user information.
- CSS selectors, properties and media queries for styling.
- JavaScript for form validation.
- jQuery document-ready and submit event handling.
- Regular expressions for phone number validation.
- PHP `POST` method for receiving form data.
- PHP `filter_var()` for email validation.
- PHP `htmlspecialchars()` for safely displaying submitted information.
- Linking external CSS and JavaScript files.

## Tech stack

| Layer | Technology |
|---|---|
| Structure | HTML5 |
| Styling | CSS3 |
| Client-side scripting | JavaScript |
| JavaScript library | jQuery |
| Server-side scripting | PHP |
| Local server | XAMPP |
| Hosting | PHP-supported web hosting |

## Project structure

```text
Assignment-2/
  index.html       Registration form
  style.css        Form styling
  script.js        JavaScript and jQuery validation
  process.php      Form processing and result display
  README.md        Project documentation
```

## Running locally

The application requires XAMPP or another local PHP server.

1. Install and start XAMPP.
2. Start the Apache server from the XAMPP Control Panel.
3. Copy the project folder into the `htdocs` directory.

Example location:

```text
C:\xampp\htdocs\Satwik Raj\Assignment-2
```

4. Open the following URL in your browser:

```text
http://localhost/Satwik%20Raj/Assignment-2/
```

5. Fill in the registration form and click **Submit**.
6. The submitted information will be displayed on the success page.

## Deployment

The application requires a web hosting service that supports PHP.

Possible hosting option: InfinityFree.

General deployment steps:

1. Create an account on a PHP-supported hosting platform.
2. Create or activate a hosting website.
3. Upload the project files to the website's document root using the hosting file manager or FTP.
4. Open the website URL and test the registration form.
5. Verify that the PHP form-processing page works correctly.

**Note:** GitHub Pages supports static websites but does not execute PHP files. A PHP-supported hosting service is required to run this application online.

## Limitations and future work

- Submitted information is displayed but not stored in a database.
- The application does not include user login or authentication.
- There is no administrator dashboard to manage registrations.

Possible improvements:
- Connect the application to a MySQL database.
- Add an administrator dashboard.
- Add registration record management.
- Improve form validation and user feedback.
- Add email confirmation after successful registration.

## Academic details

| Item | Detail |
|---|---|
| Project | Online Registration Form |
| Assignment | Assignment 2 |
| Course | Web Technology Lab |
| Course Code | BCSL504 |
| Semester | V |
| Scheme | 2022 Scheme |
| Institution | RV Institute of Technology and Management, Bengaluru |
| Author | Satwik Raj (@satwik88) |
