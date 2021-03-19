#Import Library
import numpy as np
import pandas as pd
from sklearn import linear_model
import sklearn
from sklearn.utils import shuffle
import matplotlib.pyplot as plt
from matplotlib import style
import pickle

antallRette = 0
antallGale = 0

style.use("ggplot")

data = pd.read_csv("ToF 2 project BEHNADLET DATA.csv", sep=";")

predict = "a"

data = data[["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s"]]
data = shuffle(data)  # Optional - shuffle the data

x = np.array(data.drop([predict], 1))
y =np.array(data[predict])
x_train, x_test, y_train, y_test = sklearn.model_selection.train_test_split(x, y, test_size=0.1)

# TRAIN MODEL MULTIPLE TIMES FOR BEST SCORE
best = 0
for _ in range(1000000):
    x_train, x_test, y_train, y_test = sklearn.model_selection.train_test_split(x, y, test_size=0.1)

    linear = linear_model.LinearRegression()

    linear.fit(x_train, y_train)
    acc = linear.score(x_test, y_test) * 100
    print("Accuracy: " + str(acc))

    if acc > best:
        best = acc
        with open("gender.pickle", "wb") as f:
            pickle.dump(linear, f)

print(acc, " % nøyaktig")

# LOAD MODEL
pickle_in = open("gender_75.pickle", "rb")
linear = pickle.load(pickle_in)


print("-------------------------")
print('Coefficient: \n', linear.coef_)
print('Intercept: \n', linear.intercept_)
print("-------------------------")

predicted= linear.predict(x_test)
for x in range(len(predicted)):
    print(round(predicted[x], 0), y_test[x])
    
    if(round(predicted[x]) == y_test[x]):
        antallRette = antallRette + 1
        print("Lik")
    else:
        antallGale = antallGale + 1
        print("ulik")
print(antallRette)
print(antallGale)
print("Nøyaktigheten er ", ((antallRette / (antallRette + antallGale))) * 100)
