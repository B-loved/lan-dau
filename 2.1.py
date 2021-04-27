import requests
from bs4 import BeautifulSoup

with requests.session() as s:
    url = 'http://45.79.43.178/source_carts/wordpress/wp-login.php'
    values = {'log': 'admin',
              'pwd': '123456aA'}
    s.post(url, data=values)
    response = s.get('http://45.79.43.178/source_carts/wordpress/wp-admin/profile.php')
    soup = BeautifulSoup(response.text, 'lxml')
    print(soup.find('input', {'name':'user_login', 'id':'user_login'}).attrs['value'])


#
# selenium

from selenium import webdriver
driver = webdriver.Chrome(r'D:\chromedriver.exe')
driver.get('http://45.79.43.178/source_carts/wordpress/wp-admin/')

username = driver.find_element_by_name('log')
username.clear()
username.send_keys('admin')

password = driver.find_element_by_name('pwd')
password.clear()
password.send_keys('123456aA')

log = driver.find_element_by_name("wp-submit")
log.click()

driver.find_element_by_class_name("display-name").click()

print(driver.find_element_by_id('user_login').get_attribute('value'))


