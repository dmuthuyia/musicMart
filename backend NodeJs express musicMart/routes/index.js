var express = require("express");
var router = express.Router();

var mysql = require("mysql");

var connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "musicmartdb"
});

/* GET home page. */
router.get("/", function(req, res, next) {
  res.render("index", { title: "Express" });
});

/* GET listAlbum. */

router.get("/listalbum", function(req, res, next) {
  connection.query("SELECT * FROM album", function(err, row, fields) {
    if (err) console.log(err);

    if (row.length > 0) {
      //res.send({ success: true, message: row[0] });
      //res.setHeader('Content-Type', 'application/json');
      //res.end(JSON.stringify(row));
      //res.write(JSON.stringify(row));
      //res.end();
      res.status(200).json({
        message: "Albums found.",
        album: row
      });
    } else {
      res.send({
        success: false,
        message: "No data"
      });
    }
  });
});

/* GET listAlbum. */
router.get("/listartist", function(req, res, next) {
  connection.query("SELECT * FROM artist", function(err, row, fields) {
    if (err) console.log(err);

    if (row.length > 0) {
      //res.send({ success: true, message: row[0] });
      //res.setHeader('Content-Type', 'application/json');
      res.end(JSON.stringify(row));
    } else {
      res.send({
        success: false,
        message: "No data"
      });
    }
  });
});

/* GET listSong. */
router.get("/listsong", function(req, res, next) {
  connection.query("SELECT * FROM song", function(err, row, fields) {
    if (err) console.log(err);

    if (row.length > 0) {
      //res.send({ success: true, message: row[0] });
      //res.setHeader('Content-Type', 'application/json');
      res.end(JSON.stringify(row));
    } else {
      res.send({
        success: false,
        message: "No data"
      });
    }
  });
});

/* GET listGenre. */
router.get("/listgenre", function(req, res, next) {
  connection.query("SELECT * FROM genre", function(err, row, fields) {
    if (err) console.log(err);

    if (row.length > 0) {
      //res.send({ success: true, message: row[0] });
      //res.setHeader('Content-Type', 'application/json');
      res.end(JSON.stringify(row));
    } else {
      res.send({
        success: false,
        message: "No data"
      });
    }
  });
});

/* GET AddToCart. */
router.get("/listcart", function(req, res, next) {
  connection.query("SELECT * FROM carts", function(err, row, fields) {
    if (err) console.log(err);

    if (row.length > 0) {
      //res.send({ success: true, message: row[0] });
      //res.setHeader('Content-Type', 'application/json');
      res.end(JSON.stringify(row));
    } else {
      res.send({
        success: false,
        message: "No data"
      });
    }
  });
});

module.exports = router;
