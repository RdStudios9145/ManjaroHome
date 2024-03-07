import inc

def Run(name):
    inc.setup("https://docs.google.com/forms/d/e/1FAIpQLSfHF5w1sZc5pjj1PBjm9udRRgl60IeWxEf4Y0lAXCETPfuN4g/viewform")
    inc.run(name,
        "/html/body/div/div[2]/form/div[2]/div/div[2]/div[1]/div/div/div[2]/div/div[1]/div/div[1]/input",
        "/html/body/div/div[2]/form/div[2]/div/div[2]/div[2]/div/div/div[2]/div/div[1]/div[1]/div[1]",
        "/html/body/div/div[2]/form/div[2]/div/div[2]/div[2]/div/div/div[2]/div/div[2]",
        "/html/body/div/div[2]/form/div[2]/div/div[3]/div[1]/div[1]/div/span/span")
    inc.finish()

Run("Holden Seidel")
Run("Tom Scheib")