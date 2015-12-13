#!/usr/bin/python
from phue import Bridge
import random

b = Bridge('192.168.1.100') # Enter bridge IP here.

#If running for the first time, press button on bridge and run with b.connect() uncommented
b.connect()

lights = b.get_light_objects()

count = 0
while(1):
        if(count>250):
                count = 0
        count = count + 5
        for light in lights:
                light.brightness = count
                light.xy = [random.random(),random.random()]

