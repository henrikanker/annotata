import os
import time
import Adafruit_DHT

DHT_SENSOR = Adafruit_DHT.DHT22
DHT_PIN = 4

#try:
#	f = open('/var/www/html/humidity.txt', 'at')
#	if os.stat('/var/www/html/humidity.txt').st_size == 0:
#		f.write('Data,Time,Temperature,Humidity\r\n')
#except:
#	pass

while True:
	humidity, temperature = Adafruit_DHT.read_retry(DHT_SENSOR, DHT_PIN)

	if humidity is not None and temperature is not None:
		f = open('/var/www/html/humidity.txt', 'at')
		f.write('{0},{1},{2:0.1f}*C,{3:0.1f}%\r\n'.format(time.strftime('%m/%d/%y'), time.strftime('%H:%M'), temperature, humidity))
	else:
		print("Failed to retrive data from humidity sensor")

	time.sleep(5)