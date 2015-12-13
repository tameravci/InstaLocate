#InstaLocate

###Maggies
Demo: http://52.11.161.241/main-mags.html
Maggies app uses Instagram API to request pictures that are taken at Maggies Bar, a wide-famous bar close to Emory University at Toco Hills. We have located the coordinates from Google Maps API and hard-coded the coordinates
inside the request. It pulls the most recent pictures from Instagram and echoes embedded HTML to display pictures. 

###Location
Demo: http://52.11.161.241/location.php
For location.php, you type a location and it uses Google MAPS api
to search and get the coordinates for that location attached to that string. The rest of the procedure is the same as mags.php.

###Philips HUE:
Philips hue app uses an open-source Python library to deal with Hue API. It connects to the bridge and initializes lights. It uses the random function to randomize light colors. We put this function inside a while-true loop and also incremented the brightness up to 254 lux and then resets to 0.

Instructions:
- Clone the ```git clone https://github.com/studioimaginaire/phue.git```
- Do ```pip install phue```
- Locate rave_party inside the root folder.
- Edit the rave_party.py to add your own bridge IP address. You can get the bridge IP address through Philips Hue official mobile app.
- Run ```python rave_party.py```. Rave, repeat.
