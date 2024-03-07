from selenium import webdriver
from selenium.webdriver.common.by import By

option = webdriver.FirefoxOptions()

browser = webdriver.Firefox(option)
browser.get("https://forms.gle/ZtzJnKZWtxtrKiBe7")

textbox = browser.find_elements(By.CSS_SELECTOR, ".whsOnd")
submit = browser.find_elements(By.CSS_SELECTOR, ".Y5sE8d > span:nth-child(3)")

textbox[0].send_keys("hs40925@pausd.us")
submit[0].click()