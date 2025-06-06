from flask import Flask, request, jsonify
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.model_selection import train_test_split
from sklearn.metrics import mean_absolute_error
import joblib

app = Flask(__name__)

# Load data dan latih model (sekali jalan saat start)
df = pd.read_excel("Data.xlsx")
X = df[['Years_At_Company', 'Projects_Handled', 'Performance_Score']]
y = df['Work_Hours_Per_Week']
model = LinearRegression().fit(X, y)

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json
    df = pd.DataFrame([data])
    prediction = model.predict(df)[0]
    return jsonify({"prediction": round(prediction, 2)})

if __name__ == '__main__':
    app.run(debug=True)
