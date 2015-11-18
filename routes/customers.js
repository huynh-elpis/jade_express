var express = require('express');
var router = express.Router();

var mysql = require('mysql');

var connection = mysql.createConnection({ 
	host: 'localhost',
	user: "root", 
	password: "", 
	database: "contents_seven",
}); 
connection.connect();
/* GET users listing. */
router.get('/', function(req, res, next) {
	res.render('customers',{rows:[], old_requests:{name:'',tel:'',address:''}});
});

router.post('/', function(req, res, next) {
	query = "SELECT customer_no, name, name_kn FROM `customers` WHERE avail_flg = '1' ";
	var old_requests = {name:'',tel:'',address:''};
	if(req.body.name !== ''){
		old_requests.name = req.body.name;
		query = query + "AND name LIKE '%" + req.body.name + "%' ";
	}
	if(req.body.tel !== ''){
		old_requests.tel = req.body.tel;
		query = query + "AND tel LIKE '%" + req.body.tel + "%' ";
	}
	if(req.body.address !== ''){
		old_requests.address = req.body.address;
		query = query + "AND address LIKE '%" + req.body.address + "%' ";
	}
	query = query + "LIMIT 20;";
	
	connection.query(query,function(err, rows){
		res.render('customers', {rows: rows, old_requests:old_requests});
	});
	//res.render('customers');
});

module.exports = router;
