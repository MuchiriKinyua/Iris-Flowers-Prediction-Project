![Screenshot from 2025-01-28 16-13-16](https://github.com/user-attachments/assets/288ecaed-4661-4cee-a366-de5e219e770d)

# Iris Dataset Project

## Overview

This project is a comprehensive analysis and application of machine learning on the Iris Dataset, one of the most popular datasets in the machine learning community. The Iris Dataset contains 150 samples of iris flowers, divided equally among three species: Iris-setosa, Iris-versicolor, and Iris-virginica. Each sample includes four features:

Sepal Length

Sepal Width

Petal Length

Petal Width

The goal of this project is to explore the dataset, visualize the data, and build a predictive model to classify the species of an iris flower based on its features.

# Features

## The dataset includes:

### Features (Independent Variables):

Sepal Length (cm)

Sepal Width (cm)

Petal Length (cm)

Petal Width (cm)

### Target (Dependent Variable):

Species: {Iris-setosa, Iris-versicolor, Iris-virginica}

# Project Structure

The project contains the following main components:

# Exploratory Data Analysis (EDA):

Visualizing feature distributions using histograms, pair plots, and box plots.

Analyzing the relationships between features using scatter plots and correlation matrices.

Identifying key patterns and differences between the three species.

# Data Preprocessing:

Handling missing values.

Standardizing/normalizing the features to improve model performance.

## Machine Learning Models:

Logistic Regression: A simple baseline classifier.

K-Nearest Neighbors (KNN): A distance-based classification model.

Support Vector Machine (SVM): For handling non-linear decision boundaries.

Random Forest: An ensemble learning method for improved accuracy and feature importance analysis.

# Evaluation:

Model performance was evaluated using metrics such as:

Accuracy

Precision

Recall

F1 Score

Confusion Matrix

A comparison of all models was provided to select the best-performing model.

Visualization:

Decision boundary plots to illustrate how different models classify the dataset.

Heatmaps for confusion matrices.

Feature importance visualization for Random Forest.

Results

Best Performing Model: [e.g., KNN].

Accuracy: 97%.

Insights into how features like Petal Length and Petal Width play significant roles in species classification.

Tools and Libraries

The project was implemented using the following tools and libraries:

Python 3.x

Pandas: For data manipulation and analysis.

NumPy: For numerical operations.

Matplotlib & Seaborn: For data visualization.

Scikit-learn: For model building, training, and evaluation.

Jupyter Notebook: For running and organizing code interactively.

How to Run the Project

Clone the repository to your local machine.

git clone https://github.com/MuchiriKinyua/Iris-Flowers-Prediction-Project.git

Navigate to the project directory.

cd iris-dataset-project

Install the required dependencies.

pip install -r requirements.txt

Run the Jupyter Notebook.

jupyter notebook

Open the main notebook file to view or execute the project step by step.

# Deployment

The model has been deployed as a web application using Flask. Users can input flower measurements to predict the species in real-time.

Steps to Run the Flask App

Ensure Flask is installed:

pip install flask

Start the Flask server by running the deploy.py file:

python app.py

Open your web browser and navigate to:

http://127.0.0.1:5000/

Enter the sepal and petal measurements in the form to get the predicted species.

# Key Takeaways

Iris-setosa is linearly separable from the other two species.

Features like Petal Length and Petal Width are highly informative for classification.

Ensemble models like Random Forest provide high accuracy and robust predictions.

# Future Enhancements

Apply advanced algorithms like Neural Networks or Gradient Boosting (e.g., XGBoost, LightGBM).

Perform hyperparameter tuning using Grid Search or Randomized Search.

Test the model on new or extended datasets.

# Credits

Dataset Source: UCI Machine Learning Repository (Iris Dataset).

Contributors: Muchiri Kinyua / Urgent Cargo

# License

This project is licensed under the MIT License. See the LICENSE file for details.
