#!/usr/bin/python
import sys
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
value = sys.argv
pin = int(value[2])
onoff = value[1]
if (int(onoff) == 1):
	GPIO.setup(pin, GPIO.OUT)
	GPIO.output(pin,GPIO.HIGH)

if (int(onoff) == 0):
	GPIO.setup(pin, GPIO.OUT)
	GPIO.output(pin, GPIO.LOW)
