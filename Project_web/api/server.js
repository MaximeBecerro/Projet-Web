const crypto = require('crypto');

var express = require('express');
var bodyParser = require("body-parser");
var mysql = require('mysql');
var hostname = 'localhost';
var port = 3000;
var app = express();
var ext;
var fs = require('fs');
var pdf = require('html-pdf');
var options = { format: 'Letter' };

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

var pool = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: 'projetweb'
});

var myRouter = express.Router();

//  Fonction pour faire une requête permettant de récupérer les données de la BDD
//  Param : req (request), res (respond), opt (option), ext (extansion)
//  Return : rien
function handle_database(req, res, opt, ext) {
    pool.getConnection(function (err, connection) {
        if (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        }
        console.log('connected as id ' + connection.threadId);
        if (opt == 0) {
            if (ext == "") {
                connection.query("SELECT name, email, roleid FROM users", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            } else {
                connection.query("SELECT " + ext + " FROM users", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            }
        }
        if (opt == 1) {
            if (ext == "") {
                connection.query("SELECT ProductID, ProductName, ProductPrice, ProductDescription, ProductImage FROM products", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            } else {
                connection.query("SELECT " + ext + " FROM products", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            }
        }
        if (opt == 2) {
            if (ext == "") {
                connection.query("SELECT IdeaContent, id FROM ideas", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            } else {
                connection.query("SELECT " + ext + " FROM ideas", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            }
        }
        if (opt == 3) {
            if (ext == "") {
                connection.query("SELECT EventDate, EventImage, EventDescription, LocationLatitude, LocationLongitude, Recurring, Fee, EventHidden FROM events", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            } else {
                connection.query("SELECT " + ext + " FROM events", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            }
        }
        if (opt == 4) {
            if (ext == "") {
                connection.query("SELECT Quantity, ProductID FROM basket", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            } else {
                connection.query("SELECT " + ext + " FROM basket", function (err, rows) {
                    connection.release();
                    if (!err) { res.json(rows); }
                });
            }
        }
        connection.on('error', function (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        });
    });
}

myRouter.route('/users').get(function (req, res) {
    handle_database(req, res, 0, "");
})

myRouter.route('/users/:ext').get(function (req, res) {
    handle_database(req, res, 0, req.params.ext);
})

myRouter.route('/products').get(function (req, res) {
    handle_database(req, res, 1, "");
})

myRouter.route('/products/:ext').get(function (req, res) {
    handle_database(req, res, 1, req.params.ext);
})

myRouter.route('/ideas').get(function (req, res) {
    handle_database(req, res, 2, "");
})

myRouter.route('/ideas/:ext').get(function (req, res) {
    handle_database(req, res, 2, req.params.ext);
})

myRouter.route('/events').get(function (req, res) {
    handle_database(req, res, 3, "");
})

myRouter.route('/events/:ext').get(function (req, res) {
    handle_database(req, res, 3, req.params.ext);
})

myRouter.route('/basket').get(function (req, res) {
    handle_database(req, res, 4, "");
})

myRouter.route('/basket/:ext').get(function (req, res) {
    handle_database(req, res, 4, req.params.ext);
})

app.use(myRouter);

//  Fonction permettant de vérifier si le serveur fonctionne et notament d'indiquer l'adresse du serveur
//  param : aucun
//  return : rien
var server = app.listen(port, hostname, function () {
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port + "\n");
});

function httpGet(theUrl) {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            createDiv(xmlhttp.responseText);
        }
    }
    xmlhttp.open("GET", theUrl, false);
    xmlhttp.send();
}

var html = httpGet('http://localhost:3000/users/name');

//  Fonction permettant de télécharger la liste des inscrits
//   param : err, res
//  return : une erreur 404 si erreur
pdf.create(html, options).toFile('./usersList.pdf', function (err, res) {
    if (err) return console.log(err);
    console.log(res); // { filename: '/app/businesscard.pdf' }
});

myRouter.route('/users/:user_id')
    .get(function (req, res) {
        res.json({ message: "Vous souhaitez accéder aux informations de l'utilisateur n°", methode: req.method });
    })

myRouter.route('/products/:products_id')
    .get(function (req, res) {
        res.json({ message: "Vous souhaitez accéder aux informations du produit n°", methode: req.method });
    })