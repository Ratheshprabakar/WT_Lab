import javax.servlet.http.*;
import javax.servlet.*;
import java.io.*;
import java.util.regex.*;
import java.sql.*;

public class DB extends HttpServlet{
	public void doPost(HttpServletRequest req,HttpServletResponse res)throws ServletException,IOException
	{
		res.setContentType("text/html");
		PrintWriter out=res.getWriter();
		
        String dbURL = "jdbc:mysql://localhost:3306/"; 
        // Database name to access 
        String dbName = "student"; 
        String dbUsername = "root"; 
        String dbPassword = ""; 

        String uname = req.getParameter("name");
        String uregno = req.getParameter("regno");
  		
  		try {
  			Class.forName( "com.mysql.jdbc.Driver"); 
        	Connection con = DriverManager.getConnection(dbURL + dbName, dbUsername, dbPassword); 
        	PreparedStatement st=con.prepareStatement("insert into details values(?,?)");
       
        	st.setString(1,uname);
			st.setString(2,uregno);  
 
			int i=st.executeUpdate();  
			out.println("<p>"+i+" records inserted</p>"); 
			Statement stmt = con.createStatement();
			String sql;
      		sql = "SELECT * FROM details";
     		ResultSet rs = stmt.executeQuery(sql);
     		out.write("<table>");
     		out.write("<tr>");
     		out.write("<th>Name</th>");
     		out.write("<th>RegNo</th>");
     		out.write("</tr>");

     		while(rs.next()) {
     			String name = rs.getString("name");
     			String regno = rs.getString("regno");

     			out.write("<tr>");
     			out.write("<td>"+name+"</td>");
     			out.write("<td>"+regno+"</td>");
     			out.write("</tr>");
     			
     		}
     		out.write("</table>");
  		}
  		catch(SQLException se){
  			out.println(se+"\n");
  		}  		
  		catch(Exception e) {
  			out.println(e);
  		}
  	}
}
