def fun(numbers, build):
    if (numbers):
        for char in ["+", "", "-"]:
            tmp = build + char + numbers[0]
            fun(numbers[1:], tmp)
    elif (eval(build) == 100):
        print(build +' =100')


print(fun("23456789", "1"))