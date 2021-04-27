import json
apikey = "eaa4e27f8f8d4edd5d12d0951bf03d6c"
password = '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'
hostname = 'sulact.myshopify.com'
version = "2021-04"
resource = 'customers'
URL = f'https://{apikey}:{password}@{hostname}/admin/api/{version}/{resource}.json'
print(URL)

import requests,pandas as pd


url = "https://eaa4e27f8f8d4edd5d12d0951bf03d6c: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@sulact.myshopify.com/admin/api/2021-04/customers.json"
r = requests.get(url)

# print(r.text)
obj = json.loads(r.text)
print(obj)

print('------------------------------------------------------')
a = pd.json_normalize(obj['customers'])
print(a)
# del a['addresses']
# print(a)

print('------------------------------------------------------')
b = a.drop(columns ='addresses')
print(b)

export_csv = b.to_csv (r'D:\pythonProject\a.csv', index = None)



