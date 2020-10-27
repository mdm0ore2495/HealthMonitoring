# -*- coding: utf-8 -*-
"""
Created on Mon Oct 12 22:00:25 2020

@author: maste
"""

from flask import Flask,  render_template

app = Flask(__name__)

@app.route("/")
def main():
    return render_template('index.html')

if __name__ == "__main__":
    app.run(debug=True, host="0.0.0.0", port=80)