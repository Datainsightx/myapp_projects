# -*- coding: utf-8 -*-
"""
Created on Tue Aug  1 11:57:48 2017

@author: Home
"""

from flask import Flask, request, render_template
import numpy as np
import pandas as pd
from sklearn.externals import joblib
#import psycopg2

app = Flask(__name__)

@app.route('/')
def upload_data():
    return render_template('uploaddata.html')

@app.route('/home.html') 
def home():
    return render_template('home.html') 
  
if __name__ == '__main__':
     
     app.run()

 
