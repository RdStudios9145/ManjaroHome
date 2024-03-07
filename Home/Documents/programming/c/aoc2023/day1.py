file = open("day1.txt", "r")

def getnum(i, line):
    # print(i, line[i], line[i:i + 5])
    if line[i] == "o" and line[i:i + 3] == "one":
        return 1
    if line[i] == "t" and line[i:i + 3] == "two":
        return 2
    if line[i] == "t" and line[i:i + 5] == "three":
        return 3
    if line[i] == "f" and line[i:i + 4] == "four":
        return 4
    if line[i] == "f" and line[i:i + 4] == "five":
        return 5
    if line[i] == "s" and line[i:i + 3] == "six":
        return 6
    if line[i] == "s" and line[i:i + 5] == "seven":
        return 7
    if line[i] == "e" and line[i:i + 5] == "eight":
        return 8
    if line[i] == "n" and line[i:i + 4] == "nine":
        return 9

def number(i, line):
    if getnum(i, line) == None:
        return False
    return True

total = 0
for line in file.readlines():
    num1 = 0
    num2 = 0

    for i in range(len(line) - 1):
        char = line[i]
        if number(i, line):
            print("c", i)
            num1 = getnum(i, line)
            break
        elif char <= "9" and char >= "0":
            print("a", char)
            num1 = int(char)
            break
    
    for i in range(len(line) - 2, -1, -1):
        char = line[i]
        # print(number(i, line), getnum(i, line), char)
        if number(i, line):
            print("d", i)
            num2 = getnum(i, line)
            break
        elif char <= "9" and char >= "0":
            print("b", char)
            num2 = int(char)
            break

    total += num1 * 10 + num2
print(total)
