package br.com.paggi.api.resource;

import java.util.List;

import javax.persistence.EntityManager;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.WebApplicationException;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.core.UriBuilder;
import javax.ws.rs.core.UriInfo;

import br.com.paggi.api.dao.CartaoCreditoDAO;
import br.com.paggi.api.dao.impl.CartaoCreditoDAOImpl;
import br.com.paggi.api.entity.CartaoCredito;
import br.com.paggi.api.singleton.EntityManagerFactorySingleton;

@Path("/cartao-credito")
public class CartaoCreditoResource {
	
	private CartaoCreditoDAO dao;
	
	public CartaoCreditoResource() {
		EntityManager em = EntityManagerFactorySingleton.getInstance().createEntityManager();
		dao = new CartaoCreditoDAOImpl(em);
	}
	
	@GET
	@Path("{id}")
	@Produces(MediaType.APPLICATION_JSON)
	public CartaoCredito getCreditCard(CartaoCredito cartao, @PathParam("id") int codigo){
		return dao.buscar(codigo);
	}
	
	@GET
	@Produces(MediaType.APPLICATION_JSON)
	public List<CartaoCredito> listarCartoes(){
		return dao.listar();
	}
	
	@PUT
	@Path("{id}")
	@Consumes(MediaType.APPLICATION_JSON)
	public Response updateCreditCard(CartaoCredito cartao, @PathParam("id") int codigo) {
		
		try {
			cartao.setId(codigo);
			dao.atualizar(cartao);
			dao.commit();
		} catch (Exception e) {
			e.printStackTrace();
			return Response.serverError().build();
		}
		
		return Response.ok().build();
		
	}
	
	@POST
	@Consumes(MediaType.APPLICATION_JSON)
	public Response addCreditCard(CartaoCredito cartao, @Context UriInfo url) {
		
		try {
			dao.cadastrar(cartao);
			dao.commit();
		} catch (Exception e) {
			e.printStackTrace();
			return Response.serverError().build();
		}
		
		UriBuilder b = url.getAbsolutePathBuilder();
		b.path(String.valueOf(cartao.getId()));
		
		return Response.created(b.build()).build(); 
		
	}
	
	@DELETE
	@Path("{id}")
	public void removeCreditCard(@PathParam("id") int codigo) {
		
		try {
			dao.remover(codigo);
			dao.commit();
		} catch (Exception e) {
			e.printStackTrace();
			throw new WebApplicationException(javax.ws.rs.core.Response.Status.INTERNAL_SERVER_ERROR);
		}
		
	}

}
