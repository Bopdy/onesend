import os
from flask import Flask, render_template, request, url_for, redirect
from dotenv import load_dotenv
load_dotenv()

app = Flask(__name__)
app.config['TESTING'] = True
app.config["TEMPLATES_AUTO_RELOAD"] = True

@app.route('/')
def index():
	return render_template('index.html', title="OneSend — Send & Receive BTC")
if __name__ == '__main__':
   app.run()