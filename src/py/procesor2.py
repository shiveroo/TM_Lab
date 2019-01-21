import psutil

p = psutil.Process()
p.cpu_percent(interval=None)
for i in range(100):
	usage = p.cpu_percent(interval=None)
	if usage>0:
		print(usage/1000)
		break    

