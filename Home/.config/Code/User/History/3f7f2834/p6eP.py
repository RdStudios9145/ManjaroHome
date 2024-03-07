def get_input():
    print("This program allows you to search through data about congressional voting districts and determine whether a particular state is gerrymandered.\n")
    state = input("Which state do you want to look up? ").lower()

def main():
    state = get_input()

if __name__ == "__main__":
    main()
