const express = require("express");
const app = express();
const mysql = require("mysql");


const db = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "password",
    database: "login_register",

});

app.get('/', (req, res) => {
    db.query("INSERT INTO usuarios (email, password) VALUES ('Pedro@gmail.com', 'pedrinho123')",
    (err, result) => {
        if(err){
            console.log(err)
        }
    });
});

app.listen(3001, () => {
    console.log("Rodando na porta 3001");
});