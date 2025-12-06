# Template Refactoring Guide

## Overview
This document explains the refactoring work done to eliminate duplicate header and footer code across page templates and create a unified template system for managing content from the WordPress admin dashboard.

## Changes Made

### 1. Fixed Duplicate HTML Structure
**Problem:** Many page templates were duplicating the HTML document structure (`<!DOCTYPE html>`, `<html>`, `<head>`, `<body>`, closing `</body></html>` tags) even though `get_header()` and `get_footer()` already include these.

**Solution:** Removed duplicate HTML structure from all service page templates:
- `page-account-recievables-services.php`
- `page-credentialing-services.php`
- `page-medical-billing-services.php`
- `page-medical-coding-services.php`
- `page-medical-scribing-services.php`
- `page-denial-management-services.php`
- `page-prior-authorization-services.php`
- `page-practice-management-services.php`
- `page-revenue-cycle-management-services.php`
- `page-verification-of-benefits-services.php`
- `page-virtual-assistance-services.php`
- `page-accounts-recievable.php`

**What was removed:**
- Duplicate `<!DOCTYPE html>`, `<html>`, `<head>`, and `<body>` tags
- Duplicate closing `</body>` and `</html>` tags
- Duplicate CSS/JS includes that should be in `header.php` or `footer.php`

**What was kept:**
- Page-specific CSS includes (like `services.css`) that are needed for that specific template
- Page-specific JavaScript includes (like `services.js`)

### 2. Created Unified Service Page Template
**New File:** `page-service-template.php`

This is a new WordPress page template that uses custom fields to manage content from the admin dashboard. It provides:
- Hero section with customizable title, description, image, and button
- Breadcrumb navigation
- Multiple content sections (title, description, items)
- Sidebar with contact form and trust indicators
- All content manageable from WordPress admin

**How to use:**
1. Create or edit a page in WordPress admin
2. In the "Page Attributes" meta box, select "Unified Service Page Template" as the template
3. Fill in the "Service Page Content" meta box fields:
   - Hero Title
   - Hero Description
   - Hero Image URL
   - Hero Button Text & URL
   - Breadcrumb Text & URL (optional)
   - Add multiple content sections with titles, descriptions, and items

### 3. Added Custom Fields Support
**New File:** `inc/service-page-fields.php`

This file adds a custom meta box to the WordPress admin for managing service page content. It includes:
- Hero section fields
- Breadcrumb fields
- Dynamic sections (add/remove multiple sections)
- Each section can have:
  - Title
  - Description
  - Items (list of features/points)

**Integration:** The file is automatically loaded via `functions.php`.

## How to Use the New System

### For New Service Pages

1. **Create a new page** in WordPress admin (Pages → Add New)
2. **Select the template:** In the "Page Attributes" meta box, choose "Unified Service Page Template"
3. **Fill in the Service Page Content meta box:**
   - Enter hero section details
   - Add content sections as needed
   - Each section can have a title, description, and list of items
4. **Publish the page**

### For Existing Pages

You have two options:

**Option 1: Use the Unified Template (Recommended)**
1. Edit the existing page
2. Change the template to "Unified Service Page Template"
3. Fill in the custom fields in the "Service Page Content" meta box
4. The page will now use the unified template with admin-managed content

**Option 2: Keep Existing Template but Fix Structure**
- The existing templates have been fixed to remove duplicate HTML
- They will continue to work as before, but without the duplication issues
- Content is still managed in the template files themselves

## Benefits

1. **No More Duplication:** Header and footer are only included once via `get_header()` and `get_footer()`
2. **Admin-Managed Content:** Content can be updated from WordPress admin without editing template files
3. **Consistent Structure:** All service pages using the unified template follow the same structure
4. **Easier Maintenance:** Changes to the template structure only need to be made in one place
5. **Better Performance:** Reduced code duplication means smaller file sizes and faster page loads

## Technical Details

### Template Hierarchy
WordPress will use templates in this order:
1. `page-{slug}.php` (specific page template)
2. `page-{id}.php` (specific page ID template)
3. `page-{template-name}.php` (custom template)
4. `page.php` (default page template)
5. `singular.php`
6. `index.php`

### Custom Fields
Custom fields are stored as post meta with these keys:
- `_service_hero_title`
- `_service_hero_description`
- `_service_hero_image`
- `_service_hero_button_text`
- `_service_hero_button_url`
- `_service_breadcrumb_text`
- `_service_breadcrumb_url`
- `_service_sections` (JSON encoded array)

### Security
- All custom fields are sanitized before saving
- Nonce verification for form submissions
- Capability checks for editing permissions
- Proper escaping when outputting data

## Migration Notes

If you want to migrate existing pages to use the unified template:

1. **Backup first!** Always backup your site before making changes
2. Note down the current content structure of each page
3. Create a new page or edit existing page
4. Select "Unified Service Page Template"
5. Copy content from the old template into the custom fields
6. Test the page thoroughly
7. Once confirmed working, you can delete or archive the old template file

## Future Improvements

Potential enhancements for the future:
- Add more section types (FAQ, testimonials, pricing tables, etc.)
- Add image uploader for hero images (currently uses URL)
- Add WYSIWYG editor for descriptions
- Add template variations for different service types
- Add preview functionality in admin

## Support

If you encounter any issues:
1. Check that `inc/service-page-fields.php` is being loaded in `functions.php`
2. Verify the template is selected in Page Attributes
3. Check that custom fields are being saved (view page source to see if data is present)
4. Clear any caching (browser cache, WordPress cache, server cache)

