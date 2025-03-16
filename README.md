# User Authentication and Weather System Report

## Overview

This project is a user authentication system with login and registration features. Additionally, it integrates a weather API to display real-time weather information for Tijuana.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP, MySQL
- **API:** OpenWeatherMap (for weather data)

## Functionality

### 1. User Interface (UI)
- The UI is styled using `mystyles.css`, providing a modern and responsive design.
- It includes login and registration forms that switch dynamically using JavaScript.

### 2. User Authentication
- `index.php` manages the front-end user interface.
- `registro_usuario_be.php` handles user registration and interacts with the database.
- `conexion_be.php` establishes a connection to the MySQL database.

### 3. JavaScript Features (`scripts.js`)
- Toggles between login and registration views based on screen size.
- Fetches real-time weather data for Tijuana from the OpenWeatherMap API.
- Updates the UI with weather conditions dynamically.

## How It Works

1. **User Registration**
   - Users enter their details in the registration form.
   - The data is sent to `registro_usuario_be.php` to be stored in the database.

2. **User Login**
   - Users enter their credentials in the login form.
   - The system validates the credentials and grants access.

3. **Weather Display**
   - JavaScript fetches weather data from OpenWeatherMap.
   - The temperature and weather description are displayed on the UI.

## Conclusion

This system provides a simple yet effective authentication mechanism combined with a real-time weather feature. It ensures a smooth user experience with dynamic content updates.

