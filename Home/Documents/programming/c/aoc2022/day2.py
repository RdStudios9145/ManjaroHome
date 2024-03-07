file = open("day2.txt", "r")

def Tied(a, b):
    return (a == "A" and b == "X") or (a == "B" and b == "Y") or (a == "C" and b == "Z")

def Won(a, b):
    return (a == "A" and b == "Y") or (a == "B" and b == "Z") or (a == "C" and b == "X")

def Win(a):
    if a == "A":
        return 1
    if a == "B":
        return 2
    if a == "C":
        return 0

def Tie(a):
    if a == "A":
        return 0
    if a == "B":
        return 1
    return 2

def Lose(a):
    if a == "A":
        return 2
    if a == "B":
        return 0
    return 1

def Score(a, b):
    total = 0

    if b == "X":
        total += 0
        total += Lose(a) + 1
    elif b == "Y":
        total += 3
        total += Tie(a) + 1
    elif b == "Z":
        total += 6
        total += Win(a) + 1
    return total

score = 0
for line in file.readlines():
    # print(line[0], line[2])
    score += Score(line[0], line[2])
    print(Score(line[0], line[2]))
print(score)
