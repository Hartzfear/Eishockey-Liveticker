<?php

/*
  general configuration file.
 */
define( 'DB_NAME', 'liveticker' );  // The name of the database
define( 'DB_USER', 'root' );	// Your MySQL username
define( 'DB_PASSWORD', 'root' );   // ...and password
define( 'DB_HOST', 'localhost' ); // the db host
// the public folder, where the output script resides
// this folder needs to have write access (a+w) for the user running the webserver
define( 'OUTPUTDIR', '/Users/mwidmann/dropbox/projects/liveticker/tickerdata/' );
define( 'FRAGMENTDIR', '/Users/mwidmann/dropbox/projects/liveticker/templates/' );

// sets the running direction of the clock. possible values asc, desc
// asc stands for 00:00 to 20:00
// desc stands for 20:00 to 00:00
define( 'CLOCK_RUNNING_DIRECTION', 'desc' );

?>