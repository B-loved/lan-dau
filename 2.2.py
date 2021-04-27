import pandas as pd
from sqlalchemy import create_engine
engine = create_engine('mysql+pymysql://{user}:{password}@localhost/{db}'.format(user='root', password='',db='a'), echo=False)

df = pd.read_csv('customer.csv')
df.to_sql('tbl2',engine, if_exists='replace', index=False)
print(df)
