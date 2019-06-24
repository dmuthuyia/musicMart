var express = require("express");
var router = express.Router();

var mysql = require("mysql");

var connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "infohtec_plog4"
});

/* GET users listing. */
//router.get("/", function(req, res, next) {
//res.send("respond with a resource");
/* POST check if user in the database. */
router.get("/", function(req, res, next) {
  var username = req.body.username;
  var password = req.body.password;

  connection.query(
    "SELECT * FROM boukdxusers WHERE UserName = ? AND password = ?",
    [username, password],
    function(err, row, fields) {
      if (err) console.log(err);

      if (row.length > 0) {
        res.send({ success: true, message: row[0].UserName });
      } else {
        res.send({
          success: false,
          message: "user not found, please try again"
        });
      }
    }
  );
});

module.exports = router;
