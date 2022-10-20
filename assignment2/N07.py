
birthyear = 2002
def take3(name,bithyear,weight):
    today = 2022
    age = today-birthyear
    print("your age is", age )
    return age 

name = str(input("what is your name?"))
if name == "":
    name = "keron"
weight = int(input("what is your weight?"))
             
print("you are", name,  "your weight is", weight)