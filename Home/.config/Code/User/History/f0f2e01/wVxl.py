from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as ec

option = webdriver.FirefoxOptions()

browser = webdriver.Firefox(option)
wait = WebDriverWait(browser, 30)
browser.get("https://forms.gle/ZtzJnKZWtxtrKiBe7")

textbox = browser.find_elements(By.CSS_SELECTOR, ".whsOnd")
submit = browser.find_elements(By.CSS_SELECTOR, ".VfPpkd-LgbsSe-OWXEXe-k8QpJ > span:nth-child(4)")

textbox[0].send_keys("hs40925@pausd.us")
submit[0].click()

# browser.implicitly_wait(30)
wait.until(ec.visibility_of_element_located((By.ID, "identification")))

textbox = browser.find_element(By.ID, "identification")
submit = browser.find_element(By.ID, "authn-go-button")

textbox.send_keys("95040925")
submit.click()