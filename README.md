Maggies and Location

Maggies app uses Instagram API to request pictures that are taken at Maggies Bar. 
We have located the coordinates from Google Maps API and hard-coded the coordinates
inside the request. It pulls the most recent pictures from Instagram and echoes embedded HTML to 
display pictures. For location.php, you type a location and it uses Google MAPS api
to search and get the coordinates for that location attached to that string. The rest of the procedure is the same as mags.php.

Instructions:

1) Install WAMPP. 
2) Run an APACHE server
3) Locate mags.php and location.php inside C:\xampp\htdocs or wherever you installed xampp.
4) Go to localhost/mags.php or localhost/location.php to view.



Philips HUE:

Philips hue app uses an open-source Python library to deal with Hue API. It connects to the bridge and initializes lights. It uses the random function to randomize light colors. We put this function inside a while-true loop and also incremented the brightness up to 254 lux and then resets to 0.


Instructions:

1) Clone the ```git repository https://github.com/studioimaginaire/phue.git```

2) Do ```pip install phue```

3) Locate rave_party inside the root folder.

4) Edit the rave_party.py to add your own bridge IP address. You can get the bridge IP address through Philips Hue official mobile app.

5) Run ```python rave_party.py```. Rave, repeat.
