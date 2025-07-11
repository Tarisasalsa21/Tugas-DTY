<?php

return [
    /*
     * If true, the exporter will crawl your site to export all pages.
     *
     * If false, the exporter will only export the paths listed in the `paths` array.
     */
    'crawl' => false,

    /*
     * The paths to export.
     *
     * These paths are relative to the `app.url` config setting.
     */
    'paths' => [
        // Ini adalah bagian yang kita ubah agar hanya mengekspor halaman yang kita inginkan
        '/',
        'contact-us',
    ],

    /*
     * The exporter will crawl all `link` and `a` tags found on the pages to discover new pages.
     *
     * The `allowed_hosts` array will be used to determine if a link should be crawled.
     * The `app.url` config setting will be automatically added to this array.
     */
    'allowed_hosts' => [
        //
    ],

    /*
     * The export process will fail if a link to a page that's not allowed to be crawled is found.
     *
     * If you want to ignore these links, set this to true.
     */
    'ignore_unallowed_hosts' => false,

    /*
     * The directories to include in the export.
     *
     * You can specify either a path to a directory, or a path to a file.
     * A path to a file will be copied to the specified directory.
     */
    'include_files' => [
        // 'favicon.ico',
    ],

    /*
     * The paths to exclude from the export.
     *
     * You can specify a string, a regex, or an array of strings and regexes.
     */
    'exclude_paths' => [
        //
    ],

    /*
     * The disk to export the site to.
     *
     * This disk must be configured in `config/filesystems.php`.
     */
    'disk' => 'export',

    /*
     * If true, the exporter will generate a `200.html` file for each page.
     *
     * This is useful for hosting on services like Netlify.
     */
    'generate_200_html' => false,

    /*
     * If true, the exporter will generate a `404.html` file.
     */
    'generate_404_html' => true,

    /*
     * The shell commands to run before the export process starts.
     */
    'before' => [
        //
    ],

    /*
     * The shell commands to run after the export process ends.
     */
    'after' => [
        //
    ],
];
