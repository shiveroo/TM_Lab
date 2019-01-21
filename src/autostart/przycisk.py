import time
import os
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

GPIO.setup(15, GPIO.IN, pull_up_down=GPIO.PUD_UP)

while True:
	input_state = GPIO.input(15)
	if input_state == False:
		os.system("/opt/vc/bin/raspistill -o /home/alarm/WEBSITE/img.jpg")

