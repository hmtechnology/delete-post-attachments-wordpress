# delete-post-attachments-wordpress
a function to delete automatically all attachments and featured image when a post is deleted in WordPress

# Delete Post Attachments WordPress

A WordPress function to automatically delete all attachments and featured image when a post is permanently deleted.

## Usage

To use this function, follow these steps:

1. Add the function to your WordPress project, either by including it in your theme's `functions.php` file or by creating a custom plugin.

2. Ensure that the post is deleted permanently from the trash. The function will only remove attachments and the featured image when the post is deleted permanently, not just when it's moved to the trash.

3. That's it! When you permanently delete a post in WordPress, this function will automatically remove all its associated attachments and the featured image, helping you keep your media library clean.

## Installation

You can include this function in your WordPress project by copying the code into your theme's `functions.php` file or by creating a custom plugin. Here's how to do it:

### Using `functions.php`:

1. Open your theme's `functions.php` file in a code editor.

2. Paste the code from the `delete-post-attachments.php` file at the end of the `functions.php` file.

3. Save the `functions.php` file.

### Creating a Custom Plugin:

1. Create a new folder in your `wp-content/plugins/` directory, e.g., `delete-post-attachments`.

2. Inside the folder, create a new PHP file, e.g., `delete-post-attachments.php`.

3. Paste the code from the `delete-post-attachments.php` file into `delete-post-attachments.php`.

4. Activate the plugin from the WordPress admin panel.

## License

This project is licensed under the GNU General Public License v3.0 - see the LICENSE file for details.
