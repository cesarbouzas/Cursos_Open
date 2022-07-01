package curso.servlets;
import curso.clases.UsuarioXML;
import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.MultipartConfig;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.Part;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import javax.xml.parsers.DocumentBuilder;
import org.w3c.dom.Document;
import org.w3c.dom.NodeList;
import org.xml.sax.SAXException;


import org.w3c.dom.Node;
import org.w3c.dom.Element;


public class ProcesarXML extends HttpServlet {

	private static final long serialVersionUID=1L;
	public static final String URL="lectura-xml.jsp";
	public static final String NOMBRE_FICHERO="archivoXML";
	static List<UsuarioXML> usuarios=new ArrayList<>();
	
	public ProcesarXML(){}
	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException,IOException{
		procesarXML(request,response);
	}
	
	protected void doPost(HttpServletRequest request, HttpServletResponse response ) throws ServletException,IOException {
		doGet(request,response);
	}
	private void procesarXML(HttpServletRequest request ,HttpServletResponse response) {
		
		
		try {
			Part filePart=request.getPart(NOMBRE_FICHERO);
			InputStream contenidoFicheroXML=filePart.getInputStream();
			DocumentBuilderFactory dbFactory=DocumentBuilderFactory.newInstance();
			DocumentBuilder dBuilder= dbFactory.newDocumentBuilder();
			Document doc= dBuilder.parse(contenidoFicheroXML);
			
			String nif="";
			String nombre="";
			String apellidos="";
			String fechaNacimiento="";
			String asignatura="";
			
			doc.getDocumentElement().normalize();
			
			
			String nombreDocumento=doc.getElementsByTagName("nombreDocumento").item(0).getTextContent();
			String fechaDocumento=doc.getElementsByTagName("fecha").item(0).getTextContent();
			
			NodeList nodoUsuario=doc.getElementsByTagName("usuario");
			
			for(int i=0 ;i<nodoUsuario.getLength();i++) {
				Node nNode=nodoUsuario.item(i);
				Element elemento=(Element) nNode;
				nif=elemento.getElementsByTagName("nif").item(0).getTextContent();
				nombre=elemento.getElementsByTagName("nombre").item(0).getTextContent();
				apellidos=elemento.getElementsByTagName("apellidos").item(0).getTextContent();
				fechaNacimiento=elemento.getElementsByTagName("fechaNacimiento").item(0).getTextContent();
				asignatura=elemento.getElementsByTagName("asignatura").item(0).getTextContent();
				UsuarioXML usuario=new UsuarioXML(nif,nombre,apellidos,fechaNacimiento,asignatura);
				usuarios.add(usuario);
			}
			RequestDispatcher requestDispatcher=request.getRequestDispatcher(URL);
			
			request.setAttribute("nombreDocuemento", nombreDocumento);
			request.setAttribute("fechaDocuemento",fechaDocumento );
			request.setAttribute("usuarios", usuarios);
			
			requestDispatcher.forward(request, response);
			
		}catch(Exception e) {
			
			System.err.println("Erro"+e.getMessage());
			e.printStackTrace();
		}
		
	}
}
