from flask import Flask
from flask import render_template
from flask import send_file
from flask import request

from flaskext.mysql import MySQL

mysql = MySQL(host="localhost", user="root", 
              password="Mig2021..1", db="taller")

app = Flask(__name__)
mysql.init_app(app)
conn = mysql.connect()

def prepare_data(works):

    final_works = []

    q = "SELECT Id, Placa, Fecha, Descripcion, Imagen1, Imagen2 "
    q = q + "FROM Trabajo_Realizado "
    q = q + "WHERE Id = "

    for work in works:
        cursor = conn.cursor()
        query = q + str(work[0])
        cursor.execute(query)
        results = cursor.fetchall()
        #genres = list(map(lambda x: x[1], results))
        modified_work = list(work)
        #modified_work.append(", ".join(genres))
        final_works.append(modified_work)

    return final_works

def show_works(filters=None):
    cursor = conn.cursor()
    query = "SELECT Id, Placa, Fecha, Descripcion, Imagen1, Imagen2 FROM Trabajo_Realizado "
    if filters != None:
        query = query + filters
    cursor.execute(query)
    results = cursor.fetchall()
    data = prepare_data(results)
    return render_template("workindex.html", works = data)


@app.route("/")
def hello_world():
    return("Sistema de Gestión de Talleres")

# /works/Placa/ABF624/Cliente/09493827
@app.route("/works/placa/<begin>/dni/<to>")
def works_by_range(begin, to):
    filter = f"WHERE Placa = {begin} AND Cliente = {to}"
    return show_works(filter)

@app.route("/works")
def list_works():
    filter = None
    q = request.args.get('q')
    if q != None:
        filter = filter + f"WHERE Placa LIKE '%{q}%' "
        filter = filter + f"OR Cliente LIKE '%{q}%' "
    return show_works(filter)

@app.route("/styles.css")
def styles():
    return send_file("./css/styles.css")

@app.route("/style.css")
def style():
    return send_file("./css/style.css")

@app.route("/bootstrap.css")
def bootstrap():
    return send_file("./css/bootstrap.css")

@app.route("/color-switcher-design.css")
def colorswitcher():
    return send_file("./css/color-switcher-design.css")
    
