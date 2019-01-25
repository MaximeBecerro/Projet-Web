const crypto = require('crypto');

var express = require('express');
var bodyParser = require("body-parser");
var mysql = require('mysql');
var hostname = 'localhost';
var port = 3000;
var app = express();
var ext;

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

var pool = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: 'projetweb'
});

//CHOOSE WICH ONE
//var routes = require("./routes/routes.js")(app);
var myRouter = express.Router();

/*myRouter.route('/users')
    .get(function (req, res) {
        connection.connect(function (err) {
            if (err) throw err;
            console.log("Connected :");
            connection.query("SELECT name, email, roleid FROM users", function (err, result) {
                if (err) throw err;
                console.log(result);
                res.json(result);
            })
        })
    })*/


function handle_database(req, res, opt, ext) {
    pool.getConnection(function (err, connection) {
        if (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        }
        console.log('connected as id ' + connection.threadId);

        //Query for users
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

        //Query for products
        if (opt == 1) {
            if (ext == "") {
                connection.query("SELECT ProductID, ProductName, ProductPrice, ProductDescription FROM products", function (err, rows) {
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

        //Query for ideas
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

        //Query for events
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

        //Query for basket
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

//Routes for users
myRouter.route('/users').get(function (req, res) {
    handle_database(req, res, 0, "");
})

myRouter.route('/users/:ext').get(function (req, res) {
    handle_database(req, res, 0, req.params.ext);
})

//Routes for products
myRouter.route('/products').get(function (req, res) {
    handle_database(req, res, 1, "");
})

myRouter.route('/products/:ext').get(function (req, res) {
    handle_database(req, res, 1, req.params.ext);
})

//Routes for ideas
myRouter.route('/ideas').get(function (req, res) {
    handle_database(req, res, 2, "");
})

myRouter.route('/ideas/:ext').get(function (req, res) {
    handle_database(req, res, 2, req.params.ext);
})

//Routes for events
myRouter.route('/events').get(function (req, res) {
    handle_database(req, res, 3, "");
})

myRouter.route('/events/:ext').get(function (req, res) {
    handle_database(req, res, 3, req.params.ext);
})

//Routes for basket
myRouter.route('/basket').get(function (req, res) {
    handle_database(req, res, 4, "");
})

myRouter.route('/basket/:ext').get(function (req, res) {
    handle_database(req, res, 4, req.params.ext);
})


app.use(myRouter);

var server = app.listen(port, hostname, function () {
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port + "\n");
});

/*myRouter.route('/products')
.get(function (req, res) {
    connection.connect(function (err) {
        if (err) throw err;
        console.log("Connected :");
        connection.query("SELECT ProductName, ProductPrice, ProductDescription FROM products", function (err, result) {
            if (err) throw err;
            console.log(result);
            res.json(result);
        })
    })
})
*/

/*//Really necessary ?
    //POST
    .post(function(req,res){
        res.json({message : "Ajoute un nouvel utilisateur à la liste", methode : req.method});
    })
    //PUT
    .put(function(req,res){
        res.json({message : "Mise à jour des informations d'un utilisateur dans la liste", methode : req.method});
    })
    //DELETE
    .delete(function(req,res){
    res.json({message : "Suppression d'un utilisateur dans la liste", methode : req.method});
    });
*/

/*myRouter.route('/users/:user_id')
    .get(function (req, res) {
        res.json({ message: "Vous souhaitez accéder aux informations de l'utilisateur n°", methode: req.method });
    })

myRouter.route('/products/:products_id')
.get(function (req, res) {
    res.json({ message: "Vous souhaitez accéder aux informations du produit n°", methode: req.method });
})*/



/*  .put(function(req,res){
        res.json({message : "Vous souhaitez modifier les informations de l'utilisateur n°", methode : req.method});
    })
    .delete(function(req,res){
    res.json({message : "Vous souhaitez supprimer l'utilisateur n°", methode : req.method});
    });
*/