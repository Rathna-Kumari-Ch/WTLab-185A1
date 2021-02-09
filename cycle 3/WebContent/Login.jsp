<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
</head>
<body>
<h1>Welcome</h1>
<% 
		
		String user_name = request.getParameter("username");
		String pass_word = request.getParameter("password");
	out.println(user_name);
	out.println(pass_word);
		%>
</body>
</html>