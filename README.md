# blogs_cpt
 Custom Blogs Post Type with Templates and Theme Integration

## Purpose of this Repo?
I was working on a website where posts(default wordpress post) is reserved for a purpose and there is no other way to work in same templating like (single.php) and (archive.php) so i created a custom post type without any plugin.

## Facilities this Repo Repo has?

1. No Need to create files: Just copy this folder to either your child theme or parent theme (configuration in config lines).
2. Include (init.php) from the directory to make it work easily.
3. Single.php is provided in the folder to customize it according to your will.
4. No extra configurations easy to use.

## How to Configure?

1. Constants define in the file init.php (will be soon available in config file.

define('BCPT_VERSION','1.0.0'); 

define('BCPT_IN_PARENT',true);
--- 
This line is important if you are included it in child theme make this false ( idea behind the true is you are using it in parent theme).

define('BCPT_DIRECTORY_NAME','blogs_cpt');
---
Directory name you can change it but make it readable for others the functionality etc.
