<%@page errorPage="total-error.jsp" %>

<%
	request.setCharacterEncoding("UTF-8");
	int price=Integer.parseInt(request.getParameter("price"));
	int count=Integer.parseInt(request.getParameter("copunt"));
	int delivery=Integer.parseInt(request.getParameter("delivery"));
	%>
	<%=price %>円x<%=count %>個+送料<%=delivery %>円=<a></a>
	<%=price*count+delivery %>円
