var express = require("express");
var router = express.Router();

var mysql = require("mysql");

var connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "musicmartdb"
});

/* GET genres listing. */

router.get("/listGenres", function(req, res, next) {
  connection.query("SELECT * FROM genre", function(err, row, fields) {
    if (err) console.log(err);

    if (row.length > 0) {
      res.send({ success: true, message: row[0].UserName });
    } else {
      res.send({
        success: false,
        message: "No data"
      });
    }
  });
});

module.exports = router;
