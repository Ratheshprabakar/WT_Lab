import javax.servlet.http.*;
import javax.servlet.*;
import java.io.*;
import java.util.regex.*;

public class DemoServ extends HttpServlet{
	public void doPost(HttpServletRequest req,HttpServletResponse res)throws ServletException,IOException
	{
		res.setContentType("text/html");
		PrintWriter out=res.getWriter();
		

		String rgname = "^[a-zA-Z]+$";
		String rgemail = "^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})$";
		String rgdob = "^[0-3]?[0-9]/[0-3]?[0-9]/(?:[0-9]{2})?[0-9]{2}$";
		String rgpasswd = "((?=.*[a-z])(?=.*d)(?=.*[@#$%])(?=.*[A-Z]).{6,16})";

		boolean nameFlag = true;
		boolean emailFlag = true;
		boolean dobFlag = true;
		boolean genderFlag = true;
		boolean passwdFlag = true;
		boolean repassFlag = true;
		boolean flag = true;


		String name = req.getParameter("uname");
		String email = req.getParameter("email");
		String gender = req.getParameter("gender");
		String dob = req.getParameter("dob");
		String passwd = req.getParameter("pass");
		String repass = req.getParameter("repass");


		if(!name.matches(rgname) || name.length() < 8) {
			nameFlag = false;
			flag = false;
		}
		if(!email.matches(rgemail)) {
			emailFlag = flag = false;
		}
		if(gender.equals("---")) {
			genderFlag = flag = false;
		}
		if(!dob.matches(rgdob)) {
			dobFlag = flag = false;
		}
		// // if(!passwd.matches(rgpasswd)) {
		// // 	passwdFlag = flag = false;
		// }
		if(passwd.equals(repass) == false) {
			repassFlag = flag = false;
		}



		if(flag) {
			out.println("<p>Name: "+name+"</p>");
			out.println("<p>Email:"+email+"</p>");
			out.println("<p>DOB:"+dob+"</p>");
			out.println("<p>Gender:"+gender+"</p>");
		}
		else {
			if(!nameFlag) out.write("<h1>Invalid name</h1>");
			if(!emailFlag) out.write("<h1>Invalid email</h1>");
			if(!genderFlag) out.write("<h1>Invalid gender</h1>");
			if(!dobFlag) out.write("<h1>Invalid DOB</h1>");
			// if(!passwdFlag) out.write("<h1>Invalid password</h1>");
			if(!repassFlag) out.write("<h1>Password mismatch</h1>");
			out.write("<p><a href=\"signup-page.html\">Click here</a></p>");
		}

	}
}
