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


mThumb Parameters
========

<table>
<tbody>
<tr>
<th></th>
<th>stands for</th>
<th>values</th>
<th>What it does</th>
</tr>
<tr>
<td>src</td>
<td>source</td>
<td>url to image</td>
<td>Tells mThumb which image to resize › <a href="http://www.binarymoon.co.uk/2010/08/mThumb/">mThumb basic properties tutorial</a></td>
</tr>
<tr>
<td>w</td>
<td>width</td>
<td>the width to resize to</td>
<td>Remove the width to scale proportionally (will then need the height) › <a href="http://www.binarymoon.co.uk/2010/08/mThumb/">mThumb width tutorial</a></td>
</tr>
<tr>
<td>h</td>
<td>height</td>
<td>the height to resize to</td>
<td>Remove the height to scale proportionally (will then need the width) › <a href="http://www.binarymoon.co.uk/2010/08/mThumb/">mThumb height tutorial</a></td>
</tr>
<tr>
<td>q</td>
<td>quality</td>
<td>0 – 100</td>
<td>Compression quality. The higher the number the nicer the image will look. I wouldn’t recommend going any higher than about 95 else the image will get too large › <a href="http://www.binarymoon.co.uk/2010/08/mThumb/">mThumb image quality tutorial</a></td>
</tr>
<tr>
<td>a</td>
<td>alignment</td>
<td>c, t, l, r, b, tl, tr, bl, br</td>
<td>Crop alignment. c = center, t = top, b = bottom, r = right, l = left. The positions can be joined to create diagonal positions › <a href="http://www.binarymoon.co.uk/2010/08/mThumb-part-4-moving-crop-location/">mThumb crop position tutorial</a></td>
</tr>
<tr>
<td>zc</td>
<td>zoom / crop</td>
<td>0, 1, 2, 3</td>
<td>Change the cropping and scaling settings › <a href="http://www.binarymoon.co.uk/2011/03/mThumb-proportional-scaling-security-improvements/">mThumb crop scaling tutorial</a></td>
</tr>
<tr>
<td>f</td>
<td>filters</td>
<td>too many to mention</td>
<td>Let’s you apply image filters to change the resized picture. For instance you can change brightness/ contrast or even blur the image › <a href="http://www.binarymoon.co.uk/2010/08/mThumb-image-filters/">mThumb image filter tutorial</a></td>
</tr>
<tr>
<td>s</td>
<td>sharpen</td>
<td></td>
<td>Apply a sharpen filter to the image, makes scaled down images look a little crisper › <a href="http://www.binarymoon.co.uk/2010/08/mThumb-image-filters/">tutorial</a></td>
</tr>
<tr>
<td>cc</td>
<td>canvas colour</td>
<td>hexadecimal colour value (#ffffff)</td>
<td>Change background colour. Most used when changing the zoom and crop settings, which in turn can add borders to the image.</td>
</tr>
<tr>
<td>ct</td>
<td>canvas transparency</td>
<td>true (1)</td>
<td>Use transparency and ignore background colour</td>
</tr>
</tbody>
</table>

Configuration Constants
========
You can override certain built in settings in mThumb. by creating a config file called mthumb-config.php and would contain a series of define statements that change default settings. 

There are a whole bunch of settings that are not controlled by the normal query string parameters.

<table>
<tbody>
<tr>
<th>constant</th>
<th>values</th>
<th>What it does</th>
</tr>
<tr>
<td>DEBUG_ON</td>
<td>true/ false</td>
<td>Turn on debug logging to the standard PHP error log</td>
</tr>
<tr>
<td>DEBUG_LEVEL</td>
<td>1, 2, 3</td>
<td>Debug level 1 is less noisy and level 3 is the most noisy</td>
</tr>
<tr>
<td>ALLOW_EXTERNAL</td>
<td>true/ false</td>
<td>Allow images from external sites to be resized. Restricted to the images defined in the <em>$allowed_sites</em> array.</td>
</tr>
<tr>
<td>FILE_CACHE_ENABLED</td>
<td>true/ false</td>
<td>Should we cache the files on disk to speed up your website? (hint: the answer is yes, unless you’re testing/ developing things! :))</td>
</tr>
<tr>
<td>FILE_CACHE_TIME_BETWEEN_CLEANS</td>
<td>86400 (milliseconds)</td>
<td>mThumb automatically cleans up the cached files. This defines the amount of time between the different the cache cleaning.</td>
</tr>
<tr>
<td>FILE_CACHE_MAX_FILE_AGE</td>
<td>86400 (milliseconds)</td>
<td>How old should a file be before it’s cleaned?</td>
</tr>
<tr>
<td>FILE_CACHE_SUFFIX</td>
<td>.txt</td>
<td>What to put at the end of all files in the cache directory so we can identify them easily</td>
</tr>
<tr>
<td>FILE_CACHE_PREFIX</td>
<td>mthumb</td>
<td>What to put at the start of the cache files so we can identify them easily</td>
</tr>
<tr>
<td>FILE_CACHE_DIRECTORY</td>
<td>.<code>system temporary directory</code></td>
<td>the name of the image cache directory. Left blank it will use the system temporary directory (which is better for security, but is not supported by all web hosts)</td>
</tr>
<tr>
<td>MAX_FILE_SIZE</td>
<td>10485760</td>
<td>10 Megs is 10485760. This is the max internal or external file size that we’ll process</td>
</tr>
<tr>
<td>CURL_TIMEOUT</td>
<td>20</td>
<td>Timeout duration for Curl. This only applies if you have Curl installed and aren’t using PHP’s default URL fetching mechanism.</td>
</tr>
<tr>
<td>WAIT_BETWEEN_FETCH_ERRORS</td>
<td>20</td>
<td>Time to wait between errors fetching remote file.</td>
</tr>
<tr>
<td>BROWSER_CACHE_MAX_AGE</td>
<td>864000</td>
<td>Browser cache duration (to prevent images from being reloaded more than once – the higher the number the better).</td>
</tr>
<tr>
<td>BROWSER_CACHE_DISABLE</td>
<td>true/ false</td>
<td>Use for testing if you want to disable browser caching.</td>
</tr>
<tr>
<td>MAX_WIDTH</td>
<td>3600</td>
<td>Put a sensible limit of the width of the resized image (so that crazy large images can’t be created)</td>
</tr>
<tr>
<td>MAX_HEIGHT</td>
<td>3600</td>
<td>Put a sensible limit of the height of the resized image (so that crazy large images can’t be created)</td>
</tr>
<tr>
<td>NOT_FOUND_IMAGE</td>
<td>null</td>
<td>Image to display if a 404 error occurs, instead of showing an error message</td>
</tr>
<tr>
<td>PNG_IS_TRANSPARENT</td>
<td>TRUE</td>
<td>Define if a png image should have a transparent background color. Use False value if you want to display a custom coloured canvas_colour</td>
</tr>
</tbody>
</table>


Changelog
========
* 3.0 - version number update to calm down some automated scanners that think this is an old version of TimThumb
* 1.0 - first proper release
