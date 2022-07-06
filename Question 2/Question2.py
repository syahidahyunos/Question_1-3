# Question2
# I use ceil to break the input number into half

import math

def star():
 for i in range(n):

     print('*' * ( 2*i-1))
     if i == math.ceil(n/2): 
        break
 p = math.ceil(n/2)
 for i in range (p , 0, -1):
     print('*' * (2*i-3))

def evenodd():
    rem = n % 2;
    if (rem == 0):
        print("This is an Even number. Insert Odd number for the star output\n")
        return 0
    else:
        star()

n = input("Insert Odd number ")
n = int (n)
evenodd()


