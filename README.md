mThumb (a secure PHP image resize script)
======

A secure, slimmed down version of the ol' standby TimThumb. 

Project Goals
=======

Like many WordPress developers we've been making use of the old TimThumb script for years. It works well and offers features not yet available in other projects, like BFI_Thumb (although that does look like a promising start). However, we've still got a lot of sites that we are supporting that require some of TimThumb's more advanced features like crop positioning and filters. 
 
 So we decided to create a leaner, meaner, MUCH MORE SECURE fork of TimThumb. To that end we've foregone full backward compatibility with the old TimThumb code. Here are the major changes:

* Removed the WebShots features entirely
* Removed the PHP Memory settings entirely
* Disabled all remote/external sites by default
* Removed option to allow all remote sites
* Changed cache folder to use system cache by default
* Increased default caching time and time between cleans
* Increased default allowed file size and dimensions
* Enabled PNG compression by default
* Enabled PNG transparency by default
* Removed error output that revealed script versions and error images
* Tilde support in URLs (for user home directories was added)
* Code cleanup and PHP docblock comments 
* Added check to ensure class was defined before calling start method

Get Involved
========
You can help out by testing this and reporting bugs. We ARE NOT interested in preserving 100% compatibility with all of Timthumb's less frequently used features as mentioned above but we ARE VERY motivated to make sure this code is secure. So any security issues will be dealt with immediately. 

Pull requests are most welcome. Cheers.


Changelog
========
* 3.0 - version number update to calm down some automated scanners that think this is an old version of TimThumb
* 1.0 - first proper release
