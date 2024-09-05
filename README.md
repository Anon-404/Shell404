# Shell404

Shell404 🗣: simple PHP web-shell by [Anon-404](https://github.com/Anon-404).

## Features

- **Command Execution**: Run system commands and display the output on the web page.
- **File Upload**: Securely upload files from your local system to the server.
- **Login Authentication**: Secure access with a username and password login system.

## Installation

1. Clone the repository or download the `shell404.php` file.
2. Upload `shell404.php` to your server's web directory.
3. Access the web shell via your browser by navigating to the file.

## Usage

1. Open the web shell in your browser.
2. Login using the default credentials:
   - **Username**: Shell404
   - **Password**: Shell404
3. After logging in, you will have access to the following features:
   - **Command Input**: Enter any valid system command and view the output.
   - **File Upload**: Use the file upload interface to upload files to the server.

## Customization

You can customize the default username and password by modifying the following variables at the top of the `shell404.php` file:

```php
$user = "Shell404";
$pass = "Shell404";
```
