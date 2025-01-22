from flask import Flask, render_template, request
import pickle

app = Flask(__name__)

# Load the model
model = pickle.load(open('models/KNN_model.pkl', 'rb'))

# Define the class names for the labels
class_names = {0: 'setosa', 1: 'versicolor', 2: 'virginica'}

@app.route('/')
def home():
    result = ''
    return render_template('index.html', **locals())

@app.route('/predict', methods=['POST', 'GET'])
def predict():
    # Get input values from the form
    sepal_length = float(request.form['sepal_length'])
    sepal_width = float(request.form['sepal_width'])
    petal_length = float(request.form['petal_length'])
    petal_width = float(request.form['petal_width'])
    
    # Predict using the model
    numeric_prediction = model.predict([[sepal_length, sepal_width, petal_length, petal_width]])[0]
    
    # Map the numeric prediction to the corresponding class name
    result = class_names[numeric_prediction]
    
    return render_template('index.html', **locals())

if __name__ == '__main__':
    app.run(debug=True)
