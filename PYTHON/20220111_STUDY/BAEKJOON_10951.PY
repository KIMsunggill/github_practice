while True:
    try:
        A, B = map(int, input().split())
        A>0 and B<10
        print (A+B)
    except:
        break