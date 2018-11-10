import json
def to_json(produk):
	return(json.dumps(produk, indent=4))

produk = {
  "itemId": 12341822,
  "itemName": "basic t-shirt",
  "price": 70000,
  "availableColorAndSize":
  [
    {"color": "red", "size": "S,M,L"},
    {"color": "solid black", "size": "M, L"}
  ],
  "isFreeShiping": False,
}

print(json.dumps(produk))
