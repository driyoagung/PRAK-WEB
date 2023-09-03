from math import *

class Point:
    x = 0
    y = 0

    def set_location(self, x, y):
        self.x = x
        self.y = y

    def distance_from_origin(self):
        return sqrt(self.x * self.x + self.y * self.y)
    def distance (self, other):
        dx = self.x - other.x
        dy = self.y - other.y
        return sqrt(dx * dx  + dy * dy)
    
a = Point()
a.set_location(3, 4)
b = a.distance_from_origin()
print(b)

c = Point()
c.set_location(1, 1)
d = a.distance(c)
print(d)

print("Nama : Driyo Agung Leksono \nNIM  : L200210093")
