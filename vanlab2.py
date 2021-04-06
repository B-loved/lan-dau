#  cho trước 2 số x, y (x < y). Có 2 cách thay đổi giá trị của x:
# 	- tăng gấp đôi x
# 	- bớt x đi 1 đơn vị
# Tìm số bước nhỏ nhất để x = y.


x = int(input('enter integer x: '))
y = int(input('enter integer y: '))

def find_nb_step(x, y):
    nb_step = 0
    logs = ''
    while x < y:
        if y % 2 == 0:
            x = x*2
            logs += '* '
            nb_step += 1
        else:
            x = x * 2
            logs += '* '
            nb_step += 1
            while x > y :
                x -= 1
                logs += '- '
                nb_step += 1
    return nb_step,logs

nb_step, logs = find_nb_step(x, y)
print('nb_step: ', nb_step)
print('logs: ', logs)