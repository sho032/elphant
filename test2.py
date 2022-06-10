import psycopg2
 
dsn = "dbname=test host=::1 user=postgres password="
 
conn = psycopg2.connect(dsn)
cur = conn.cursor()
 
cur.execute("select version()")
print(cur.fetchone())
 
cur.close()
conn.close()