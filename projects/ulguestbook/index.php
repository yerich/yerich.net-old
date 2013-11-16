<?php
$_PAGETITLE = "UL Guestbook &mdash; The Lightest Guestbook... ever!";
include("../../head.php");
?>
<p>UL Guestbook (UltraLight Guestbook) is the simplest guestbook script ever
made. You don't need a database or any fancy libraries - you just need PHP 4 or
5. All of the functions are stored on one file, and all of the data is stored on
one automatically-generated text file.</p>

<p>There are no frills. The entire script has less than 175 lines of actual
code. Since the data is stored as comma-separated values, it is human-readable,
so to delete an entry, all you have to do is open the data file in a text
editor and delete a line.</p>

<p>The system is very flexible. It doesn't define any styles or output any
extra html. It's designed to be easily integrated into your existing site -
just call a PHP function wherever you want your guestbook to be on your page.
It even does pagination for you!</p>

<p>This is free, open-source software; it is licensed under the MIT license.
Basically, you are free to do whatever you want with it as long as the
copyright and license statement remains intact.</p>

<h2>Demo</h2>

<p>Check out the demonstration <a href="demo.php">here</a>.</p>

<h2>Download and Installation</h2>

<br /><p><a href="ulguestbook.php.txt" class="fancybutton">Download 1.0</a></p>

<p>Download the file <a href="ulguestbook.php.txt">here</a>. To install, save
it on your server as ulguestbook.php, and include the following two lines of
code on the page where you want to include the guestbook on:</p>

<pre>&lt;?php include("ulguestbook.php");
ul_printGuestbook(); ?&gt;</pre>

<p>Make sure you put ulguestbook in the same folder as your file. Some
configuration options can be found at the beginning of the file.</p>

<h2>Helpful Tips / Troubleshooting</h2>

<p>The default data file location is ulguestbook_data.txt. Make sure PHP has
read and write access to it. The easiest way to make sure of that is to chmod
the file to 777 on a Linux-based machine. To do this, you can use your server
administation software if available (such as cPanel), or do it through an FTP or
SSH client. The script won't work if the file cannot be written to.</p>

<p>You should be able to figure out the format of the data file pretty easily.
It is four fields, seperated by commas. The first field is a number - the UNIX
timestamp of when the post was made. The second field is the author's name, the
third field is the email address. The fourth field is the main content. You
can't have any commas in the name, email address or time, but any commas after
that are just ignored. To delete a post, simply delete the line in the data file
where it appears on.</p>

<h2>Version History</h2>

<p><b>Version 1.0 - August 15, 2010</b> - Initial release.</p>

<?php include("../../bottom.php");