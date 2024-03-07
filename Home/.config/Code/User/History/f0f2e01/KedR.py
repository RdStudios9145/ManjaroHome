from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as ec

import os

option = webdriver.FirefoxOptions()

browser = webdriver.Firefox(option)
wait = WebDriverWait(browser, 30)
browser.get("https://forms.gle/ZtzJnKZWtxtrKiBe7")

def setup():
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

    wait.until(ec.visibility_of_element_located((By.ID, "ember533")))

    textbox = browser.find_element(By.ID, "ember533")
    submit = browser.find_element(By.ID, "authn-go-button")

    textbox.send_keys("0vyWgwNt")
    submit.click()

def run(name, nameid, popdownid, clubid, submitid):
    wait.until(ec.visibility_of_element_located((By.XPATH, name)))
    namebox = browser.find_element(By.XPATH, nameid)
    clubbox = browser.find_element(By.XPATH, popdownid)
    submit = browser.find_element(By.CLASS_NAME, submitid)

    namebox.send_keys("Holden Seidel")
    clubbox.click()

    clubbox = browser.find_element(By.XPATH, clubid)

    clubbox.click()
    submit.click()

def finish():
    browser.quit()