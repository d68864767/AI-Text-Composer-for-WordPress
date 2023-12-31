```php
<?php
/**
 * Admin Settings for AI Text Composer for WordPress
 */

// Prevent direct file access
defined('ABSPATH') or die('No script kiddies please!');

// Add admin menu
function ai_composer_add_admin_menu() {
    add_menu_page(
        'AI Text Composer',
        'AI Text Composer',
        'manage_options',
        'ai-text-composer',
        'ai_composer_admin_page',
        'dashicons-edit',
        100
    );
}
add_action('admin_menu', 'ai_composer_add_admin_menu');

// Admin page
function ai_composer_admin_page() {
    ?>
    <div class="wrap">
        <h1>AI Text Composer</h1>
        <form id="ai-composer-form">
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="title">Title</label></th>
                    <td><input name="title" type="text" id="title" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="placeholder">Placeholder</label></th>
                    <td><input name="placeholder" type="text" id="placeholder" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="length">Length</label></th>
                    <td>
                        <select name="length" id="length">
                            <option value="short">Short</option>
                            <option value="medium">Medium</option>
                            <option value="long">Long</option>
                        </select>
                    </td>
                </tr>
            </table>
            <?php wp_nonce_field('ai_composer_nonce', 'nonce'); ?>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Generate Content">
            </p>
        </form>
        <div id="ai-composer-result"></div>
    </div>
    <?php
}
```
</h1>