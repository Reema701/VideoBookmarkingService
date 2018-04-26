# VideoBookmarkingService
A solution made in PHP and HTML5 for user to bookmark &amp; organize videos of interest to watch later on any platform. It lets you pause on one device and resume on another.

# How to use
First create a "vid" folder at the same level (as css, js etc.).
Fill it with sample mp4 files (they were too large to upload, so couldnt)
Name them : AdobePhotoshopTouch.mp4, AdobePrimetimeOverview.mp4 , Lightroom.mp4, PhotoshopCC.mp4, PhotoshopLive.mp4, Primetime.mp4
(These are used in the project overall, if you use different files with different names, remember to replace them in the whole project.)

1. Host the solution on a webserver like any other project (should have php enabled).
2. Install the database schema (that will include the table also, you can remove the entries if you want different named videos)
3. Index page lists out all videos that user can use.
4. Play back a certain video and click on submit bookmark. Bookmark gets submitted in table.
5. Stop the application, and open from another device.
6. play the same video on that device (say a mobile this time).
7. It will play back from the bookmarked location, after picking details of the video from table.
