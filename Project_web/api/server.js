var express = require('express');
var bodyParser = require("body-parser");
var mysql = require('mysql');
var hostname = 'localhost';
var port = 3000;
var app = express();

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


function handle_database(req, res, opt) {
    pool.getConnection(function (err, connection) {
        if (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        }
        console.log('connected as id ' + connection.threadId);

        if(opt == 0){
            connection.query("SELECT name, email, roleid FROM users", function (err, rows) {
                connection.release();
                if (!err) {res.json(rows);}
            });
        }

        if(opt == 1){
            connection.query("SELECT ProductName, ProductPrice, ProductDescription FROM products", function (err, rows) {
                connection.release();
                if (!err) {res.json(rows);}
            });
        }

        if(opt == 2){
            connection.query("SELECT IdeaContent, id FROM ideas", function (err, rows) {
                connection.release();
                if (!err) {res.json(rows);}
            });
        }

        if(opt == 3){
            connection.query("SELECT EventDate, EventImage, EventDescription, LocationLatitude, LocationLongitude, Recurring, Fee, EventHidden FROM events", function (err, rows) {
                connection.release();
                if (!err) {res.json(rows);}
            });
        }

        if(opt == 4){
            connection.query("SELECT Quantity, ProductID FROM basket", function (err, rows) {
                connection.release();
                if (!err) {res.json(rows);}
            });
        }

        connection.on('error', function (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        });
    });
}

myRouter.route('/users').get(function (req, res) {
    handle_database(req, res, 0);
})

myRouter.route('/products').get(function (req, res) {
    handle_database(req, res, 1);
})

myRouter.route('/ideas').get(function (req, res) {
    handle_database(req, res, 2);
})

myRouter.route('/events').get(function (req, res) {
    handle_database(req, res, 3);
})

myRouter.route('/basket').get(function (req, res) {
    handle_database(req, res, 4);
})

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

myRouter.route('/users/:user_id')
    .get(function (req, res) {
        res.json({ message: "Vous souhaitez accéder aux informations de l'utilisateur n°", methode: req.method });
    })

myRouter.route('/products/:products_id')
.get(function (req, res) {
    res.json({ message: "Vous souhaitez accéder aux informations du produit n°", methode: req.method });
})



/*  .put(function(req,res){ 
        res.json({message : "Vous souhaitez modifier les informations de l'utilisateur n°", methode : req.method});
    })
    .delete(function(req,res){ 
    res.json({message : "Vous souhaitez supprimer l'utilisateur n°", methode : req.method});  
    }); 
*/

app.use(myRouter);

var server = app.listen(port, hostname, function () {
    console.log("Mon serveur fonctionne sur http://" + hostname + ":" + port + "\n");
});