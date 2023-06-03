# from flask import Flask, jsonify

# app = Flask(__name__)

# @app.route("/")
# def get_products():
#     products = [
#         {
#             "name": "Product 1",
#             "brand": "Brand A"
#         },
#         {
#             "name": "Product 2",
#             "brand": "Brand B"
#         },
#         {
#             "name": "Product 3",
#             "brand": "Brand C"
#         }
#     ]
#     return jsonify(products)

# if __name__ == "__main__":
#     app.run(host="0.0.0.0", port=5000)


from flask import Flask, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

@app.route("/")
def get_products():
    products = [
        {
            "name": "Product 1",
            "brand": "Brand A"
        },
        {
            "name": "Product 2",
            "brand": "Brand B"
        },
        {
            "name": "Product 3",
            "brand": "Brand C"
        }
    ]
    return jsonify(products)

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)