hat_list = [1,2,3,4,5]
gordon_input = int(input("please enter")) 
hat_list[len(hat_list)//2]= gordon_input
print(hat_list)
hat_list.pop(-1)
print(len(hat_list))