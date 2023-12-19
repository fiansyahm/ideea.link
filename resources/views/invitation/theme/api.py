import requests
import json

# Data dummy yang ingin Anda kirim
data_dummy = {
    "nama_tabel": "weddings"
}

# Konversi data ke format JSON
json_data = json.dumps(data_dummy)

# URL Endpoint API
url = 'http://api.akad.in/post-weddings'

# Kirim permintaan POST
response = requests.post(url, data=json_data, headers={'Content-Type': 'application/json'})

# Tampilkan respons
print(response.text)
