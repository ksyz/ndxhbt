#ndxbht

##About ndxhbt

Fixes some glitches found in original indexhibit&trade;. If you want 
something more complete, definitely go check out 
[hlfcoding/hlf-ndxz](https://github.com/hlfcoding/hlf-ndxz). I will not 
add any extra or new functionality. I will not help you. So will not 
indexhibit&trade; forums. They will actually hate you for using a fork.

##Roadmap

None.

##Recommended System requirements

*   [PHP 5.3+](http://www.php.net)
*   [MySQL 5+](http://www.mysql.com/)
*   Webserver (Apache httpd would do)

##Installation

You should be finished in a matter of minutes. So cross your fingers.

1.  Download (git clone git://github.com/ksyz/ndxhbt.git)
2.  Change permissions for `files`, `gimgs` and `ndxhbt/config` to allow 
write for user that runs httpd.
3.  Fix SELinux context. Become root and set your selinux into enforcing 
mode (nobody wants to run webserver in permissive, right?). Now go and 
fix context type for those dirs. Use semanage(8) fcontext to make it 
permanent across relabels. 

        $ chcon -R -t httpd_sys_rw_content_t files/
        $ chcon -R -t httpd_sys_rw_content_t ndxhbt/config/

4.  Prepare database login credentials. Open `ndxhbt/install.php` and 
search for `$isam` variable. Set charset and collate to something 
meaningful, or just leave it at utf8.
5.  Direct your browser to the `ndxhbt/install.php` and follow the 
installation procedures.
6.  Delete the `ndxhbt/install.php` when you are done.
7.  Remove write permissions from `ndxhbt/config/`, restore the original 
SELinux context.

        $ restorecon -R `ndxhbt/config/`

8.  Log in with index1/exhibit and go to preferences and change your 
password. Now.
9.  Delete the forgotten `ndxhbt/install.php`.

##Licensing

For original readme.txt open ndxhbt/readme.txt. Copying under the terms 
of originaly attached GPLv2+ in ndxhbt/license.txt.

(ɔ) 2011 by ksyz
(c) 2008 by Daniel Eatock and Tatiret, c.o.
