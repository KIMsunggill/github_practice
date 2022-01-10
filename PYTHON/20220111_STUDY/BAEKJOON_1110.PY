number = stop = int(input())
count = 0
while True:
    left = number // 10
    right = number % 10
    sum = left + right
    count +=1
    number = int(str(number%10) + str(sum%10))
    if (stop==number) : break
print(count)