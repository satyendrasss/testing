## What is Node.js?
- Node.js is an open source server environment
- Node.js is free
- Node.js runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
- Node.js uses JavaScript on the server

> Check Node js version
```bash
    node -v
```

## Install

Create a project folder `ProjectName` and run the command to creating `package.json` in project folder.

```bash
	npm init -y
```

## Install Express js

```bash
	C:\ProjectName> npm install express --save
```

The above command saves the installation locally in the [node_modules]() directory and creates a directory express inside [node_modules](). You should install the following important modules along with express −


[multer]() − This is a node.js middleware for handling multipart/form-data.


> creating a file 

Create a file `app.js` and start the server and set the PORT 

```js
	const express = require('express');
	const app = express(); 
	const PORT = 1000;

	app.get('/', function (req, res) {
	   res.send('Hello World');
	});

	app.listen(PORT, function(){
	    console.log("Server is runnig on PORT "+ PORT);
	});

```
## Install ejs
[Install ejs to load html pages]()
```bash
	npm install ejs
```

- Control flow with `<% %>`
- Escaped output with `<%= %>` (escape function configurable)
- Unescaped raw output with `<%- %>`
- Newline-trim mode ('newline slurping') with `-%>` ending tag
- Whitespace-trim mode (slurp all whitespace) for control flow with `<%_ _%>`
- Custom delimiters (e.g. [? ?] instead of `<% %>`)
- Includes
- Client-side support
- Static caching of intermediate JavaScript
- Static caching of templates
- Complies with the `Express` view system

```js
	<% if (user) { %>
	  <h2><%= user.name %></h2>
	<% } %>
```

[ EJS Tags]()

- `<%` 'Scriptlet' tag, for control-flow, no output
- `<%_` 'Whitespace Slurping' Scriptlet tag, strips all whitespace before it
- `<%=` Outputs the value into the template (escaped)
- `<%-` Outputs the unescaped value into the template
- `<%#` Comment tag, no execution, no output
- `<%%` Outputs a literal '<%'
- `%%>` Outputs a literal '%>'
- `%>` Plain ending tag
- `-%>` Trim-mode ('newline slurp') tag, trims following newline
- `_%>` 'Whitespace Slurping' ending tag, removes all whitespace after it

[includes]()

Includes either have to be an absolute path, or, if not, are assumed as relative to the template with the include call. For example if you are including `./views/user/show.ejs` from `./views/users.ejs` you would use `<%- include('user/show') %>`.


## Install Packages
Read to Login and Registration in Node JS
`https://www.tutsmake.com/create-registration-and-login-form-in-node-js-mysql/`

```bash
	npm install    
	npm install express-flash --save
	npm install express-session --save
	npm install express-validator --save
	npm install method-override --save
	npm install mysql --save
```

[express-flash]() − Flash is an extension of connect-flash with the ability to define a flash message and render it without redirecting the request.
In this node js mysql crud tutorial express flash is used to display a warning, error and information message

[express-session]() − Express-session is used to made a session as like in PHP. In this node js mysql crud tutorial, session is needed as the express requirement of express-flash.

[express-validator]() −Express validator is used to validate form data it is easy to use. express-validator highly effective and efficient way to accelerate the creation of applications.

[method-override]() − NPM is used to run a DELETE and PUT method from an HTML form. In several web browsers only support GET and POST methods.

[MySQL]() − Driver to connect node.js with MySQL



## Intasll body-parser

Install the body-parser for geting the body parameters form data to save the database

[body-parser]() − This is a node.js middleware for handling JSON, Raw, Text and URL encoded form data.

```bash
	C:\ProjectName> npm install body-parser --save
```
[Include body-parser package and geting data from form]()

```js
	const bodyParser = require("body-parser"); 

	app.use(bodyParser.json());
	app.use(bodyParser.urlencoded({ extended: false }));

	app.post("/add-project", function(request, response){
	    var name = request.body.name;
	    var title = request.body.title;
	    var partner = request.body.partner;
	    var description = request.body.description;
	}
```

> Start the server

Start the server to run the project
```bash
	C:\ProjectName> node app.js
```


## Install MYSQL Package

Install the MySQL Package Command

```bash
	C:\ProjectName> npm install --save mysql
```

> MySQL connect to the database

```js
	const mysql = require("mysql");
	const connection = mysql.createConnection({
	    host:"localhost",
	    user:"root",
	    password:"",
	    database:"nodedb"
	});
```

### Fetch Data From Database

```js
	
	app.get("/users", function(request, response){
	    connection.query("SELECT * FROM users WHERE status='0' ", function(error, results, fields){
	        if(error){
	            throw error;
	        }else{
	            response.json(results);
	            //console.log(fields);
	        }
	    });
	});
```