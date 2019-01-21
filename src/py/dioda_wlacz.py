#!/usr/bin/env python

import cv2
import io
import socket
import struct
import time
import pickle
import zlib
import numpy


########### obsluga przycisku
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)


#GPIO.setup(15, GPIO.IN, pull_up_down=GPIO.PUD_UP)

#while True:
   #input_state = GPIO.input(15)
   #if input_state == False:
GPIO.setup(14, GPIO.OUT)
GPIO.output(14, GPIO.HIGH)
time.sleep(1)
#GPIO.output(14, GPIO.LOW)

print("Dioda zaswiecona")
