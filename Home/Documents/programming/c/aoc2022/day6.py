with open("day6.txt", "r") as f:
    data = f.read()

def equ(a):
    for i, c1 in enumerate(a):
        for j, c2 in enumerate(a):
            if i == j: continue
            if c1 == c2: return True
    return False

for i in range(len(data) - 14):
    if equ(data[i:i+14]):
        continue
    print(i + 14)
    break
    # print(data[i], data[i + 3])
