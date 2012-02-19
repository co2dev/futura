futura
====

An imageboard written in PHP

Installing
------------

 1. CD to the directory you wish to install futura
 2. Run the following command:
    - `git clone git://github.com/co2dev/futura.git ./`
 3. Copy config.default.php to config.php
 4. Edit config.php and make sure that all of the settings are correct.
 5. CHMOD write permissions to the following directories:

    - /YOUR BOARD DIRECTORY
    
    -- src/
    
    -- thumb/
    
    -- res/
    
    -- inc/flatfile/ (if you choose to use flat file)
    
 6. Navigate to post.php in your browser. It will cause the following:
    - Create the new table your board will use
    - Check if the necessary directories are writable
    - Create index.html (your imageboards index page)

Updating
------------

Use `git pull`